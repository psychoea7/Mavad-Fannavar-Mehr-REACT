<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
            $user = User::where('email' , $request->name)->where('password' , Hash::check('password' , $request->password))->first();

            if(!$user){
                alert()->error('سیکتیر!', '');
                return redirect()->back();
            }else{
                auth()->login($user, $remember = true);
                return redirect()->route('admin.adminIndex');
            }
    }

    public function sendForm(){
        return view('admin.auth.login');
    }
}
