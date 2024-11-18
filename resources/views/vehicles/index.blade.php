@extends('layout')

@section('content')
    <h1>List of Vehicles</h1>
    <a href="{{ route('vehicles.create') }}">Add New Vehicle</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>VIN</th>
                <th>Model</th>
                <th>Dealer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->vin }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>{{ $vehicle->dealer->name }}</td>
                    <td>
                        <a href="{{ route('vehicles.show', $vehicle->id) }}">View</a>
                        <a href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>
                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $vehicles->links() }} <!-- Paginare -->
@endsection