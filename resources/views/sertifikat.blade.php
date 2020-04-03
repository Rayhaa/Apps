<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app" class="text-center mx-4 my-4 border-double border-4 border-gray-600">
        <div class="px-4 py-4 text-center my-8">
            <div class="flex justify-center mx-auto">
                <img src="/img/logoumm.png" alt="" class="w-24">


            </div>
            <div class="text-center mt-4 text-2xl font-bold">
                <p>Sertifikat</p>
            </div>
            <p class="text-sm">NOMOR : EZ-M4/AXUMM-XM/2020 </p>
            <p class="text-sm">Diberikan Kepada : </p>
            <p class="mt-4 font-bold">Spongebob Warnanya Kuning</p>
            <p class="text-sm mt-2">Telah menjadi Asisten Praktikum</p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>


</body>

</html>