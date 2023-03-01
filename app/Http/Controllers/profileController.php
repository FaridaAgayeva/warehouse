<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\profileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Hashing\BcryptHasher;

class profileController extends Controller
{  
    public function update(profileRequest $request)
    {
        $user =User::find(Auth::id());
        if(Hash::check($request->cari_parol,$user->password)){
            if(empty($request->yeni_parol) or strlen($request->yeni_parol)>2){
                if($request->yeni_parol==$request->parol_t){
                    if($request->file('psekil')){
                        $request->validate([
                            'psekil'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                        ]);

                        $file=time().'.'.$request->psekil->extension();
                        $request->psekil->storeAs('public/uploads/profiles/',$file);     
                        $user->psekil = 'storage/uploads/profiles/'.$file;
                    }
                    else{
                        $user->psekil = $user->psekil;
                    }
                    if($request->yeni_parol>3){
                        $user->password = Hash::make($request->yeni_parol);
                    }
                    else{
                        $user->name = $request->name;
                        $user->email = $request->email;
                    }
                    $user->save();
                    return redirect()->route('profile')->with('success','Dəyişikliklər yaddaşda saxlanıldı');
                }
                return redirect()->route('profile')->with('fail','Yeni parol ilə təkrar parol uyuşmur');
            }
            return redirect()->route('profile')->with('fail','Yeni parol 3 simvoldan az olmamalıdır');
        }
        return redirect()->route('profile')->with('fail','Cari parol yanlışdır');
    }  

}
