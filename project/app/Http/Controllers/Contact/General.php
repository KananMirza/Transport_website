<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class General extends Controller
{
    public function contactIndex(){
        $setting = settings::first();
        View::share('setting',$setting);
        return view('contact.contact');
    }
}
