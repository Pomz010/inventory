<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            
            return view('components.nav-contents.users');
        } else {
            return redirect('/');
        }
    }

    function create(){
        if(auth()->check()){
            $employees = Employee::all();
            return view('components.forms.create-user', compact('employees'));
        } else {
            return redirect('/');
        }
    }
}
