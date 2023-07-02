<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class VendorController extends Controller
{

    public function index(Request $request){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            $vendors = Vendor::all();
            return view('components.nav-contents.vendors', compact('vendors'));
        } else {
            return redirect('/');
        }
    }

    public function create(){
        if(auth()->check()){
            return view('components.forms.create-vendor');
        } else {
            return redirect('/');
        }
    }

    public function store(Request $request){
        // $data = array_map('strtolower', $request);

        $vendor = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('vendors', 'name')],
            'address' => ['required','max:255'],
            'phone' => ['nullable', 'digits:11', Rule::unique('vendors', 'phone')],
            'telephone' => ['nullable', 'regex:/^\d{3}-\d{7}$/'],
            'email' => ['nullable', 'email', 'email:rfc,dns']
        ]);

        $data = array_map('strtolower', $vendor);


        // dd($vendor);

        Vendor::create($data);

        return redirect()->back()->with('success', 'Vendor added successfully');
    }
}
