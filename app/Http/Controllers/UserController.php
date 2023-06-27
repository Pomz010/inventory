<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show(){
        if(auth()->check()){
            return view('components.nav-contents.users');
        } else {
            return redirect('/');
        }
    }
}
