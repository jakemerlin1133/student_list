<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(Request $request){

        return view('index');
    }

    public function register(){
        return view('register');
    }

    public function create(Request $request){
        $validated = $request->validate([
            "firstname" => ['required'],
            "lastname" => ['required'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:8'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect('/');
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
