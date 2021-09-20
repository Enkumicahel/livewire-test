<form action="" method="POST">
    @csrf
    <div>
        <label for="state">Select State</label>
        <select name="" id="" wire:model="selectedState">
            <option value="0">Select a state</option>
            @foreach ($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </select>
    </div>

    @if (!is_null($state_cities))
        <div>
            <label for="city">Select City</label>
            <select name="" id="" wire:model="selectedCity">
                <option value="0">Select a city</option>
                @foreach ($state_cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div>
        {{ $selectedState }}
    </div>
</form>
