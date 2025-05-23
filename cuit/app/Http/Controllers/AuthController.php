<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        User ::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('/login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            //true
            $User = User::where(['email' => $request->email])->first();
            Auth::login($User);
        }
        //false
        return redirect('/');
    }
}
