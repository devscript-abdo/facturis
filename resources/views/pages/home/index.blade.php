@extends('layouts.app')

@section('content')

<section id="dashboard-ecommerce">

    @include('pages.home.__section_a')
    @include('pages.home.__section_b')
    @include('pages.home.__section_c')
    
</section>

@endsection

@push('page_script')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END: Page JS-->
@endpush

