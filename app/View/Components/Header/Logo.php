<?php

namespace App\View\Components\Header;

use Illuminate\View\Component;

class Logo extends Component
{
    public $src;
    
    public $alt;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src, $alt)
    {
        $this->src = $src;
        $this->alt = $alt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header.logo');
    }
}
