<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
 
class ProfileController extends Controller
{
    public function create(){
        return view('profile');
    }
 
    public function update(Request $request, $id){
 
        $validate = $request->validate([
            'first' => ['required','max:25', 'alpha'],
            'middle' => ['max:25', 'alpha'],
            'last' => ['required','max:25', 'alpha'],
            'gender' => ['required'],
            'email' => ['email:dns','required'],
            'role' => ['required'],
            'password' => ['required','min:8'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg'],
        ]);
 
        if($validate){
            $update = User::find($id);
            $update->first_name = $request->first;
            if($request->middle != null){
                $update->middle_name = $request->middle;
            }
            $update->last_name = $request->last;
            $update->gender_id = $request->gender;
            $update->email = $request->email;
            $update->role_id = $request->role;
            $update->password = Hash::make($request->password);
            $img = $request->file('image');
            $name = $request->first.'.'.$img->getClientOriginalExtension();
            $update->display_picture_link = $name;
            Storage::putFileAs('public/images/', $img, $name);

            $update->save();

            return redirect('/success-update');
        }
        return redirect()->back();
    }

    public function success(){
        return view('update-success');
    }
}