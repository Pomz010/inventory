<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Department;
use App\Models\BusinessUnit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class DepartmentController extends Controller
{
    function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            $departments = Department::all();
            $businessUnits = BusinessUnit::all();
            $sections = Section::all();
            return view('components.nav-contents.departments', compact('departments', 'businessUnits', 'sections'));
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

    function store(Request $request){
        if(auth()->check()){
            $newDepartment = $request->validate([
                'code' => ['required', 'string', 'max:255', Rule::unique('departments', 'code')],
                'name' => ['required', 'string', 'max:255', Rule::unique('departments', 'name')],
                'description' => ['nullable', 'string', 'max:255']
            ]);

            $data = array_map('strtolower', $newDepartment);
            Department::create($data);

            return redirect()->back()->with('success', 'New department added successfully');
        } else {
            return redirect('/');
        }
    }
}
