<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(){
        return view('login');
    }

    function auth(Request $request){
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'    
        ]);
        
        if (Auth::attempt($validate)) {
            $user = Auth::user();

            if ($user->role == 'Admin') {
                return redirect('/topic');

            }elseif ($user->role == 'User') {
                return redirect('/show');
            }
        }

        return redirect()->back();
    }
}
