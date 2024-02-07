<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create() {
        return view('components.signup');
    }

    public function store(Request $request) {
        $fname = $request->fname; 
        $lname = $request->lname; 
        $dateBirth = $request->dateBirth; 
        $gender = $request->gender; 
        $email = $request->email; 
        $password = $request->password; 
        
        $request->validate([
            'fname' => 'required|min:1',
            'lname' => 'required|min:1',
            'dateBirth' => 'required|date',
            'gender' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'fname' => $fname,
            'lname' => $lname,
            'dateBirth' => $dateBirth,
            'gender' => $gender,
            'email' => $email,
            'password' => $password 
        ]);

        return redirect()->route('signin_page')->with('message', "You've created your account successfully.");
    }

    //Login
    public function show()  {
        return view('components.signin');
    }

    public function login(Request $request) {
        $email = $request->email; 
        $password = $request->password;

        $begin = [
            "email" => $email,
            "password" => $password
        ];

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($begin)){
            return redirect()->route('home_page');
        } else {
            return redirect()->route('signin_page')->with('Field', 'Email or password incorrect.');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('home_page');
    }

}
