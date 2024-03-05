<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Redirect;
use Hash;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use Auth;
use Session;
use App\Models\Passwordhistroy;

class Usercontoller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
/**********************************
   Date        : 05/03/2024
   Description :  view user
**********************************/
    public function view_user()
    {
      return view('admin.view_user');
    }
/**********************************
   Date        : 05/03/2024
   Description :  list for users
**********************************/    
    public function getusers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('deleted_at',NULL)->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="' . route('view.users', $row->id) .'"><i class="fa fa-eye"  aria-hidden="true"></i></a>
                                  <a href="' . route('edit.users', $row->id) .'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                  <a href="' . route('delete.users', $row->id) .'" data-toggle="modal" data-target="#userModal"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
/**********************************
   Date        : 05/03/2024
   Description :  edut users
**********************************/
    public function edit_user()
    {
      return view('admin.edit_user');
    }
/**********************************
   Date        : 05/03/2024
   Description :  update users
**********************************/
    public function update_user(Request $req)
    { 
        $validatedData = $req->validate([
          'email' => 'required|email|email:rfc,dns|max:255',
          'full_name'=>'required|max:100',
          'employee_id'=>'required|max:10',
          'office'=>'required',
          'department_section'=>'required'
      ], [
          'full_name.required' => 'Please enter the name.',
          'employee_id.required' => 'Please enter the employee id.',
          'office.required' => 'Please enter the office.',
          'email.required' => 'Please enter the email.',
          'department_section.required' => 'Please enter the Department.',
      ]);
        User::where('id',$req->id)->update([
          'email'=>$req->email,
          'full_name'=>$req->full_name,
          'employee_id'=>$req->employee_id,
          'office'=>$req->office,
          'department_section'=>$req->department_section
        ]);
        return redirect()->route('all_users')->with('message','User updated Successfully!');

    }    
/**********************************
   Date        :29/02/2024
   Description :  list settings
**********************************/
    public function settings()
    {
      return view('admin.settings');
    }
/**********************************
   Date        : 29/02/2024
   Description :  edit profile
**********************************/
     public function edit_profile($id)
    {
      $user=User::where('id',$id)->first();
      return view('admin.edit_profile',compact('user'));
    }
/**********************************
   Date        : 29/02/2024
   Description :  update profile
**********************************/
    public function update_profile(Request $req)
    { 
        $validatedData = $req->validate([
          'full_name' => 'required|max:255',
          'email' => 'required|email|email:rfc,dns|max:255'
      ], [
          'full_name.required' => 'Please enter the user name.',
          'email.required' => 'Please enter the email.',
      ]);
        User::where('id',$req->id)->update([
          'full_name'=>$req->full_name,
          'email'=>$req->email
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
/**********************************
   Date        : 05/03/2024
   Description :  view users
**********************************/      
     public function view_users($id)
    {
      $data=User::where('id',$id)->first();
      return view('admin.user.view_user',compact('data'));
    }
/**********************************
   Date        : 05/03/2024
   Description :  edit users
**********************************/      
     public function edit_users($id)
    {
         // print_r(Session::get('user_role'));
      $data=User::where('id',$id)->first();
      return view('admin.user.edit_user',compact('data'));
    }
/**********************************
   Date        : 04/03/2024
   Description :  add users
**********************************/    
    public function submit(Request $req)
    {
      $validatedData = $req->validate([
          'full_name' => 'required|alpha|max:255',
          'employee_id' => 'required|integer|unique:users',
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
      $random_password=Str::random(6);
      $userData=User::create([
          'full_name'=>$req->full_name,
          'email'=>$req->email,
          'employee_id'=>$req->employee_id,
          'user_name'=>$req->user_name,
          'user_type'=>$req->user_type,
          'office'=>$req->office,
          'department_section'=>$req->department_section,
          'active_status'=>1,
          'user_registerd_date'=>date("Y-m-d"),
          'password'=>Hash::make($random_password),
         ]); 
        Passwordhistroy::create([
            'added_by'=>Auth::user()->id,
            'user_id'=>$userData->id,
            'password_new'=>$random_password,
            'password_new_date'=>date("Y-m-d")
        ]);

       return redirect()->route('all_users')->with('message','User Added Successfully!');
    }
/**********************************
   Date        : 05/03/2024
   Description :  delete users
**********************************/
     public function user_delete($id)
    {
        User::find($id)->update(['active_status'=>0]);
        return back();
    }

}
