<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Datatables;

class Notificationcontoller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function notification()
    {
        $notification=Notification::paginate(10);
        return view('admin.notification',compact('notification'));
    }
    public function notification_filter()
    {
        dd("filter");
        $notification=Notification::paginate(10);
        return view('admin.notification',compact('notification'));
    }
    public function view_message()
    {
        return view('admin.view_message');
    }
    public function getnotification(Request $request)
    {
        if ($request->ajax()) {
            $data = Notification::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
