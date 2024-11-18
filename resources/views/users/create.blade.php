@extends('layout')

@section('content')
    <h1>Add New User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date" required><br>

        <label for="dealer_id">Dealer:</label>
        <select id="dealer_id" name="dealer_id" required>
            @foreach ($dealers as $dealer)
                <option value="{{ $dealer->id }}">{{ $dealer->name }}</option>
            @endforeach
        </select><br>

        <button type="submit">Save</button>
    </form>
@endsection