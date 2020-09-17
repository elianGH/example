@foreach($tabs as $key => $tab)
    <button type="button" class="mdc-tab {{ $key == 0 ? 'mdc-tab--active': '' }}" role="tab" aria-selected="true" tabindex="{{ $key }}">
        <span class="mdc-tab__content">
            <span class="mdc-tab__icon material-icons" aria-hidden="true">{{ $tab['icon'] }}</span>
            <span class="mdc-tab__text-label">{{ $tab['name'] }}</span>
        </span>
        <span class="mdc-tab-indicator {{ $key == 0 ? 'mdc-tab-indicator--active': '' }}">
            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
        </span>
        <span class="mdc-tab__ripple"></span>
    </button>
@endforeach
