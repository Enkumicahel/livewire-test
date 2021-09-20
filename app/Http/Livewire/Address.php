<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;

class Address extends Component
{
    public $selectedState = null;
    public $current_cities = null;

    public function render()
    {
        return view('livewire.address', [
            'cities' => City::all(),
        ]);
    }
}
