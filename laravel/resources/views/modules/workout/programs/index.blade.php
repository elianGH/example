@extends('master.layout')

@section('content')

    @include('modules.workout.programs.view.filters')

    @include('modules.workout.programs.view.tools')

    @include('modules.workout.programs.view.table')

@endsection
