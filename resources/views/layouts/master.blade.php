<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecoce - @yield('title')</title>
    @yield('meta')
    @yield('styles')
</head>

<body class="@yield('body')">
    @yield('popup')

    @include('commons.header')

    <main class="main">
        @yield('content')
    </main>

    @include('commons.footer')

    @vite(['resources/js/global.js'])
    @yield('scripts')
</body>

</html>
