<?php

namespace App\Http\Livewire;

use App\Models\User;
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
    protected $messages = [
        'country' => 'Please enter a valid country name', //!!!!!!!!!!!
        'city' =>'Please enter a valid city name',
        'zip' => 'Please enter a valid zip code',
        'address' => 'Please enter your valid street name and house number',
        'state' => 'Please enter a valid state name',
    ];
    public function save()
    {
        //validate and store the form inside the array
        $this->validate();
        $this->addressArray = [
            'country' => $this->country,
            'city' => $this->city,
            'zip' => $this->zip,
            'address' => $this->address,
            'state' => $this->state,
        ];
        $userId = auth()->user()->id;
        $currentUser = User::find($userId);
        $currentUser->address = $this->addressArray;
        $currentUser->save();
        if (request()->header('Referer') == route('subscription')) {
            return redirect(request()->header('Referer'));
        }
    }


    public function render()
    {
        return view('livewire.update-address-form');
    }

}
