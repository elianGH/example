@extends('master.layout')

@section('content')

    @include('modules.workout.exercises.view.filters')

    @include('modules.workout.exercises.view.tools')

    @include('modules.workout.exercises.view.table')

@endsection
