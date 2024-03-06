<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Userlogs;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        date_default_timezone_set("Asia/Kolkata");
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $session_role=session()->put('user_role', Auth::user()->user_type);
        User::where('id',Auth::user()->id)->update(['last_login_time'=>date("d-m-Y h:i:sa")]);
        Userlogs::create(['user_id'=>Auth::user()->id,'last_login_time'=>date("d-m-Y h:i:sa"),'login_ip'=>request()->ip()]);
        return view('admin.dashboard');
    }
/******************************
   Date        : 27/02/2024
   Description :  logout
******************************/
     public function logout()
    {
        Auth::logout();
        session()->forget('user_role');
        return redirect('/')->with('message','User logout Successfully!');

    }

}
