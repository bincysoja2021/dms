<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notificationcontoller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function notification()
    {
        return view('admin.notification');
    }
    public function view_message()
    {
        return view('admin.view_message');
    }
}
