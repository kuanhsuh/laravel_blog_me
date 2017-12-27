<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class SessionsController extends Controller
{
    // if you are logged in u only get access to destroy
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    public function create()
    {
        return view('sessions.create');
    }
    public function store(Request $request)
    {
        if (Auth::attempt(request(['email', 'password']))) {
            // Authentication passed...
            return redirect()->home();
        } else {
            return back()->withErrors([
                'message' => 'Please check your password'
            ]);
        }
        // dd(request(['email', 'password']));
        // if(!Auth::attempt(request(['email', 'password']))) {
        //     return back()->withErrors([
        //         'message' => 'Please check your password'
        //     ]);
        // }
        // return redirect()->home();
        // return view('sessions.create');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
