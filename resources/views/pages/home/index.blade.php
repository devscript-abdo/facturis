@extends('layouts.app')

@section('content')
    @include('pages.home.__tooltip')

    <div class="content">
        
        @include('pages.home.__section_a_state')
        @include('pages.home.__section_b_chart')
        @include('pages.home.__section_c_orders')

    </div>

@endsection

@push('scripts')

    <script src="{{ asset('assets/js/plugins/chart.js/chart.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/facturis_dashboard.min.js') }}"></script>
@endpush
