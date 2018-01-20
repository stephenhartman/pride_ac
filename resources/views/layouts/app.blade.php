<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="Heating and Air Conditioning Service and Installation Company serving Northeast Florida and the Greater Jacksonville Area">
    <meta name="keywords" content="Air Conditioning, Heating, HVAC, Jacksonville, Northeast Florida, Heating and Air, AC Service, AC Installation">
    <meta name="robots" content="index,follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.header')
        <div class="container-fluid">
            @include('layouts.messages')
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
