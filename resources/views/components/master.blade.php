<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body cz-shortcut-listen="true" style="height:100vh;width:100wh">
<div id="app">
    <section class="px-8 py-4 mb-4">
        <header class="container mx-auto"><h1>Tweety</h1></header>
    </section>
    
    {{$slot}}
</div>

</body>
</html>
