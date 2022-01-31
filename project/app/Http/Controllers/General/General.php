<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\cargo;
use App\Models\services;
use App\Models\settings;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class General extends Controller
{
    public function index(){
        $currentday = date('Y-m-d H:i:s');
        $slider = slider::where([['status','1'],['publish_date','<=',$currentday],['end_date','>=',$currentday]])->get();
        View::share('sliders',$slider);
        $service = services::where('status','1')->get();
        View::share('services',$service);
        $cargo = cargo::where('status','1')->get();
        View::share('cargoes',$cargo);
        $settings=settings::first();
        View::share('settings',$settings);
        return view('index');
    }
}
