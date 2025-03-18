<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $companyDetails = DB::table('company_details')->first();
        return view('layouts.index', compact('companyDetails'));
    }
}
