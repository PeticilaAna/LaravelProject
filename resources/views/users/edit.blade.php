@extends('layout')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required><br>

        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date" value="{{ $user->birth_date }}" required><br>

        <label for="dealer_id">Dealer:</label>
        <select id="dealer_id" name="dealer_id" required>
            @foreach ($dealers as $dealer)
                <option value="{{ $dealer->id }}" {{ $dealer->id == $user->dealer_id ? 'selected' : '' }}>
                    {{ $dealer->name }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Save</button>
    </form>
@endsection