<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(Request $request)
    {
        if(!Auth::check()){
            return redirect()->action([LoginController::class, 'loginForm']);
        }
        
        $user = Auth::user();
        
        return view('user.show', ['title'=>'User', 'user'=>$user]);
    }
}
