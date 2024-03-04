<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Yajra\DataTables\DataTables;

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
    public function view_message($id)
    {
        $msg=Notification::where('id',$id)->first();
        return view('admin.view_message',compact('msg'));
    }
    public function delete_message($id)
    {
        $msg=Notification::where('id',$id)->delete();
        return redirect()->route('notification');
    }
    public function getnotification(Request $request)
    {
        if ($request->ajax()) {
            $data = Notification::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="' . route('view.notification', $row->id) .'"><i class="fa fa-eye"  aria-hidden="true"></i></a> <a href="' . route('delete.notification', $row->id) .'" data-toggle="modal" data-target="#notificationModal"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
