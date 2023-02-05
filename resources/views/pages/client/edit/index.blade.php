@extends('layouts.app')

@section('content')
    @include('pages.client.edit.section_a_hero')

    <div class="content content-full content-boxed">

        @include('layouts._parts.__messages')
        
        @include('pages.client.edit.section_b_form')

    </div>
@endsection
