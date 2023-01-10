<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />

    <title> {{ getCompany()->name ?? 'FACTURIS' }} Application</title>

    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="app_creator" name="Elmarzougui Abdelghafour" />
    <meta content="app_version" name="v 1.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="shortcut icon" href="{{ asset('assets/media/logo-app.png') }}">

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

<body id="facturis_app_body" data-facturis-app-layout="dark-sidebar" data-facturis-app-header-fixed="true"
    data-facturis-app-sidebar-enabled="true" data-facturis-app-sidebar-fixed="true"
    data-facturis-app-sidebar-hoverable="true" data-facturis-app-sidebar-push-header="true"
    data-facturis-app-sidebar-push-toolbar="true" data-facturis-app-sidebar-push-footer="true"
    data-facturis-app-toolbar-enabled="true" class="app-default">

    <div class="d-flex flex-column flex-root app-root" id="facturis_app_root">

        <div class="app-page flex-column flex-column-fluid" id="facturis_app_page">
            
            @include('layouts.parts.sections.header')

            <div class="app-wrapper flex-column flex-row-fluid" id="facturis_app_wrapper">

                @include('layouts.parts.sidebar.dark')

                <div class="app-main flex-column flex-row-fluid" id="facturis_app_main">
                    <div class="d-flex flex-column flex-column-fluid">

                        @include('layouts.parts.sections.toolbar')

                        @yield('content')

                    </div>

                    @include('layouts.parts.footer.footer')

                </div>
            </div>

        </div>

    </div>


    {{-- @livewireScripts --}}


    @include('layouts.parts.js.custom_js')

    @include('layouts.parts.js.normal_js')

    @stack('customjs')

</body>

</html>
