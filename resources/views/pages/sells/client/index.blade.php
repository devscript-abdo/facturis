@extends('layouts.app')

@section('content')
    @include('pages.sells.client.toolbar')

    <div id="facturis_app_content" class="app-content flex-column-fluid">
        <div id="facturis_app_content_container" class="app-container container-xxl">

            @include('pages.sells.client.section_a')

            @include('pages.sells.client.section_b_add_client')

            @include('pages.sells.client.section_c_adjust_balance')

        </div>
    </div>
@endsection


@section('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@push('customjs')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/customers/list/export.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/customers/list/list.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/customers/add.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
@endpush
