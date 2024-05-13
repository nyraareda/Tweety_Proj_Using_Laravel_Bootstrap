<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twitty</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- @vite('resources/css/app.css') -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
<div class="flex-center full-height">
<div style="position: absolute;
top: 45%;
left: 45%;">
        <div>
            {{-- <a class="welcomeLink" href="http://laracasts.com">laracast</a> --}}
            @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @else
            <a class="welcomeLink" href="{{ url('/login') }}">Login</a>
            <a class="welcomeLink" href="{{ url('/register') }}">Register</a>
            @endauth
        </div>
        <div>
        <div style="font-size: 5rem;font-family:var(--bs-body-font-family);font-weight: 400px;
        color: var(--bs-heading-color);justify-content: center;display:flex ">
            Tweety
        </div>
        </div>
    </div>
        </div>
    </body>
</html>
