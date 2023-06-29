<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VendorController extends Controller
{
    function show(){
        if(auth()->check()){
            return view('components.nav-contents.vendors');
        } else {
            return redirect('/');
        }
    }

    function create(){
        if(auth()->check()){
            return view('components.forms.create-vendor');
        } else {
            return redirect('/');
        }
    }

    function store(Request $request){
        $vendor = $request->validate([
            'vendor_name' => ['required', 'max:255', Rule::unique('vendors', 'vendor_name')],
            'vendor_address' => ['required','max:255'],
            'cellphone_#' => ['nullable', 'phone:TH'],
            'telephone_#' => ['nullable', 'regex:/^\d{3}-\d{7}$/'],
            'vendor_email' => ['nullable', 'email']
        ]);

        // dd($vendor);

        Vendor::create($vendor);

        return redirect()->back()->with('success', 'Vendor added successfully');
    }
}
