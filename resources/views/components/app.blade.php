<!DOCTYPE html>
<html lang="{{ __('lang.lang') }}">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('imgs/favicon.png') }}">

    <!-- CSS -->
    @vite('resources/css/app.css')

    <title>Sowedia | {{ __('lang.title') }}</title>
</head>

<body class="font-inter">
    <x-header></x-header>
    {{ $slot }}
    <x-footer></x-footer>
</body>

</html>
