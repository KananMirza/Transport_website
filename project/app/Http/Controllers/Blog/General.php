<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\follower;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class General extends Controller
{
    public function blogIndex(){
        $blog = blog::where('status','1')->get();
        View::share('blogs',$blog);
        $service = services::where('status','1')->get();
        View::share('services',$service);
        $blogs=blog::where('status','1')->limit(3)->orderBy('id','DESC')->get();
        View::share('blogs',$blogs);

        return view('blog.blogs');
    }
    public function subscribe(Request $request){
        $validate = $request->validate([
            'email'=>'required'
        ]);
        $data = follower::create([
            'email'=>$request->email
        ]);

        return redirect()->back()->with($data ? 'follow' : 'error',true);
    }
    public function blogDetails($slug){

        $blog = blog::where('slug',$slug)->first();
        View::share('blog',$blog);
        $service = services::where('status','1')->get();
        View::share('services',$service);
        $blogs=blog::where('status','1')->limit(3)->orderBy('id','DESC')->get();
        View::share('blogs',$blogs);

        return view('blog.blog');
    }
}
