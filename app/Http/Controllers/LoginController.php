<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

class LoginController extends Controller
{
    function index(){
        if(auth()->check()){
            return view('pages.homepage');
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
            return view('pages.homepage');
        } else {

            return view('pages.login-page');
        }
    }

    function signout(){
        auth()->logout();
        return view('pages.login-page');
    }
}
