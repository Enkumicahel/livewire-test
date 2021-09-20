<?php

namespace App\Http\Livewire;

use App\Models\State;
use App\Models\City;
use Livewire\Component;

class Address extends Component
{
    public $selectedState = null;
    public $state_cities = null;
    public $selectedCity = null;
    
    public function render()
    {
        return view('livewire.address',[
            'states' => State::all(),
        ]);
    }
    
    public function updatedSelectedState($state_id)
    {
        $this->state_cities = City::where('state_id', $state_id)->get();
    }
}
