<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\followers;
use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class General extends Controller
{
    public function messageIndex(){
        $data = message::orderBy('id','DESC')->get();
        View::share('datas',$data);
        return view('messages.message');
    }
    public function viewMessage(Request $request){
        $data = message::find($request->id);
        $data->status= '1';
        $data->save();
        return $data ?? "0";
    }
    public function subscribeIndex(){
        $data =followers::all();
        View::share('datas',$data);
        return view('subscribe.subscribe');
    }
}
