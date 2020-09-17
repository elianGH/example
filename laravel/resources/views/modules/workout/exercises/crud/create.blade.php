@extends('master.layout')

@section('content')

    <form class="crud" method="POST" action="{{ route('workout.exercise.store') }}">
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
                            'text' => 'Create'
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
                            <input id="image" type="text" class="mdc-text-field__input" name="image" aria-label="Label">
                            <label class="mdc-floating-label" for="image">
                                Image
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="crud__form-field--fullwidth mdc-text-field">
                            <input id="animation" type="text" class="mdc-text-field__input" name="animation" aria-label="Label">
                            <label class="mdc-floating-label" for="animation">
                                Animation
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="crud__form-field--fullwidth mdc-text-field">
                            <input id="video" type="text" class="mdc-text-field__input" name="video" aria-label="Label">
                            <label class="mdc-floating-label" for="video">
                                Video
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                    </div>
                </div>

                <div class="crud__form-row row">
                    <div class="col-md-4">
                        @component('components.selects.multi-select', [
                            'id' => 'multi-select-equipments', 'hasValues' => false,
                            'value' => "", 'name' => 'equipments', 'label' => 'Pick equipments'
                        ])
                            @slot('chips')@endslot
                            @slot('list')
                                @foreach($equipments as $item)
                                    <li class="mdc-list-item" data-value="{{ $item->id }}">
                                        {{ $item->title }}
                                    </li>
                                @endforeach
                            @endslot
                        @endcomponent
                    </div>

                    <div class="col-md-4">
                        @component('components.selects.multi-select', [
                            'id' => 'multi-select-body-parts', 'hasValues' => false,
                            'value' => "", 'name' => 'bodyParts', 'label' => 'Pick body parts'
                        ])
                            @slot('chips')@endslot
                            @slot('list')
                                @foreach($bodyParts as $item)
                                    <li class="mdc-list-item" data-value="{{ $item->id }}">
                                        {{ $item->title }}
                                    </li>
                                @endforeach
                            @endslot
                        @endcomponent
                    </div>

                    <div class="col-md-4">
                        @component('components.selects.multi-select', [
                            'id' => 'multi-select-muscles', 'hasValues' => false,
                            'value' => "", 'name' => 'muscles', 'label' => 'Pick muscles'
                        ])
                            @slot('chips')@endslot
                            @slot('list')
                                @foreach($muscles as $item)
                                    <li class="mdc-list-item" data-value="{{ $item->id }}">
                                        {{ $item->title }}
                                    </li>
                                @endforeach
                            @endslot
                        @endcomponent
                    </div>
                </div>

                <div class="crud__form-row row">
                    <div class="col-md-8">
                        <div class="crud__form-field--fullwidth mdc-text-field">
                            <input id="title" type="text" class="mdc-text-field__input" name="title" aria-label="Label">
                            <label class="mdc-floating-label" for="title">
                                Title
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @component('components.selects.multi-select', [
                            'id' => 'multi-select-properties', 'hasValues' => false,
                            'value' => "", 'name' => 'properties', 'label' => 'Pick properties'
                        ])
                            @slot('chips')@endslot
                            @slot('list')
                                @foreach($properties as $item)
                                    <li class="mdc-list-item" data-value="{{ $item }}">
                                        {{ $item }}
                                    </li>
                                @endforeach
                            @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        </section>

        @csrf
    </form>

@endsection
