<script>
    var hostUrl = "{{ asset('assets') }}";
</script>

<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

@if (request()->routeIs('facturis:auth:login'))
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
@endif
