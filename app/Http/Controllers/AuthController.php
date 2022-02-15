<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    //REGISTER
    public function indexRegister(){
        return view('signup', ['title' => 'Register | Amazing E-book']);
    }
 
    public function register(Request $request){
        $validate = $request->validate([
            'first' => ['required','max:25'],
            'middle' => ['max:25'],
            'last' => ['required','max:25'],
            'email' => ['email:dns','required'],
            'role' => ['required'],
            'password' => ['required','min:8'],
            'image' => ['required'],
            'gender' => ['required'],
        ]);

        if($validate){
            $register = new User();
            $register->first_name = $request->first;
            if($request->middle != null){
                $register->middle_name = $request->middle;
            }
            $register->last_name = $request->last;
            $register->gender_id = $request->gender;
            $register->email = $request->email;
            $register->role_id = $request->role;
            $register->password = Hash::make($request->password);
            $img = $request->file('image');
            $name = $request->first.'.'.$img->getClientOriginalExtension();
            $register->display_picture_link = $name;
            Storage::putFileAs('public/images/', $img, $name);

            $register->save();

            return redirect()->intended('login');
        }
 
        return redirect()->back();
    }
 
    //LOGIN
    public function indexLogin(){
        return view('login');
    }
 
    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>['required'],
            'password'=>['required']
        ]);
 
        if(Auth::attempt($credentials, true)){
            $request->session()->regenerate();
            return redirect('/');
        }
        else{
            return back();
        }
    }
 
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('logout-success');
    }
}