@extends('layout')

@section('content')
    <h1>User Details</h1>

    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Birth Date:</strong> {{ $user->birth_date }}</p>
    <p><strong>Dealer:</strong> {{ $user->dealer->name }}</p>

    <a href="{{ route('users.index') }}">Back to List</a>
@endsection