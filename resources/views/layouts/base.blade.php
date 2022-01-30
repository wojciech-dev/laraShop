<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Base</title>
</head>
<body>
<h1>base.html</h1>


<ul>
    @if (Route::has('login'))
        @auth
            @if(Auth::user()->utype === 'ADM')
                <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                <a href="{{ route('logout') }}">Logout</a>
            @else
                <a href="{{ route('user.dashboard') }}">User Dashboard</a>
                <a href="{{ route('logout') }}">Logout</a>
            @endif
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endif
    @endif
</ul>


<main>{{ $slot }}</main>
    
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>