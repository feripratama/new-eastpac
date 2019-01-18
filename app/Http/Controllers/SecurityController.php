<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Auth;
use Browser;
use App\User;
use App\Security;
class SecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Browser::browserName());
        $activities = Activity::where('causer_id', Auth::user()->id)->get();
        $security = Security::where('user_id', Auth::user()->id)->first();

        $activityLog = FALSE;
        $passwordChange = FALSE;
        $tokenWithDraw = FALSE;

        $title = 'Security';
        return view('layouts.sections.security', compact('title',
                                                        'activities',
                                                        'activityLog',
                                                        'passwordChange',
                                                        'tokenWithDraw',
                                                        'security'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activityLog(Request $request)
    {
        if($request->activityLog ===  FALSE)
        {
            $security = Security::where('user_id', Auth::user()->id)->update([
                'activityLog' => 0
            ]);
        }
        // elseif ($request->activityLog === TRUE) {

        //     $security = Security::where('user_id', Auth::user()->id)->update([
        //         'activityLog' => 0
        //     ]);
        // }
    }
}
