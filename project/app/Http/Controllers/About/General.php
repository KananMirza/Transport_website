<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\services;
use App\Models\settings;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class General extends Controller
{
    public function aboutIndex(){
        $currentday = date('Y-m-d H:i:s');
        $setting = settings::first();
        View::share('setting',$setting);
        $slider=slider::where([['status','1'],['publish_date','<=',$currentday],['end_date','>=',$currentday]])->get();
        View::share('sliders',$slider);
        $service = services::where('status','1')->get();
        View::share('services',$service);
        return view('about.about');
    }
}
