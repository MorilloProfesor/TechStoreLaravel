<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'TechStoreLaravel')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    @include('partials.header')

    @include('partials.navigation')

    <main>

        @yield('content')

    </main>

    @include('partials.footer')

</body>

</html>