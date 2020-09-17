@extends('master.layout_guest')

@section('content')
    <div class="auth d-flex justify-content-center align-items-center">

        <form class="auth__form" id="auth__form--verify" action="#">
            <div class="row">
                <div class="col-12">
                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
                        <i class="material-icons mdc-text-field__icon mdc-text-field__icon--leading">email</i>
                        <input type="email" class="mdc-text-field__input" id="email" autofocus>
                        <div class="mdc-notched-outline mdc-notched-outline--no-label">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label for="text-field-hero-input" class="mdc-floating-label"></label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 auth__form-submit">
                    <button class="mdc-button">
                        <div class="mdc-button__ripple"></div>
                        <span class="mdc-button__label">Send</span>
                    </button>
                </div>
            </div>

        </form>

        <form class="auth__form" id="auth__form--authorize">
            <div class="row">
                <div class="col-12">
                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
                        <i class="material-icons mdc-text-field__icon mdc-text-field__icon--leading">lock</i>
                        <input type="password" class="mdc-text-field__input" id="password">
                        <div class="mdc-notched-outline mdc-notched-outline--no-label">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label for="text-field-hero-input" class="mdc-floating-label"></label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12  auth__form-submit">
                    <button class="mdc-button">
                        <div class="mdc-button__ripple"></div>
                        <span class="mdc-button__label">Submit</span>
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection
