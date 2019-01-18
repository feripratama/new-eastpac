<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\SiteConfig;
use App\User;
use App\UserTokenBalance;
use App\UserWallet;
use Auth;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $userModel)
    {
        $title = "Dashboard";
        $get_eth_price = json_decode(getEthPrice('https://sandbox-api.coinmarketcap.com'));
        // $get_eth_price = "108";

        return view('layouts.sections.home', compact('title', 'get_eth_price'));
    }

    public function contribution()
    {

        $title = "Dashboard";
        $get_eth_price = json_decode(getEthPrice('https://sandbox-api.coinmarketcap.com'));
        $transaction_code = $this->makeRandomString(7);
        // $get_eth_price = '108';
        // dd($get_eth_price);
        return view('layouts.sections.contribution', compact('title', 'get_eth_price', 'transaction_code'));
    }

    public function contributionAction(Request $request)
    {
        $user_wallet = UserWallet::where('user_id', Auth::user()->id);
        $validator = Validator::make($request->all(),[
            'eth' => 'required',
            'est' => 'required'
        ]);

        if($validator->fails()) {
            $response = [
                'msg' => 'Transaction failed',
                'title' => 'Failed',
                'icon' => 'error',
                'type' => 'error'
            ];
        } else {
            $old_balance_check = UserTokenBalance::where('user_id', Auth::user()->id);
            if($old_balance_check->count() == 0)
            {
                $old_balance = 0;
            } else {
                $old_balance = UserTokenBalance::where('user_id', Auth::user()->id)->first()->east_balance;
            }
            $get_eth_price = json_decode(getEthPrice('https://sandbox-api.coinmarketcap.com'));
            $pk = UserWallet::where('user_id', Auth::user()->id)->first()->private_key;
            $eth_val = $request->est / 10;
            // dd(number_format((float)$eth_val, 4, '.', ''));
            // $jdata = sent_transaction("http://192.168.0.147:3333", $pk, number_format((float)$eth_val, 12, '.', ''), $request->est);
            $jdata = sent_transaction(env('API_SERVER_ADDRESS'), $pk, number_format((float)$eth_val, 12, '.', ''), $request->est);

            UserTokenBalance::updateOrCreate(
                ['user_id' => Auth::user()->id],
                ['east_balance' => ($request->est + $old_balance)]
            );
            $response = [
                'msg' => 'Transaction success , recive '.$request->est.' token',
                'title' => 'Success',
                'icon' => 'success',
                'type' => 'success',
                'jdata' => $jdata,
                'east_val' => $request->est,
                'to_address' => $user_wallet->first()->wallet_address
            ];
        }

        return response()->json($response, 200);
    }

    public function transaction()
    {

        $title = "Transaction";
        $datas = getTransactionList('http://rinkeby.etherscan.io', UserWallet::where('user_id', Auth::user()->id)->first()->wallet_address);

        // $datas = json_decode($datas);
        // dd($datas);
        return view('layouts.sections.transaction', compact('title', 'datas'));
    }

    public function referral()
    {
        $title = "Referral";
        $sosmed = [
            '1' => 'facebook',
            '2' => 'twitter'
        ];

        // dd(array_key_exists(3,$sosmed));
        return view('layouts.sections.referral', compact('title', 'sosmed'));
    }

    public function kycapp()
    {
        $title = "KYC App";
        return view('layouts.sections.kycapp', compact('title'));
    }

    public function dshareIndex()
    {

        return view('layouts.sections.dshare');
    }

    public function makeRandomString($length)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        $string = '';

        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, $max)];
        }
        return $string;
    }
}
