<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\settings;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class General extends Controller
{
    public function sliderIndex(){
        $data = slider::all();
        View::share('datas',$data);
        return view('settings.slider');
    }
    public function addSlider(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'about' => 'required',
            'publish_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:publish_date',
            'image'=>'image|mimes:jpg,jpeg,png|max:1024'
        ]);

        $image = $request->file('image');
        $name = Str::slug($request->title) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
        $directory = 'assets/media/slider/';
        $image->move($directory, $name);
        $name = $directory.$name;

        $data = slider::create([
            'title'=>$request->title,
            'content'=>$request->about,
            'image'=>$name,
            'publish_date'=>$request->publish_date,
            'end_date'=>$request->end_date,

        ]);
        return redirect()->back()->with($data ? "success" : "error",true);
    }

    public function viewSlider(Request $request){
        $data = slider::find($request->id);
        return $data ?? '0';
    }
    public function updateSlider(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'about' => 'required',
            'publish_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:publish_date',
        ]);
        $data = slider::find($request->id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image'=>'image|mimes:jpg,jpeg,png|max:1024'
            ]);

            $image = $request->file('image');
            $name = Str::slug($request->title) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
            $old_image =$data->image ;
            $directory = 'assets/media/slider/';
            unlink($old_image);
            $image->move($directory, $name);
            $name = $directory.$name;
            $data->image = $name;
        }
        $data->title = $request->title;
        $data->content = $request->about;
        $data->publish_date = $request->publish_date;
        $data->end_date = $request->end_date;

        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }
    public function deleteSlider(Request $request){
        $data = slider::find($request->id);
        if($data){
            if (file_exists($data->image)) {
                unlink($data->image);
            }
            $data->delete();
        }
        return redirect()->back();
    }
    public function contactIndex(){
        $data = settings::first();
        View::share('data',$data);
        return view('settings.contact');
    }
    public function updateIndex(Request $request){
        $validated = $request->validate([
            'adress' => 'required|max:255',
            'email' => 'required',
            'phones.*' => 'required',
        ]);
        $data = settings::first();
        $phones = json_decode($data->phones);
        $data->adress=$request->adress;
        $data->email = $request->email;
        $phones[0]=$request->phone[0];
        $phones[1]=$request->phone[1];
        $phones[2]=$request->phone[2];
        $data->phones = json_encode($phones);
        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }
    public function aboutIndex(){
        $data=settings::first();
        View::share('data',$data);
        return view('settings.about');
    }
    public function updateAbout(Request $request){
        $validated = $request->validate([
            'about' => 'required|min:50',
        ]);
        $data = settings::first();

        $data->about = $request->about;

        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }

    public function logoIndex(){
        $data = settings::first();
        View::share('data',$data);
        return view('settings.logo');
    }
    public function logoUpdate(Request $request){
        $data = settings::first();
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,jpeg,png|max:1024'
            ]);

            $image = $request->file('image');
            $name = 'logo'.'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
            $old_image = $data->logo;
            $directory = 'assets/media/logo/';
            if (file_exists($old_image) && $data->logo) {
                unlink($old_image);
            }

            $image->move($directory, $name);
            $name = $directory.$name;
            $data->logo = $name;
        }
        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }
    public function faviconUpdate(Request $request){
        $data = settings::first();
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,jpeg,png|max:1024'
            ]);

            $image = $request->file('image');
            $name = 'favicon'.'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
            $old_image = $data->favicon;
            $directory = 'assets/media/logo/';
            if (file_exists($old_image) && $data->favicon) {
                unlink($old_image);
            }

            $image->move($directory, $name);
            $name = $directory.$name;
            $data->favicon = $name;
        }
        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }

    public function socialIndex(){
        $data = json_decode(settings::first()->social_link);
        View::share('data',$data);
        return view('settings.social');
    }
    public function socialUpdate(Request $request){
        $request->validate([
            'facebook' => 'required',
            'instagram' => 'required'
        ]);
        $data=settings::first();
        $links = json_decode($data->social_link);
        $links[0] = $request->facebook;
        $links[1] = $request->instagram;
        $data->social_link = json_encode($links);
        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }

}
