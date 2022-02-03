<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest'])->only(['indexLogin', 'indexRegister', 'processLogin', 'processRegister']);
        $this->middleware(['auth'])->only(['processLogout']);
    }
    /**
     * Display login form
     *
     * @return \Illuminate\Http\Response
     */
    public function indexLogin()
    {
        return view('auth.login');
    }

    /**
     * Display register form.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexRegister()
    {
        return view('auth.register');
    }

    /**
     * Process for login.
     *
     * @return \Illuminate\Http\Response
     */
    public function processLogin(Request $request)
    {
        $request->validate([
            'email'=> 'required|email|max:255',
            'password'=> 'required',
        ]);

        if(!Auth::attempt($request->only('email', 'password'))){
            return back()->with('error', 'Invalid Login Details');
        }
        else{
            return redirect()->route('index')->with('status', 'Login Success');
        }

    }


    /**
     * Process for register.
     *
     * @return \Illuminate\Http\Response
     */
    public function processRegister(Request $request)
    {
        $request->validate([
            'name'=> 'required|max:255',
            'username'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'password'=> 'required|confirmed',            
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'username'=> $request->username,
            'password'=> Hash::make($request->password),            
        ]);
        // auth()->attempt($request->only('email', 'password'));           
        // this line will check user exists in db and give authority if did
        // but we don't give direct access instead we will redirect him to login page.
        return redirect()->route('login')->with('status', 'Account has been created. Login Here');
    }

    /**
     * Process for logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function processLogout()
    {
        Auth::logout();
        return redirect()->route('index')->with('status', 'Logged out.');
    }
}
