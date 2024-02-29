<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontoller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function view_user()
    {
      return view('admin.view_user');
    }

    public function edit_user()
    {
      return view('admin.edit_user');
    }

    public function settings()
    {
      return view('admin.settings');
    }
     public function edit_profile()
    {
      return view('admin.edit_profile');
    }
     public function tags()
    {
      return view('admin.tags');
    }
     public function all_users()
    {
      return view('admin.user.all_users');
    }
     public function add_users()
    {
      return view('admin.user.add_users');
    }
     public function view_users()
    {
      return view('admin.user.view_user');
    }
     public function edit_users()
    {
      return view('admin.user.edit_user');
    }

}
