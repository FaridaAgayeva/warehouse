<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\signupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class signupController extends Controller
{
    public function gonderUser(signupRequest $postSignup){
        $con = new User();
        $usay = $con->where('email','=',$postSignup->email)->count();
        if($usay==0){
            $con->name = $postSignup->name;
            $con->email = $postSignup->email;
            $con->password = Hash::make($postSignup->password);
            $con->telefon = $postSignup->telefon;
            $con->psekil = ' ';
            $con->save();
            return redirect()->route('signup')->with('success','Qeydiyyatdan kecdiniz');
        }
        return redirect()->route('signup')->with('danger','Bu account artiq movcuddur');
        
}
}
