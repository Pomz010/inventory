<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\BusinessUnit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            $businessUnits = BusinessUnit::all();
            return view('components.nav-contents.employees', compact('businessUnits'));
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

    // public function store(Request $request){

    //     $vendor = $request->validate([
    //         'name' => ['required', 'string', 'max:255', Rule::unique('vendors', 'name')],
    //         'address' => ['required','max:255'],
    //         'phone' => ['nullable', 'digits:11', Rule::unique('vendors', 'phone')],
    //         'telephone' => ['nullable', 'regex:/^\d{3}-\d{7}$/'],
    //         'email' => ['nullable', 'email', 'email:rfc,dns', Rule::unique('vendors', 'email')]
    //     ]);

    //     $data = array_map('strtolower', $vendor);

    //     Vendor::create($data);

    //     return redirect()->back()->with('success', 'Vendor added successfully');
    // }
}
