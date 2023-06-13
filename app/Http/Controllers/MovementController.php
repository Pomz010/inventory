<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovementController extends Controller
{
    function create(Request $request){
        if(auth()->check()){
            // // return view('forms.asset-movement');
            // if ($request->isMethod('GET')) {
            //     // Process the AJAX request and return the desired view
            //     return view('tab-contents.asset-movement')->render();
            // } else {
            //     // Handle non-AJAX request differently if needed
            //     return "console.log('Page not found')";
            // }
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
