<?php

namespace App\View\Components\AddUser;

use Illuminate\View\Component;
use App\Models\City;

class InputCity extends Component
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
        $cities = City::get();
        
        return view('components.add-user.input-city', ['cities'=>$cities]);
    }
}
