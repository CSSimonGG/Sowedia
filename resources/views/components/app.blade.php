<!DOCTYPE html>
<html lang="{{ __('lang.lang') }}">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Sowedia is uw specialist in het ontwikkelen van professionele, op maat gemaakte websites en het beheren van uw social media. Wij bieden uitgebreide ondersteuning op het gebied van media en marketing voor uw bedrijf">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- CSS & JS -->
    @vite('resources/css/app.css')

    <script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>

    <title>Sowedia | {{ $title }}</title>
</head>

<body class="font-inter">
    <x-header></x-header>
    <main class="bg-white">
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>

</html>
