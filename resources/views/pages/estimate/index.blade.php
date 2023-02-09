@extends('layouts.app')

@section('content')
    @include('pages.estimate.datatable.index')
@endsection

@include('layouts._helpers.__datatables')

@include('layouts._helpers.__datetime_picker')

@include('layouts._helpers.__select2')

@once
    @push('scripts')
        <script>
            Facturis.helpersOnLoad(['js-flatpickr', 'jq-select2']);
        </script>
        @if (count($errors))
            <script>
                $(document).ready(function() {
                    $("#add_estimate_modal").modal('show');
                });
            </script>
        @endif
    @endpush
@endonce
