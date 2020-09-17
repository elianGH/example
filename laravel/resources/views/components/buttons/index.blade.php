<button type="{{ isset($type) ? $type : 'button' }}" class="mdc-button {{ isset($classType) ? $classType: '' }}">
    <span class="mdc-button__label">{{ $text }}</span>
    <i class="material-icons mdc-button__icon" aria-hidden="true">{{ $icon }}</i>
</button>
