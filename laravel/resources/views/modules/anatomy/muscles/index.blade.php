@extends('master.layout')

@section('content')

    @include('modules.anatomy.muscles.view.filters')

    @include('modules.anatomy.muscles.view.tools')

    @include('modules.anatomy.muscles.view.table')

@endsection
