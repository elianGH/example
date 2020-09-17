<div class="mdc-text-field mdc-text-field--outlined mdc-text-field__fullwidth mdc-text-field__margin">
    <input class="mdc-text-field__input" id="text-field__{{ $name }}" name="{{ $name }}">
    <div class="mdc-notched-outline">
        <div class="mdc-notched-outline__leading"></div>
        <div class="mdc-notched-outline__notch">
            <label for="text-field__{{ $name }}" class="mdc-floating-label">{{ $label }}</label>
        </div>
        <div class="mdc-notched-outline__trailing"></div>
    </div>
</div>

@if($errors->has($name))

    @component('components.input.helper', ['type' => 'danger'])
        {{ $errors->first($name) }}
    @endcomponent

@endif
