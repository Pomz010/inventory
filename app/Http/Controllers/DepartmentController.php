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

    function create(string $department){
        if(auth()->check()){
            $newDepartment = $department;
            return view('components.forms.create-department', ['department' => $newDepartment]);
        } else {
            return redirect('/');
        }
    }
}
