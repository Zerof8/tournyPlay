<?php

namespace App\View\Components;

use Illuminate\View\Component;

class   subscription_comp extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->fillSubsDetails();
    }
    private function fillSubsDetails(){
        //back logic
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.subscription_comp');
    }
}
