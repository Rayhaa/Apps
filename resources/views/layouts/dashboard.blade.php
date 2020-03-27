<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body class="!bg-black-alt font-sans leading-normal tracking-normal">
    <div id="app">
        <x-dashboard-header />

        @yield('content')
        <x-dashboard-footer />

    </div>

    <!-- Scripts -->
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>