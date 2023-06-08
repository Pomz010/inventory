<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccordionController extends Controller
{
    function create(){
        if(auth()->check()){
            return view('forms.asset-movement');
        } else {
            return redirect('/');
        }
    }
}
