<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Redirect;
use Hash;

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
        $validatedData = $req->validate([
          'username' => 'required|alpha|max:255',
          'user_type' => 'required|string',
          'email' => 'required|email|email:rfc,dns|max:255'
      ], [
          'username.required' => 'Please enter the user name.',
          'user_type.required' => 'Please enter the user type.',
          'email.required' => 'Please enter the email.',
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
    public function submit(Request $req)
    {
      $validatedData = $req->validate([
          'full_name' => 'required|alpha|max:255',
          'employee_id' => 'required|integer',
          'email' => 'required|email|email:rfc,dns|max:255|unique:users',
          'user_name' => 'required|alpha|max:255',
          'office' => 'required',
          'user_type' => 'required',
          'department_section' => 'required|alpha',

      ], [
          'full_name.required' => 'Please enter the name.',
          'employee_id.required' => 'Please enter the Id.',
          'email.required' => 'Please enter the email.',
          'user_name.required' => 'Please enter the user name.',
          'office.required' => 'Please enter the office.',
          'user_type.required' => 'Please enter the type.',
          'department_section.required' => 'Please enter the department.',
      ]);
        User::create([
          'full_name'=>$req->full_name,
          'email'=>$req->email,
          'employee_id'=>$req->employee_id,
          'user_name'=>$req->user_name,
          'user_type'=>$req->user_type,
          'office'=>$req->office,
          'department_section'=>$req->department_section,
          'active_status'=>1,
          'user_registerd_date'=>date("Y-m-d"),
          'password'=>Hash::make(123456),

        ]);
        return redirect()->route('all_users')->with('message','User Added Successfully!');
    }

}
