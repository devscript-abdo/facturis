@extends('layouts.app')

@section('content')

    @include('pages.estimate.datatable.index')
    
@endsection

@include('layouts._helpers.__datatables')
