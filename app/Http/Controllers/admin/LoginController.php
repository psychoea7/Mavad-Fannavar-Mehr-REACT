<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
            $user = User::where('name' , $request->name)->where('password' , $request->password)->first();

            if(!$user){
                alert()->error('سیکتیر!', '');
                return redirect()->route('home.pages.index');
            }else{
                auth()->login($user, $remember = true);
                return redirect()->route('admin.adminIndex');
            }
    }

    public function sendForm(){
        return view('admin.auth.login');
    }
}
