<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginproses(request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('foto');
        }

        return redirect('login');
    }
    
    public function register(){
        return view('register');
    }
    public function store(Request $request)
    {
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->save();

        return redirect('/login');
    }
}