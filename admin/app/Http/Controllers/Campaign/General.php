<?php

namespace App\Http\Controllers\Campaign;

use App\Http\Controllers\Controller;
use App\Models\campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class General extends Controller
{
    public function campaignIndex(){
        return view('campaign.campaign');
    }
    public function campaignAdd(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'about' => 'required',
            'publish_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:publish_date',
            'image'=>'image|mimes:jpg,jpeg,png|max:1024'
        ]);

        $image = $request->file('image');
        $name = Str::slug($request->title) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
        $directory = 'assets/media/campaign/';
        $image->move($directory, $name);
        $name = $directory.$name;

        $slug = Str::slug($request->title);

        $data = campaign::create([
            'title'=>$request->title,
            'slug'=>$slug,
            'content'=>$request->about,
            'image'=>$name,
            'publish_date'=>$request->publish_date,
            'end_date'=>$request->end_date,

        ]);
        return redirect()->back()->with($data ? "success" : "error",true);
    }

    public function allcampaign(){
        $data = campaign::all();
        View::share('datas',$data);
        return view('campaign.allcampaign');
    }

    public function viewcampaign(Request $request){
        $data = campaign::find($request->id);
        return $data ?? '0';
    }

    public function updatecampaign(Request $request){

        $validated = $request->validate([
            'edit_title' => 'required|max:255',
            'edit_content' => 'required',
            'edit_publish_date' => 'required|date',
            'edit_end_date' => 'required|date|after_or_equal:edit_publish_date',
        ]);
        $data = campaign::find($request->id);
        if ($request->hasFile('edit_image')) {
            $request->validate([
                'edit_image'=>'image|mimes:jpg,jpeg,png|max:1024'
            ]);

            $image = $request->file('edit_image');
            $name = Str::slug($request->edit_title) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
            $old_image =$data->image ;
            $directory = 'assets/media/campaign/';
               unlink($old_image);
            $image->move($directory, $name);
            $name = $directory.$name;
            $data->image = $name;
        }
        $slug = Str::slug($request->edit_title);
        $data->title = $request->edit_title;
        $data->slug = $slug;
        $data->content = $request->edit_content;
        $data->publish_date = $request->edit_publish_date;
        $data->end_date = $request->edit_end_date;

        return redirect()->back()->with($data->save() ? "success" : "error",true);
    }
    public function deletecampaign(Request $request){
        $data = campaign::find($request->id);
        if($data){
            if (file_exists($data->image)) {
                unlink($data->image);
            }
            $data->delete();
        }
        return redirect()->back();
    }
}
