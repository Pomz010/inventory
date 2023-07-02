<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PreviousPageController extends Controller
{
    public function returnToPreviousPage(Request $request){
        
        return redirect(Session::get('previousPage'));
    }
}
