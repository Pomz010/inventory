<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AssetController extends Controller
{
    public function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            return view('components.nav-contents.asset-monitoring');
        } else {
            return redirect('/');
        }
    }

    public function create(string $asset){
        if(auth()->check()){
            $vendors = Vendor::all();
            // dd($vendors);
            $newAsset = $asset;
            return view('components.forms.create-asset', ['asset' => $newAsset, 'vendors' => $vendors]);
        } else {
            return redirect('/');
        }
    }

    // public function show(){
    // }
}
