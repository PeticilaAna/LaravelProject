@extends('layout')

@section('content')
    <h1>Edit Vehicle</h1>

    <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="vin">VIN:</label>
        <input type="text" id="vin" name="vin" value="{{ $vehicle->vin }}" required><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" value="{{ $vehicle->model }}" required><br>

        <label for="dealer_id">Dealer:</label>
        <select id="dealer_id" name="dealer_id" required>
            @foreach ($dealers as $dealer)
                <option value="{{ $dealer->id }}" {{ $dealer->id == $vehicle->dealer_id ? 'selected' : '' }}>
                    {{ $dealer->name }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Save</button>
    </form>
@endsection