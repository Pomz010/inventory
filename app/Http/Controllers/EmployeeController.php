<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Employee;
use App\Models\Department;
use App\Models\BusinessUnit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            $employees = Employee::all();
            return view('components.nav-contents.employees', compact('employees'));
        } else {
            return redirect('/');
        }
    }

    function create(){
        if(auth()->check()){
            $businessUnits = BusinessUnit::all();
            $departments = Department::all();
            $sections = Section::all();
            return view('components.forms.create-employee', compact('businessUnits', 'departments', 'sections'));
        } else {
            return redirect('/');
        }
    }

    public function store(Request $request){

        $employee = $request->validate([
            'employee_number' => ['required', 'string', 'max:255', Rule::unique('employees', 'employee_number')],
            'business_unit_id' => ['required', 'string', 'max:255'],
            'department_id' => ['required', 'max:255'],
            'section_id' => ['required', 'max:255'],
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'middle_name' => ['required', 'string'],
            'ext_name' => ['nullable', 'string'],
            'gender' => ['required', 'string'],
            'position' => ['required', 'string'],
            'date_hired' => ['required', 'date'],
            'email' => ['required', 'email', 'email:rfc,dns', Rule::unique('employees', 'email')]
        ]);

        $data = array_map('strtolower', $employee);
        Employee::create($data);
        return redirect()->back()->with('success', 'Employee added successfully');
    }
}
