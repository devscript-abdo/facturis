<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | Facturis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="robots" content="noindex, nofollow" />
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.ico') }}">
    <meta content="app_creator" name="Elmarzougui Abdelghafour" />
    <meta content="app_version" name="v 1.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css'])

</head>

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">


    @include('auth.register.cover_register')

    <script src="{{asset('build/assets/js/vendor.min.js')}}"></script>

    @vite('resources/js/app.js')

    <script type="module">
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>

</html>
