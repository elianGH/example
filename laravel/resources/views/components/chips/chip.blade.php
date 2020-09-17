<div class="mdc-chip" data-value="{{ $value ?? '' }}">
    <div class="mdc-chip__ripple"></div>
    <span role="gridcell">
        <span role="button" tabindex="-1" class="mdc-chip__text">{{ $slot }}</span>
    </span>
</div>
