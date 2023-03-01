<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class signinController extends Controller
{
    public function signIn(Request $post){
        if(!Auth::attempt(['email'=>$post->email,'password'=>$post->password])){
            return redirect()->back()->with('danger','Login ve ya parol yanlisdir');
        }
        else{
            return redirect()->route('brands')->with('success','daxil oldunuz');
        }
    } 
    public function logout(Request $post){
        auth()->logout();
        return redirect()->route('signup');
    }   
}
