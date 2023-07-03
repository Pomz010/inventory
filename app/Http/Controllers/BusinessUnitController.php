<?php

namespace App\Http\Controllers;

use App\Models\BusinessUnit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class BusinessUnitController extends Controller
{

    public function index(Request $request){
        // if(auth()->check()){
        //     Session::put('previousPage', request()->fullUrl());
        //     $businessUnits = BusinessUnit::all();
        //     return view('components.nav-contents.departments', compact('businessUnits'));
        // } else {
        //     return redirect('/');
        // }

        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            // $departments = Department::all();
            $businessUnits = BusinessUnit::all();
            // $sections = Section::all();
            return view('components.nav-contents.departments', compact('businessUnits'));
        } else {
            return redirect('/');
        }
    }

    public function store(Request $request){
        // $data = array_map('strtolower', $request);

        $businessUnit = $request->validate([
            'code' => ['required', 'string', 'max:255', Rule::unique('business_units', 'code')],
            'name' => ['required', 'string', 'max:255', Rule::unique('business_units', 'name')],
            'address' => ['required', 'string'],
            'description' => ['nullable', 'max:255']
        ]);

        $data = array_map('strtolower', $businessUnit);


        // dd($vendor);

        BusinessUnit::create($data);

        return redirect()->back()->with('success', 'Business Unit added successfully');
    }
}
