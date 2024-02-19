<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            return redirect('/homepage');
        }else{
            return back()
            ->withErrors(['email' => 'Username or password incorrect',
            'password' => 'Username or password incorrect'
            ])->onlyInput('email');
        }
    }

    public function homepage(){
        if (Auth::check()) {
            return view('/homepage');
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function add(){
        return view('/add');
    }

    public function submit_student(Request $request){
        $validated = $request->validate([
            "firstname" => ['required', 'min:4'],
            "lastname" => ['required', 'min:4'],
            "age" => ['required','numeric', 'min:17'],
            "gender" => ['required', 'min:4'],
            "block" => ['required', 'min:4'],
        ]);
        $student = Student::create($validated);
        return redirect('/homepage');
    }
}
