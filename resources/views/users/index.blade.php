@extends('layout')

@section('content')
    <h1>List of Users</h1>
    <a href="{{ route('users.create') }}">Add New User</a>

    <table border ="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Birth Date</th>
                <th>Dealer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->birth_date }}</td>
                    <td>{{ $user->dealer->name }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">View</a>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }} <!-- Paginare -->
@endsection