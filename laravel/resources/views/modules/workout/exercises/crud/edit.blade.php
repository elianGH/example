@extends('master.layout')

@section('content')

    <form class="crud" method="POST" action="{{ route('workout.exercise.update', ['exercise' => $exercise->id]) }}">
        <section class="crud__tools">
            <div class="d-flex justify-content-between align-items-center">
                @component('components.breadcrumbs.index', [
                    'icon' => 'web_asset',
                    'items' => [
                        [
                            'text' => 'Workout Exercises',
                            'route' => route('workout.exercise.index')
                        ],
                        [
                            'text' => 'Edit'
                        ]
                    ]
                ])@endcomponent

                @component('components.buttons.index', [
                    'type' => 'submit', 'text' => 'Save', 'icon' => 'save', 'classType' => 'mdc-button--raised'
                ])@endcomponent
            </div>
        </section>

        <section class="crud__form">
            @component('components.tabs.tab-wrapper', [
                'id' => 'crud-tab-bar',
                'tabs' => [
                    ['name' => 'Main', 'icon' => 'web_asset'],
                ]
            ])@endcomponent

            <div class="tab-bar-content tab-bar-content--active">
                <div class="crud__form-row row">
                    <div class="col-md-4">
                        <div class="crud__form-field--fullwidth mdc-text-field">
                            <input id="image" type="text" class="mdc-text-field__input" name="image" aria-label="Label" value="{{ $exercise->image }}">
                            <label class="mdc-floating-label" for="image">
                                Image
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="crud__form-field--fullwidth mdc-text-field">
                            <input id="animation" type="text" class="mdc-text-field__input" name="animation" aria-label="Label" value="{{ $exercise->animation }}">
                            <label class="mdc-floating-label" for="animation">
                                Animation
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="crud__form-field--fullwidth mdc-text-field">
                            <input id="video" type="text" class="mdc-text-field__input" name="video" aria-label="Label" value="{{ $exercise->video }}">
                            <label class="mdc-floating-label" for="video">
                                Video
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                    </div>
                </div>

                <div class="crud__form-row row">
                    <div class="col-md-4">
                        @include('modules.workout.exercises.crud.selects.equipments')
                    </div>

                    <div class="col-md-4">
                        @include('modules.workout.exercises.crud.selects.body-parts')
                    </div>

                    <div class="col-md-4">
                        @include('modules.workout.exercises.crud.selects.muscles')
                    </div>
                </div>

                <div class="crud__form-row row">
                    <div class="col-md-8">
                        <div class="crud__form-field--fullwidth mdc-text-field">
                            <input id="title" type="text" class="mdc-text-field__input" name="title" aria-label="Label" value="{{ $exercise->title }}">
                            <label class="mdc-floating-label" for="title">
                                Title
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @include('modules.workout.exercises.crud.selects.properties')
                    </div>
                </div>
            </div>
        </section>

        @csrf
        @method('PUT')
    </form>

@endsection
