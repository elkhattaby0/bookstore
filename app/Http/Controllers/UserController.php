<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function create() {
        return view('components.signup');
    }

    public function store(Request $request) {
        $fname = $request->input('fname'); 
        $lname = $request->input('lname'); 
        $dateBirth = $request->input('dateBirth'); 
        $gender = $request->input('gender'); 
        $email = $request->input('email'); 
        $password = $request->input('password'); 
        $image = "users/user.png";
        
        $request->validate([
            'fname' => 'required|min:1',
            'lname' => 'required|min:1',
            'dateBirth' => 'required|date',
            'gender' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        // dd(
        //     [
        //         'fname' => $fname,
        //         'lname' => $lname,
        //         'dateBirth' => $dateBirth,
        //         'gender' => $gender,
        //         'email' => $email,
        //         'password' => $password,
        //         'image' => $image
        //     ]
        // );
        User::create([
            'fname' => $fname,
            'lname' => $lname,
            'dateBirth' => $dateBirth,
            'gender' => $gender,
            'email' => $email,
            'password' => $password,
            'image' => $image
        ]);

        return redirect()->route('signin_page')->with('message', "You've created your account successfully.");
    }
    
    // ---

    public function edit(){
        return view('dashboard.setting-user-dash');
    }

    public function update(Request $request) {

        $user = Auth::user();
        
        if ($request->old_password !== null) {
            if (!Hash::check($request->input('old_password'), $user->password)) {
                return redirect()->back()->with('error', 'The old password is incorrect.');
            }
        }
        

        if($request->has('image')) {
            $user->image = $request->file('image')->store('users', 'public');
        }else {
            $user->image ;
        }

        $user->fname = $request->input('fname'); 
        $user->lname = $request->input('lname'); 
        $user->dateBirth = $request->input('dateBirth'); 
        $user->gender = $request->input('gender'); 
        $user->email = $request->input('email'); 

        if ($request->password !== null) {
            $user->password = bcrypt($request->input('password'));
        }

        $request->validate([
            'image' => 'image|mimes:png,jpg,jpge,svg|max:10240',
            'fname' => 'required|min:1',
            'lname' => 'required|min:1',
            'dateBirth' => 'required|date',
            'gender' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            // 'old_password' => 'required_with:password|min:6',
            'password' => 'nullable|min:6',
        ]);

        $user->save();
        return view('dashboard.setting-user-dash');
    }

    // ---

    //Login
    public function show()  {
        return view('components.signin');
    }

    public function login(Request $request) {
        $email = $request->input('email'); 
        $password = $request->input('password');

        $begin = [
            "email" => $email,
            "password" => $password
        ];

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($begin)){
            return redirect()->route('user-dash');
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
