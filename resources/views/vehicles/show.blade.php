@extends('layout')

@section('content')
    <h1>Vehicle Details</h1>

    <p><strong>VIN:</strong> {{ $vehicle->vin }}</p>
    <p><strong>Model:</strong> {{ $vehicle->model }}</p>
    <p><strong>Dealer:</strong> {{ $vehicle->dealer->name }}</p>

    <a href="{{ route('vehicles.index') }}">Back to List</a>
@endsection