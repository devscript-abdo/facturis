@extends('layouts.app')

@section('content')
    <div class="content">
        @include('layouts._parts.__messages')

        @include('pages.client.view.__section_a_quick_action')
        @include('pages.client.view.__section_b_info')
        @include('pages.client.view.__section_c_addresses')
        {{-- @include('pages.client.view.__section_f_contacts') --}}
        @include('pages.client.view.__section_f_contacts_list')

        @include('pages.client.view.__section_d_recent_invoices')
        @include('pages.client.view.__section_e_recent_estimates')

        @include('pages.client.view.__section_g_notes')


        @include('pages.client.view.__section_f_contacts_add')

    </div>
@endsection

@push('scripts')
    @if (count($errors->contact))
        <script>
            $(document).ready(function() {
                $("#add_contact").modal('show');
            });
        </script>
    @endif
@endpush

@include('layouts._helpers.__sweetaltert', [
    'deleteBtn' => 'deleteClient',
    'deleteForm' => 'deleteThisClent',
])
