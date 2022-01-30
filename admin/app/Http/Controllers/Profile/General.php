<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class General extends Controller
{
    public function profileIndex(){
        return view('profile.profile');
    }
    public function profileUpdate(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,jpeg,png|max:1024'
            ]);

            $image = $request->file('image');
            $name = Str::slug($user->name) .'-' .rand(1000,9999).'.' . $image->getClientOriginalExtension();
            $old_image = $user->image;
            $directory = 'assets/media/users/';
            if (file_exists($old_image) && $user->image !== 'assets/media/avatars/avatar.jpg') {
                unlink($old_image);
            }

            $image->move($directory, $name);
            $name = $directory.$name;
            $user->image = $name;
        }

        if ($request->current_password) {
            $request->validate([
                'new_password' => 'required|min:8',
                'new_password_confirm' => 'required|min:8|same:new_password'
            ]);

            if (Hash::check($request->current_password, $user->password)) {
                $password = Hash::make($request->new_password);
                $user->password = $password;
            }else {
                return redirect()->back()->with('error', true);
            }
        }
        return redirect()->back()->with( $user->save() ? "success" : "error", true);
    }
}
