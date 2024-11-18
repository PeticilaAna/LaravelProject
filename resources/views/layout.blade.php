<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('dealers.index') }}">Dealers</a>
            <a href="{{ route('vehicles.index') }}">Vehicles</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Laravel App</p>
    </footer>
</body>
</html>