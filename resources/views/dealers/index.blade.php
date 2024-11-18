@extends('layout')

@section('content')
    <h1>List of Dealers</h1>
    <a href="{{ route('dealers.create') }}">Add New Dealer</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>CUI</th>
                <th>CEC</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dealers as $dealer)
                <tr>
                    <td>{{ $dealer->id }}</td>
                    <td>{{ $dealer->name }}</td>
                    <td>{{ $dealer->cui }}</td>
                    <td>{{ $dealer->cec }}</td>
                    <td>
                        <a href="{{ route('dealers.show', $dealer->id) }}">View</a>
                        <a href="{{ route('dealers.edit', $dealer->id) }}">Edit</a>
                        <form action="{{ route('dealers.destroy', $dealer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $dealers->links() }} <!-- Paginare -->
@endsection