@extends('layout')

@section('content')
    <h1>Edit Dealer</h1>

    <form action="{{ route('dealers.update', $dealer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $dealer->name }}" required><br>

        <label for="cui">CUI:</label>
        <input type="text" id="cui" name="cui" value="{{ $dealer->cui }}" required><br>

        <label for="cec">CEC:</label>
        <input type="text" id="cec" name="cec" value="{{ $dealer->cec }}" required><br>

        <button type="submit">Save</button>
    </form>
@endsection