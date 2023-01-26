@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        @include('layouts._parts.__messages')
        @include('pages.provider.edit.__form')

    </div>

@endsection
