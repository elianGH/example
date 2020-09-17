@extends('modules.workout.programs.calendar.master.layout')

@section('content')

    <div class="grid" id="grid">
        <div id="grid__weeks"></div>
        <div class="grid__week grid__week--add">
            <div class="grid__item" id="grid__item-dummy-width"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item grid__item--add d-flex align-items-center justify-content-center">
                <button id="calendar-week-add"
                        class="mdc-icon-button md-36"
                        aria-label="Add to favorites"
                        aria-hidden="true"
                        aria-pressed="false">
                    <i class="material-icons mdc-icon-button__icon">add_box</i>
                </button>
            </div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
            <div class="grid__item"></div>
        </div>
    </div>

    <input type="hidden" id="program-id" value="{{ request()->route('calendar') }}"/>

    @include('modules.workout.programs.calendar.dialogs.day')
    @include('modules.workout.programs.calendar.dialogs.training.show')
    @include('modules.workout.programs.calendar.dialogs.training.create')
    @include('modules.workout.programs.calendar.dialogs.exercise-editor')

@endsection
