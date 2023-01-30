<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login.reg', ['title'=>'registration']);
    }
    
    public function registrate(Request $request)
    {
        $validated = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required', Password::min(6)]
        ]);
        
        $auth = new User;
        $auth->email = $validated['email'];
        $auth->password = Hash::make($validated['password']);
        $auth ->save();
        
        return redirect('auth');
    }
    
    public function authForm()
    {
        return view('login.auth', ['title'=>'authentification']);
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'],
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect('/users');
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect()->action([LoginController::class, 'authForm']);
    }
}
