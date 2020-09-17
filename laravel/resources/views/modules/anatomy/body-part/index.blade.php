@extends('master.layout')

@section('content')

    @include('modules.anatomy.body-part.view.filters')

    @include('modules.anatomy.body-part.view.tools')

    @include('modules.anatomy.body-part.view.table')

@endsection
