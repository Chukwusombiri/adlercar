<?php

namespace App\View\Components;

use App\Models\Company;
use Illuminate\View\Component;

class Footer extends Component
{
    public $adler;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->adler = Company::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {      
        return view('components.footer');
    }
}
