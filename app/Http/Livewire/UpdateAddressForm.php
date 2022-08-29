<?php

namespace App\Http\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class UpdateAddressForm extends Component
{
    public $country;
    public $city;
    public $zip;
    public $address;
    public $state;
    public $addressArray;

    protected $rules = [
        'country' => 'required',
        'city' => 'required',
        'zip' => 'required',
        'address' => 'required',
        'state' => 'required',
    ];

    public function save()
    {
       $this->validate();
        $this->emit('addressSaved');
        $this->addressArray = [
            'country' => $this->country,
            'city' => $this->city,
            'zip' => $this->zip,
            'address' => $this->address,
            'state' => $this->state,
        ];
        $user = auth()->user();
        $user->address = $this->addressArray;
    }

    public function render()
    {
        return view('livewire.update-address-form');
    }
}
