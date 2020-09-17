<div class="mdc-select mdc-select--fullwidth
    {{ isset($autoInit) && $autoInit ? 'mdc-select--autoinit' : '' }}"
    {{ isset($id) ? "id=$id" : '' }}
>
    <input type="hidden" name="{{ $name }}" value="{{ isset($value) ? $value : '' }}">
    <div class="mdc-select__anchor">
        <i class="mdc-select__dropdown-icon"></i>
        <div class="mdc-select__selected-text">{{ isset($value) ? $value : '' }}</div>
        <span class="mdc-floating-label mdc-floating-label--float-above">{{ $label }}</span>
        <span class="mdc-line-ripple"></span>
    </div>

    <div class="mdc-select__menu demo-width-class mdc-menu mdc-menu-surface">
        <ul class="mdc-list">
            {{ $slot }}
        </ul>
    </div>
</div>
