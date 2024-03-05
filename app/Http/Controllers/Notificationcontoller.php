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
/**********************************
   Date        : 04/03/2024
   Description :  view notification
**********************************/
    public function view_message($id)
    {
        $msg=Notification::where('id',$id)->first();
        return view('admin.view_message',compact('msg'));
    }
/**********************************
   Date        : 04/03/2024
   Description :  load notification
**********************************/
    public function notification()
    {
        return view('admin.notification');
    }    
/***************************************
   Date        : 04/03/2024
   Description :  delete notification
***************************************/    
    public function delete_message($id)
    {
        dd($id);
        $msg=Notification::where('id',$id)->delete();
        return redirect()->route('notification');
    }
/*****************************************
   Date        : 04/03/2024
   Description :  Listing notification
*****************************************/    
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Notification::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="' . route('view.notification', $row->id) .'"><i class="fa fa-eye"  aria-hidden="true"></i></a> <a class="btn btn-primary"  onclick="delete_modal(10)" ><i class="fa fa-trash" aria-hidden="true"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
