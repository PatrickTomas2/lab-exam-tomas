@extends('layout')

@section('content')
    <h2>Login</h2>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <p>
            <label>Email</label><br>
            <input type="text" name="email" value="{{ old('email') }}">
        </p>
        <p>
            <label>Password</label><br>
            <input type="password" name="password">
        </p>
        <button type="submit">Login</button>
    </form>
@endsection