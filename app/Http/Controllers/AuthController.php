<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function login()
    {
        return view('auth.login');
    }
    public function doLogin(Request $request)
    {
        if(Auth::attempt([ "email" => $request->email, "password" => $request->password]))
        {
            return redirect()->route('home');
        }
        return redirect()->route('login');
    }


    public function register()
    {
        return view('auth.register');
    }
    public function doRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
    }
    public function doLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
