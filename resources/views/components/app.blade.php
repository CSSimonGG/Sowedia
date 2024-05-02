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

    <!-- Privacy and cookies -->
    <script type="text/javascript">
        var _iub = _iub || [];
        _iub.csConfiguration = {
            "askConsentAtCookiePolicyUpdate": true,
            "enableFadp": true,
            "enableLgpd": true,
            "enableUspr": true,
            "fadpApplies": true,
            "floatingPreferencesButtonDisplay": "bottom-right",
            "lang": "nl",
            "perPurposeConsent": true,
            "siteId": 3619239,
            "usprApplies": true,
            "whitelabel": false,
            "cookiePolicyId": 97699513,
            "banner": {
                "acceptButtonDisplay": true,
                "closeButtonDisplay": false,
                "customizeButtonDisplay": true,
                "explicitWithdrawal": true,
                "listPurposes": true,
                "position": "bottom",
                "rejectButtonDisplay": true,
                "showTitle": false
            }
        };
    </script>
    <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3619239.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
    <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R4FLVF3CFZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-R4FLVF3CFZ');
    </script>

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
