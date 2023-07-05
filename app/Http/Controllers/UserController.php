<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function index(){
        if(auth()->check()){
            Session::put('previousPage', request()->fullUrl());
            $users = User::all();
            return view('components.nav-contents.users', compact('users'));
        } else {
            return redirect('/');
        }
    }

    function create(){
        if(auth()->check()){
            $employees = Employee::all();
            return view('components.forms.create-user', compact('employees'));
        } else {
            return redirect('/');
        }
    }

    function store(Request $request){
        if(auth()->check()){
            $user = $request->validate([
                'employee_id' => ['required', 'string', Rule::unique('users', 'employee_id')],
                'username' => ['required', 'string', 'max:255', Rule::unique('users', 'username')],
                'role' => ['required', 'string'],
                'email' => ['required', 'max:255'],
                'password' => ['required', 'min:8']
            ]);

            // $data = array_map('strtolower', $user);
            // dd($user);
    
            User::create($user);
            return redirect()->back()->with('success', 'Business Unit added successfully');
        } else {
            return redirect('/');
        }
    }
}