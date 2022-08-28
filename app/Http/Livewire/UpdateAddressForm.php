<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UpdateAddressForm extends Component
{
    public $country;

    public function validate($rules = null, $messages = [], $attributes = [])
    {

    }

    public function save()
    {
        return auth()->user()->address;
    }

    public function render()
    {
        return view('livewire.update-address-form');
    }
}
