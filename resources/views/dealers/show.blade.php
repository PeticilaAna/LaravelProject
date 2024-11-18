@extends('layout')

@section('content')
    <h1>Dealer Details</h1>

    <p><strong>Name:</strong> {{ $dealer->name }}</p>
    <p><strong>CUI:</strong> {{ $dealer->cui }}</p>
    <p><strong>CEC:</strong> {{ $dealer->cec }}</p>

    <a href="{{ route('dealers.index') }}">Back to List</a>
@endsection