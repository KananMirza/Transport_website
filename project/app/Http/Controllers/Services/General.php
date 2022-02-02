<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\campaign;
use App\Models\cargo;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class General extends Controller
{
    public function servicesIndex(){
        $service = services::where('status','1')->get();
        View::share('services',$service);
        return view('services.services');
    }
    public function serviceDetails($slug){
        $service = services::where('slug',$slug)->first();
        View::share('service',$service);
        $services = services::where('status','1')->get();
        View::share('services',$services);
        return view('services.service');
    }

    public function cargoIndex(){
        $cargo = cargo::where('status','1')->get();
        View::share('cargoes',$cargo);
        return view('services.cargo');
    }

    public function campaignIndex($slug){
        $campaign = campaign::where('slug',$slug)->first();
        View::share('campaign',$campaign);
        $service = services::where('status','1')->get();
        View::share('services',$service);
        return view('services.campaign');
    }
}
