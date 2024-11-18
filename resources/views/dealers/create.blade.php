@extends('layout')

@section('content')
    <h1>Add New Dealer</h1>

    <form action="{{ route('dealers.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="cui">CUI:</label>
        <input type="text" id="cui" name="cui" required><br>

        <label for="cec">CEC:</label>
        <input type="text" id="cec" name="cec" required><br>

        <button type="submit">Save</button>
    </form>
@endsection