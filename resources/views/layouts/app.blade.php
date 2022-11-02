<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Facturis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <meta name="robots" content="noindex, nofollow" />
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.ico') }}">
    <meta content="app_creator" name="Elmarzougui Abdelghafour" />
    <meta content="app_version" name="v 1.1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @livewireStyles

</head>

<body>

    @livewireScripts

    @stack('scripts')

</body>

</html>
