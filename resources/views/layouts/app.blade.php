<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="@yield('description', 'Diákholmi - Minőségi iskolaszerek és felszerelések.')">
    <meta name="keywords" content="@yield('keywords', 'diák, iskolaszerek, felszerelések, tanulás')">

    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="icon" type="/image/x-icon" href="/img/logo.png" href="{{asset('img/logo.png')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div id="app">
        <div>
            @include('layouts.nav')
        </div>

        <main class="pb-4">
            <button id="themeToggle" class="btn bg-warning-subtle position-fixed bottom-0 end-0 m-3 shadow">🌙</button>
            @yield('content')
        </main>

        <footer>
            @include('layouts.footer')
        </footer>
    </div>
</body>

</html>
