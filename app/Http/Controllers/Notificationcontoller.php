<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class Notificationcontoller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function notification()
    {
        $notification=Notification::orderBy('id','desc')->get();
        return view('admin.notification',compact('notification'));
    }
    public function view_message()
    {
        return view('admin.view_message');
    }
}
