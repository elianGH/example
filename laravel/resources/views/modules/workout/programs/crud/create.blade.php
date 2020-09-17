@extends('master.layout')

@section('content')

    <form class="crud" method="POST" action="{{ route('workout.program.store') }}">
        <section class="crud__tools">
            <div class="d-flex justify-content-between align-items-center">
                @component('components.breadcrumbs.index', [
                    'icon' => 'web_asset',
                    'items' => [
                        [
                            'text' => 'Workout Programs',
                            'route' => route('workout.program.index')
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

                <div class="crud__form-row">
                    <div class="row">
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
                            @component('components.selects.single-select', [
                                'autoInit' => true, 'label' => 'Pick a difficulty', 'name' => 'difficulty'
                            ])
                                @foreach($difficulties as $difficulty)
                                    @component('components.selects.list.list--item', ['value' => $difficulty])
                                        {{ $difficulty }}
                                    @endcomponent
                                @endforeach
                            @endcomponent
                        </div>
                    </div>
                </div>

                <div class="crud__form-row">
                    <div class="row">
                        <div class="col-md-4">
                            @component('components.selects.single-select', [
                                'autoInit' => true, 'label' => 'Pick a duration', 'name' => 'duration'
                            ])
                                @foreach($difficulties as $difficulty)
                                    @component('components.selects.list.list--item', ['value' => $difficulty])
                                        {{ $difficulty }}
                                    @endcomponent
                                @endforeach
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @csrf
    </form>

@endsection
