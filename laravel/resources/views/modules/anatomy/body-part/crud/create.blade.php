@extends('master.layout')

@section('content')

    <form class="crud" method="POST" action="{{ route('body_part.store') }}">
        <section class="crud__tools">
            <div class="d-flex justify-content-between align-items-center">
                @component('components.breadcrumbs.index', [
                    'icon' => 'web_asset',
                    'items' => [
                        [
                            'text' => 'Body Parts',
                            'route' => route('body_part.index')
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
                    <div class="crud__form-field--fullwidth mdc-text-field">
                        <input id="title" type="text" class="mdc-text-field__input" name="title" aria-label="Label">
                        <label class="mdc-floating-label" for="title">
                            Title
                        </label>
                        <div class="mdc-line-ripple"></div>
                    </div>
                </div>

                <div class="crud__form-row">
                    <div class="crud__form-field--fullwidth mdc-text-field">
                        <input id="image_link_id" type="text" class="mdc-text-field__input" name="image_link_id" aria-label="Label">
                        <label class="mdc-floating-label" for="image_link_id">
                            Image link id
                        </label>
                        <div class="mdc-line-ripple"></div>
                    </div>
                </div>
            </div>
        </section>

        @csrf
    </form>

@endsection
