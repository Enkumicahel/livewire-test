<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire test</title>
    @livewireStyles
</head>

<body>
    <form action="">
        <label for="city"></label>
        <select name="" id="" wire:model="selectedState">
            <option value="">Select a state</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
        <div>
            {{ $selectedState }}
        </div>
    </form>

    @livewireScripts
</body>

</html>
