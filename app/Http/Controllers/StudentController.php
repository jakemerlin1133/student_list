<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){

        return view('index');
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){

        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required']
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();
            return redirect('homepage');
        }else{
            return back()->withErrors(['email' => 'Login Failed.'])->onlyInput('email');
        }


    }

}
