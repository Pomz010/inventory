<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class SectionController extends Controller
{
    function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            // $departments = Department::all();
            // $businessUnits = BusinessUnit::all();
            $sections = Section::all();
            return view('components.nav-contents.departments', compact('sections'));
        } else {
            return redirect('/');
        }
    }
    
    function store(Request $request){
        if(auth()->check()){
            $newSection = $request->validate([
                'code' => ['required', 'string', 'max:255', Rule::unique('departments', 'code')],
                'name' => ['required', 'string', 'max:255', Rule::unique('departments', 'name')],
                'description' => ['nullable', 'string', 'max:255']
            ]);

            $data = array_map('strtolower', $newSection);
            Section::create($data);

            return redirect()->back()->with('success', 'New section added successfully');
        } else {
            return redirect('/');
        }
    }
}
