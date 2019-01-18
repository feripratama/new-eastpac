<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserWallet;

use Auth;
use Validator;

class DshareController extends Controller
{
    public function process()
    {
        $from = "todo";
        $pk_from = "todo";
        $main_wallet = "todo";
        $send_value = "todo";

        transactionDshare($from, $pk_from, $main_wallet, $send_value);


        return response()->json([]);
    }
}
