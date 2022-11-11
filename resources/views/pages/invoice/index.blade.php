@extends('layouts.app')

@section('content')


 @include('pages.invoice.__section_list')



@endsection

@push('page_script')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/extensions/moment.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
    <!-- END: Page Vendor JS-->
    {{--<script src="{{asset('app-assets/js/scripts/pages/app-invoice-list.js')}}"></script>--}}
    @include('pages.invoice.js.invoice_js')
    
@endpush

@section('styles')
    <!-- BEGIN: Vendor CSS-->

    <link rel="stylesheet"  href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet"  href="{{asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
    <link rel="stylesheet"  href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    <!-- END: Vendor CSS-->
@endsection