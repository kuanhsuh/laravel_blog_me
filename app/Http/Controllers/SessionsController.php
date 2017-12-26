<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store(Request $request)
    {
        if(! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Please check your password'
            ]);
        }
        return redirect()->home();
        // return view('sessions.create');
    }
}
