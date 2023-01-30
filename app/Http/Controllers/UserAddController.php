<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAddController extends Controller
{
    public function form()
    {
        return view('addUser.form', ['title'=>'addUser']);
    }
    
    public function store(Request $request)
    {
        $user = new User;
        
        $user->name = $request->name;
        $user->age = $request->age;
        $user->salary = $request->salary;
        $user->city_id = $request->city_id;
        $user->save();
        
        return redirect()->route('users');
    }
}
