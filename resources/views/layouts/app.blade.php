<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Microdata markup added by Google Structured Data Markup Helper. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Heating and Air Conditioning Service and Installation Company serving Northeast Florida and the Greater Jacksonville Area">
    <meta name="keywords" content="Air Conditioning, Heating, HVAC, Jacksonville, Northeast Florida, Heating and Air, AC Service, AC Installation">
    <meta name="theme-color" content="#0a75d2"/>
    <meta name="robots" content="index,follow">
    <title>@yield('title', 'Pride AC Jacksonville')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
<div itemscope itemtype="http://schema.org/LocalBusiness">
    <div id="app">
        @include('layouts.header')
        <div class="container-fluid">
            @include('layouts.messages')
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
</div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}">
if ('serviceWorker' in navigator ) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
</script>
@stack('scripts')
</html>
