@extends('layouts.app')

@section('content')
    <div class="content">

        @include('pages.client.view.__section_a_quick_action')
        @include('pages.client.view.__section_b_info')
        @include('pages.client.view.__section_c_addresses')
        @include('pages.client.view.__section_d_recent_invoices')
        @include('pages.client.view.__section_e_recent_estimates')
        @include('pages.client.view.__section_f_contacts')
        @include('pages.client.view.__section_g_notes')


        @include('pages.client.view.__section_f_contacts_add')

    </div>
@endsection
