<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\LoginController;

class LoginController extends Controller
{
    function index(){
        if(auth()->check()){
            return view('pages.homepage');
            // return '<h1>POMS POGI</h1>';
        } else {
            return view('pages.login-page');
        }
    }

    function login(Request $request){
        $credentials = $request->validate([
            'loginUsername' => 'required',
            'loginPassword' => 'required'
        ]);

        if(auth()->attempt([
            'username' => $credentials['loginUsername'], 
            'password' => $credentials['loginPassword']
            ])){
            $request->session()->regenerate();
            return redirect('/');
        }

        return redirect('/');
    }
    
    function signout(){
        auth()->logout();
        return redirect('/');
    }
}
