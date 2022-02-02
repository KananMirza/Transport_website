<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\campaign;
use App\Models\cargo;
use App\Models\contact;
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
        $campaign = campaign::where([['status','1'],['publish_date','<=',$currentday],['end_date','>=',$currentday]])->get();
        View::share('campaigns',$campaign);
        $blog = blog::where('status','1')->limit(3)->orderBy('id','DESC')->get();
        View::share('blogs',$blog);
        return view('index');
    }
    public function order(Request $request){
        $validated = $request->validate([
                'name'=>'required',
                'phone'=>'required',
                'message'=>'required'
        ]);

        $order=contact::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'content'=>$request->message,

        ]);

        return redirect()->back()->with($order ? 'success' : 'error',true);
    }
    public function search(Request $request){
        return view('search');
    }
}
