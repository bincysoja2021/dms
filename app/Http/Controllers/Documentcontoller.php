<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
