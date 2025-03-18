<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        $companyDetails = DB::table('company_details')->first();
        return view('layouts.servicesdetail', compact('companyDetails'));
    }

    public function equipmentshow()
    {
        return view('layouts.equipment.no-bake-sand-foundry');
    }
    public function sandMixerShow()
    {
        return view('layouts.equipment.sand-mixer-unit');
    }
    public function mouldhandalingShow()
    {
        return view('layouts.equipment.mould-handaling-system');
    }
    public function HomeShow(){
        return view('layouts.index');
    }
    public function AboutShow(){
        return view('layouts.about');
    }
    public function ContactShow(){
        return view('layouts.contact');
    }

}
