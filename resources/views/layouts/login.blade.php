<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />

    <title> {{ getCompany()->name ?? 'FACTURIS' }} Login</title>

    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="app_creator" name="Elmarzougui Abdelghafour" />
    <meta content="app_version" name="v 1.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">

    <!--facturisStart::Fonts(mandatory for all pages)-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700&display=swap" />

    <!--facturisEnd::Fonts-->

    <!--begin::Global Stylesheets Bundle(all pages)-->

    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Global Stylesheets Bundle-->
    @yield('css')

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    {{-- @livewireStyles --}}
</head>

<body id="facturis_id_body" class="app-blank app-blank">


    @yield('content')

    {{-- @livewireScripts --}}

    @include('layouts.parts.js.custom_js')

    @include('layouts.parts.js.normal_js')


</body>

</html>
