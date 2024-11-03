<?php

namespace App\View\Components;

use App\Models\Shipment;
use Illuminate\View\Component;

class AdminNav extends Component
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
        return view('components.admin-nav',[
            'latest_requests'=>Shipment::where('is_approved',[0])->get(),
        ]);
    }
}
