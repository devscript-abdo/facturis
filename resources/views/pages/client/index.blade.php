@extends('layouts.app')

@section('content')
    <div class="content">

        @include('pages.client.__section_a_status')

        @include('layouts._parts.__messages')
        
        @include('pages.client.__section_b_list')

    </div>
@endsection
