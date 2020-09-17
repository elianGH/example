@extends('master.layout')

@section('content')

    @include('modules.anatomy.body-type.view.filters')

    @include('modules.anatomy.body-type.view.tools')

    @include('modules.anatomy.body-type.view.table')

@endsection
