<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Manager</title>
</head>
<body>
    <h1>Student Manager</h1>

    @auth
        <p>
            Logged in as {{ auth()->user()->name }}
            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </p>
    @endauth

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    @yield('content')
</body>
</html>