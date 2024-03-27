<?php

namespace App\Http\Controllers;

use App\Models\SoftwareAsset;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    function store(Request $request){
        if(auth()->check()){
            $newAsset = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
                'version' => ['required', 'string', 'max:255'],
                'license' => ['nullable', 'string', 'max:255'],
                'exp_date' => ['nullable', 'date'],
                'developer' => ['nullable', 'string', 'max:255'],
                'category' => ['nullable', 'string', 'max:255'],
                'date_installed' => ['nullable', 'date'],
                'serial_#' => ['required', 'string', 'max:255'],
                'purchase_date' => ['required', 'date'],
                'vendor' => ['required', 'string', 'max:255'],
                'product_key' => ['nullable', 'string', 'max:255']
            ]);

            $data = array_map('strtolower', $newAsset);
            // dd($newAsset);
            SoftwareAsset::create($data);

            return redirect()->back()->with('success', 'New asset added successfully');
        } else {
            return redirect('/');
        }
    }
}
