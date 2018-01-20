<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Microdata markup added by Google Structured Data Markup Helper. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Pride AC Jacksonville')</title>
    @yield('meta')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div itemscope itemtype="http://schema.org/LocalBusiness" id="app">
    @include('layouts.header')
    <div class="container-fluid">
        @include('layouts.messages')
        @yield('content')
    </div>
    @include('layouts.footer')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
