<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    function show(){
        if(auth()->check()){
            return view('components.nav-contents.departments');
        } else {
            return redirect('/');
        }
    }
}
