@extends('layouts.app')

@section('content')
    @include('layouts._parts.__messages')

    @include('pages.estimate.create.section_a_form_estimate')
@endsection

@include('layouts._helpers.__datetime_picker')

@once
    @push('scripts')
        <script>
            Facturis.helpersOnLoad(['js-flatpickr']);
        </script>
    @endpush
@endonce
