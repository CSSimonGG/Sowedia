<!DOCTYPE html>
<html lang="{{ __('lang.lang') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sowedia | {{ __('lang.title') }}</title>
</head>

<body>
    <x-header></x-header>
    {{ $slot }}
    <x-footer></x-footer>
</body>

</html>
