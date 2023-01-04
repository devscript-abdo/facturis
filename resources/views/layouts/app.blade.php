<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> {{ getCompany()->name ?? 'FACTURIS' }}</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="app_creator" name="Elmarzougui Abdelghafour" />
    <meta content="app_version" name="v 1.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    @yield('css')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body data-sidebar="dark" data-sidebar-size="small-">
    
    <div id="layout-wrapper">

        <div class="main-content">

            <div class="page-content">

                <div id="overlayy"></div>

                @yield('content')

            </div>

        </div>


    </div>

</body>

</html>
