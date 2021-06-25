<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AP Salud</title>
    <!-- Favicon -->
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('dists/assets/img/logo.ico')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login') }}</title>

    <link rel="stylesheet" href="{{asset('dists/assets/css/stiles.css')}}">

</head>

<body>

    @yield('content')

</body>
<script src="{{asset('js/addons/addons.js')}}" type="text/javascript"></script>
</html>
