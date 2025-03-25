<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        $companyDetails = DB::table('company_details')->first();
        return view('frontend.layouts.servicesdetail', compact('companyDetails'));
    }

    public function equipmentshow()
    {
        return view('frontend.layouts.equipment.no-bake-sand-foundry');
    }
    public function noBakesandShow()
    {
        return view('frontend.layouts.equipment.no-bake-sand-foundry');
    }
    public function sandMixerShow()
    {
        return view('frontend.layouts.equipment.sand-mixer-unit');
    }
    public function mouldhandalingShow()
    {
        return view('frontend.layouts.equipment.mould-handaling-system');
    }
    public function HomeShow(){
        return view('frontend.layouts.index');
    }
    public function AboutShow(){
        return view('frontend.layouts.about');
    }
    public function ContactShow(){
        return view('frontend.layouts.contact');
    }

    public function greensandShow()
    {
        return view('frontend.layouts.equipment.green-sand-foundry-equipments');
    }
    public function lostfoamShow()
    {
        return view('frontend.layouts.equipment.lost-foam-casting-plant');
    }

}
