<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    function show(){
        if(auth()->check()){
            return view('components.nav-contents.vendors');
        } else {
            return redirect('/');
        }
    }

    function create(){
        if(auth()->check()){
            return view('components.forms.create-vendor');
        } else {
            return redirect('/');
        }
    }
}
