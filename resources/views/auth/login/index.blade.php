@extends('layouts.login')

@section('content')
    @include('auth.login.style_a.content')
@endsection
@push('scripts')
    <script>
        var hostUrl = "{{ asset('assets') }}";
    </script>

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
@endpush