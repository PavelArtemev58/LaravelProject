<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class Users extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $users = User::orderBy('salary', 'desc')
                        ->take(5)->get();
        
        return view('components.users', ['users'=>$users]);
    }
}
