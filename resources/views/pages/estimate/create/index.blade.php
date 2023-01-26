@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        @include('layouts._parts.__messages')

        @include('pages.estimate.create.__form')

    </div>
@endsection
