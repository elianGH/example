@extends('master.layout')

@section('content')

    @include('modules.workout.equipments.view.filters')

    @include('modules.workout.equipments.view.tools')

    @include('modules.workout.equipments.view.table')

@endsection
