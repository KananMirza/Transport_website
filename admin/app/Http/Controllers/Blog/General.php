<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class General extends Controller
{
    public function blogIndex(){
        return view('blog.blog');
    }
    public function blogAdd(Request $request){
        $validated = $request->validate([
            'title' => 'required|',
            'blog_content' => 'required|',
            'tags' => 'required|',
            'image' => 'image|mimes:jpg,jpeg,png|max:1024|',
        ]);
        $slug = Str::slug($request->title);

        $image = $request->file('image');
        $name = $slug.'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
        $directory = 'assets/media/blog/';
        $image->move($directory, $name);
        $name = $directory.$name;

        $blog =blog::create([
            'user_id'=>User::first()->id,
            'title'=>$request->title,
            'slug'=>$slug,
            'content'=>$request->blog_content,
            'tags'=>$request->tags,
            'image'=>$name,
        ]);
        return redirect()->back()->with($blog ? "success" : "error",true);
    }
    public function allBlog(){
        $data = blog::all();
        View::share('datas',$data);
        return view('blog.allblog');
    }
    public function blogStatus(Request $request){
        $blog = blog::find($request->id);
        $blog->status = $request->status;
        return $blog->save() ? '1' : '0';
    }
    public function blogDelete(Request $request){
        $data = blog::find($request->id);
        if($data){
            if (file_exists($data->image)) {
                unlink($data->image);
            }
            $data->delete();
        }
        return $data ? '0' : '1';
    }
    public function editBlog($id){
        $blog = blog::find($id);
        View::share('blog',$blog);
        return view('blog.editblog');
    }
    public function updateBlog(Request $request){
        $validated = $request->validate([
            'id'=>'required',
            'title' => 'required|',
            'blog_content' => 'required|',
            'tags' => 'required|',
        ]);
        $blog = blog::find($request->id);
        $slug = Str::slug($request->title);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,jpeg,png|max:1024'
            ]);

            $image = $request->file('image');
            $name = $slug .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
            $old_image = $blog->image;
            $directory = 'assets/media/blog/';
            if (file_exists($old_image) && $blog->image) {
                unlink($old_image);
            }
            $image->move($directory, $name);
            $name = $directory.$name;
            $blog->image = $name;
        }
        $blog->title = $request->title;
        $blog->content = $request->blog_content;
        $blog->slug=$slug;
        $blog->tags = $request->tags;
        return redirect()->back()->with($blog->save() ? "success" : "error",true);
    }
}
