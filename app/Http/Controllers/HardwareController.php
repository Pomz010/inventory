<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HardwareController extends Controller
{
    function create(Request $request){
        if(auth()->check()){
            // return view('forms.asset-movement');
            if ($request->ajax()) {
                // Process the AJAX request and return the desired view
                return view('tab-contents.hardware')->render();
            } else {
                // Handle non-AJAX request differently if needed
                return "console.log('Page not found')";
            }
        } else {
            return redirect('/');
        }
    }
}
