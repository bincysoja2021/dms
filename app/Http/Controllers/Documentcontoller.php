<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Document;
use App\Models\Notification;

class Documentcontoller extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function all_document()
    {
      return view('admin.document.all_document');
    }

    public function view_file()
    {
      return view('admin.document.view_file');
    }
    public function edit_file()
    {
      return view('admin.document.edit_file');
    }
    public function all_invoices()
    {
      return view('admin.invoice.all_invoices');
    }

    public function view_invoice()
    {
      return view('admin.invoice.view_invoice');
    }
    public function edit_invoice()
    {
      return view('admin.invoice.edit_invoice');
    }
    public function schedule_document()
    {
      return view('admin.schedule_document');
    }
    public function upload_document()
    {
      return view('admin.upload_document');
    }
    public function failed_document()
    {
      return view('admin.failed_document');
    }
    public function submit(Request $req)
    {
      $validatedData = $req->validate([
          'doc_type'=>'required',
          'company_id'=>'required',
          'company_name'=>'required',
          'image'=>'required|mimes:pdf|file|max:4000'
      ], [
          'doc_type.required' => 'Please enter the Document type.',
          'company_id.required' => 'Please enter the Company id.',
          'company_name.required' => 'Please enter the Company name.',
          'image.required' => 'Please upload the file (format contain pdf,maximum size upto 4mb).',
      ]);
      $genearte_number=random_int(100000, 999999);
      Document::Create([
          'user_id'=>Auth::user()->id,
          'date'=>date('d-m-y'),
          'document_type'=>$req->doc_type,
          'invoice_number'=>'IN-'.$genearte_number,
          'invoice_date'=>date('d-m-y'),
          'sales_order_number'=>"",
          'shipping_bill_number'=>'SB-'.$genearte_number,
          'company_name'=>$req->company_name,
          'company_id'=>$req->company_id,
          'filename'=>"",
          'status'=>"Completed"
        ]);
      notification_data($id=Auth::user()->id,$type=Auth::user()->user_type,$date=date('d-m-y'),$message="Manualy upload file Successfully",$message_title="Manualy Document upload",$status="Completed");
      return redirect()->route('upload_document')->with('message','Manualy upload file Successfully!');

    }
    public function failed_docs_submission(Request $req)
    {
      $genearte_number=random_int(100000, 999999);
      Document::Create([
          'user_id'=>Auth::user()->id,
          'date'=>date('d-m-y'),
          'document_type'=>$req->type,
          'invoice_number'=>'IN-'.$genearte_number,
          'invoice_date'=>date('d-m-y'),
          'sales_order_number'=>"",
          'shipping_bill_number'=>'SB-'.$genearte_number,
          'company_name'=>$req->name,
          'company_id'=>$req->company_id,
          'filename'=>$req->image,
          'status'=>"Failed"
        ]);
      notification_data($id=Auth::user()->id,$type=Auth::user()->user_type,$date=date('d-m-y'),$message="Manualy Document upload",$message_title=$req->msg,$status="Failed");
      return response()->json([
          'message'   =>$req->msg,
          'success'   => 1,
        ]);
    }
}
