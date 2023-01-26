@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        @include('pages.estimate.__list')

        @include('pages.estimate.__add_estimate_modal')

    </div>
@endsection


@section('css')
    <link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"
        type="text/css">
@endsection

@push('scripts')

    <script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <script>

        /*********************************************/
        $(".select2").select2({
            width: '100%',
            dropdownParent: $(".addEstimateModal") 
        });

    </script>

@endpush