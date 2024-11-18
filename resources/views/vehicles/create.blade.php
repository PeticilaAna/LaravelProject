@extends('layout')

@section('content')
    <h1>Add New Vehicle</h1>

    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf
        <label for="vin">VIN:</label>
        <input type="text" id="vin" name="vin" required><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br>

        <label for="dealer_id">Dealer:</label>
        <select id="dealer_id" name="dealer_id" required>
            @foreach ($dealers as $dealer)
                <option value="{{ $dealer->id }}">{{ $dealer->name }}</option>
            @endforeach
        </select><br>

        <button type="submit">Save</button>
    </form>
@endsection