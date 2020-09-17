<div class="mdc-select mdc-multi-select {{ $hasValues ? 'mdc-select--focused' : '' }}" id="{{ $id }}">
    <div class="mdc-multi-select__chips">
        {{ $chips }}
    </div>
    <input type="hidden" name="{{ $name }}" class="multi-select-values" value="{{ $value }}">
    <i class="mdc-select__dropdown-icon"></i>
    <div class="mdc-select__selected-text"></div>
    <div class="mdc-select__menu mdc-menu mdc-menu-surface">
        <ul class="mdc-list">
            {{ $list }}
        </ul>
    </div>
    <label class="mdc-floating-label {{ $hasValues ? 'mdc-floating-label--float-above' : '' }}">{{ $label }}</label>
    <div class="mdc-line-ripple"></div>
</div>
