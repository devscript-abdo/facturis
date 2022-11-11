@extends('layouts.app')

@section('content')

<section class="invoice-list-wrapper">
    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="invoice-list-table table">
                <thead>
                    <tr>
                        <th></th>
                        <th>#</th>
                        <th><i data-feather="trending-up"></i></th>
                        <th>Client</th>
                        <th>Total</th>
                        <th class="text-truncate">Issued Date</th>
                        <th>Balance</th>
                        <th>Invoice Status</th>
                        <th class="cell-fit">Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>

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
    <script src="{{asset('app-assets/js/scripts/pages/app-invoice-list.js')}}"></script>
@endpush
@section('styles')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet"  href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet"  href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet"  href="{{asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
    <link rel="stylesheet"  href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    <!-- END: Vendor CSS-->
@endsection