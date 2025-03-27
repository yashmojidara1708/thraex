<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('admin.contact_us.index');
    }
    public function fetch(Request $request){
        $contact_us = ContactUs::select(['id', 'name', 'email', 'phone' ,'subject', 'message']);

        return DataTables::of($contact_us)->make(true);
    }
}
