<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\cargo;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class General extends Controller
{
    public function serviceIndex(){
        $data = services::all();
        View::share('datas',$data);
        return view('services.service');
    }
    public function addService(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'about' => 'required',
            'image'=>'image|mimes:jpg,jpeg,png|max:1024'
        ]);
        $slug = Str::slug($request->title);
        $image = $request->file('image');
        $name = Str::slug($request->title) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
        $directory = 'assets/media/services/';
        $image->move($directory, $name);
        $name = $directory.$name;
        $data = services::create([
            'title'=>$request->title,
            'content'=>$request->about,
            'slug'=>$slug,
            'image'=>$name
        ]);

        return redirect()->back()->with($data ? "success" : "error",true);
    }
    public function changeStatus(Request $request){
        $data = services::find($request->id);
        $data->status = $request->status;

        return  $data->save() ? '1' : '0';
    }
    public function viewService(Request $request){
        $data = services::find($request->id);
        return $data ?? '0';
    }
    public function updateService(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'title' => 'required|max:255',
            'about' => 'required',
            'image'=>'image|mimes:jpg,jpeg,png|max:1024'
        ]);
        $data = services::find($request->id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,jpeg,png|max:1024'
            ]);

            $image = $request->file('image');
            $name = Str::slug($request->title) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
            $old_image = $data->image;
            $directory = 'assets/media/services/';
                unlink($old_image);

            $image->move($directory, $name);
            $name = $directory.$name;
            $data->image = $name;
        }
        $data->title = $request->title;
        $data->content = $request->about;

        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }
    public function deleteService(Request $request){
            $data = services::find($request->id);
        if($data){
            if (file_exists($data->image)) {
                unlink($data->image);
            }
            $data->delete();
        }
            return $data ? '0' : '1';
    }

    public function cargoIndex(){
        $data = cargo::all();
        View::share('datas',$data);
        return view('services.cargo');
    }

    public function addCargo(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'about' => 'required',
            'image'=>'image|mimes:jpg,jpeg,png|max:1024'
        ]);
        $image = $request->file('image');
        $name = Str::slug($request->title) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
        $directory = 'assets/media/cargo/';
        $image->move($directory, $name);
        $name = $directory.$name;
        $data = cargo::create([
            'title'=>$request->title,
            'content'=>$request->about,
            'image'=>$name
        ]);

        return redirect()->back()->with($data ? "success" : "error",true);
    }
    public function statusIndex(Request $request){
        $data = cargo::find($request->id);
        $data->status = $request->status;

        return  $data->save() ? '1' : '0';
    }
    public function viewCargo(Request $request){
        $data = cargo::find($request->id);
        return $data ?? '0';
    }
    public function updateCargo(Request $request){
        $validated = $request->validate([
            'id' => 'required',
            'title' => 'required|max:255',
            'about' => 'required',
            'image'=>'image|mimes:jpg,jpeg,png|max:1024'
        ]);
        $data = cargo::find($request->id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,jpeg,png|max:1024'
            ]);

            $image = $request->file('image');
            $name = Str::slug($request->title) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
            $old_image = $data->image;
            $directory = 'assets/media/cargo/';
            unlink($old_image);

            $image->move($directory, $name);
            $name = $directory.$name;
            $data->image = $name;
        }
        $data->title = $request->title;
        $data->content = $request->about;

        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }
    public function deleteCargo(Request $request){
        $data = cargo::find($request->id);
        if($data){
            if (file_exists($data->image)) {
                unlink($data->image);
            }
            $data->delete();
        }
        return $data ? '0' : '1';
    }
}
