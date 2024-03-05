<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    public function index()
    {
        $session_role=session()->put('user_role', Auth::user()->user_type);
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
        return redirect('/');

    }
}
