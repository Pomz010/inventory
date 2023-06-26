<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function show(){
        if(auth()->check()){
            return view('components.nav-contents.employees');
        } else {
            return redirect('/');
        }
    }

    function create(){
        if(auth()->check()){
            return view('components.forms.create-employee');
        } else {
            return redirect('/');
        }
    }
}
