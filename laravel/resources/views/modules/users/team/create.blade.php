@extends('master.layout')

@section('sub-content')
    <div class="form-route">
        <span class="uk-icon uk-inline"  uk-icon="icon: users; ratio: 1.3"></span>
        <div class="form-route--name uk-inline">
            <div class="form-route--title">Team</div>
            <div class="form-route--action">add member</div>
        </div>
    </div>

    <div class="uk-flex mt-20 uk-flex-between">
        <a href="{{ route('team.index') }}" class="uk-button uk-button-default btn-back">
            <span class="uk-icon"  uk-icon="icon: arrow-left"></span>
            Back
        </a>
        <button class="uk-button uk-button-default btn-default" id="save_team_button">Save</button>
    </div>
@endsection

@section('content')

    <div class="main-form">

        <form class="uk-width-1-1" method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data" id="save_team_form">

            <ul class="uk-child-width-expand uk-tab main-form--switchers" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium; connect: .main-form--tabs">
                <li><a href="#">Main</a></li>
                <li><a href="#">Image</a></li>
            </ul>

            <div class="uk-switcher main-form--tabs" id="main-form--tabs">

                <div class="main-form-tabs--content">

                    @component('components.input.index', ['name' => 'first_name', 'label' => 'First name', 'errors' => $errors])
                    @endcomponent

                    @component('components.input.index', ['name' => 'last_name', 'label' => 'Last name', 'errors' => $errors])
                    @endcomponent

                    @component('components.input.index', ['name' => 'nickname', 'label' => 'Nickname', 'errors' => $errors])
                    @endcomponent

                    @component('components.input.index', ['name' => 'email', 'label' => 'Email', 'errors' => $errors])
                    @endcomponent

                    @component('components.input.index', ['name' => 'phone', 'label' => 'Phone', 'errors' => $errors])
                    @endcomponent

                </div>

                <div class="main-form-tabs--content">
                    <div class="uk-margin">
                        <div class="label">Choose user image</div>
                        <div uk-form-custom="target: true">
                            <input type="file" name="image">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                        </div>
                        {!! $errors->first('image', '<div class="form-helper form-helper-danger">:message</div>') !!}
                    </div>
                </div>


            </div>

            @csrf

        </form>
    </div>

@endsection

