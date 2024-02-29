<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Redirect;

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
     public function edit_profile($id)
    {
      $user=User::where('id',$id)->first();
      return view('admin.edit_profile',compact('user'));
    }
    public function update_profile(Request $req)
    {
       $this->validate($req,[
            'username'=>['required', 'max:255'],
            'user_type'=>['required', 'string', 'max:255'],
            'email'=>['required', 'email', 'max:255'],
            ]);
        User::where('id',$req->id)->update([
          'user_name'=>$req->username,
          'email'=>$req->email,
          'user_type'=>$req->user_type
        ]);
        return redirect()->route('settings')->with('message','User updated Successfully!');

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
