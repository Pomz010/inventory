<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    function create(Request $request, string $asset){
        if(auth()->check()){
            $newAsset = $asset;
            return view('components.forms.create-asset', ['asset' => $newAsset]);
        } else {
            return redirect('/');
        }
    }

    function show(){
        if(auth()->check()){
            return view('components.nav-contents.asset-monitoring');
        } else {
            return redirect('/');
        }
    }
}
