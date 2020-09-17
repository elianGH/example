<a href="{{ $route }}" class="mdc-fab {{ isset($type) ? $type : '' }}">
    <div class="mdc-fab__ripple"></div>
    <span class="material-icons mdc-fab__icon">{{ $icon }}</span>
    <span class="mdc-fab__label">{{ $text }}</span>
</a>
