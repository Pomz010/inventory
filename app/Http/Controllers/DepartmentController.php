<?php

namespace App\Http\Controllers;

use App\Models\BusinessUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            $businessUnits = BusinessUnit::all();
            return view('components.nav-contents.departments', compact('businessUnits'));
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
