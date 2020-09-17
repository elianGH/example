<a class="mdc-list-item mdc-ripple-surface--primary {{ isset($isActive) && $isActive ? 'mdc-list-item--activated' : '' }}" href="{{ $route }}" aria-current="page">
    @if($icon == 'material')
        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">{{ $iconName }}</i>
    @else
        <i class="fa {{ $iconName }}" aria-hidden="true"></i>
    @endif
    <span class="mdc-list-item__text">{{ $slot }}</span>
</a>
