<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> {{ getCompany()->name ?? 'Facturis' }} - FACTURIS</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="app_creator" name="Elmarzougui Abdelghafour" />
    <meta content="app_version" name="1.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/logo-app.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">


    @stack('css')
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/app.min.css') }}?ver={{ rand(2, 250) }}">

    @livewireStyles
    <style>
        div.sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 2147483638;
            margin-top: 5px
        }
    </style>
    @routes
</head>

<body>

    <div id="page-container"
        @unless(request()->routeIs('admin:auth:login'))
           class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed {{-- main-content-narrow --}}"
         @endunless>

        @unless(request()->routeIs('admin:auth:login'))
            @include('layouts.sidebar.__aside')
            @include('layouts.sidebar.__sidebar')
            @include('layouts._parts.__header')
        @endunless

        <main id="main-container">

            @yield('content')

        </main>
        @include('layouts._parts.__footer')

    </div>

    @livewireScripts

    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/facturis.app.min.js') }}"></script>


    @stack('scripts')

</body>

</html>
