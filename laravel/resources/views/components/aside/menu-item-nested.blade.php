<div class="mdc-list__wrapper">
    <div class="mdc-list-item mdc-ripple-surface--primary mdc-list-item--has-nested {{ isset($isActive) && $isActive ? 'mdc-list-item--activated' : '' }}">
        @if($icon == 'material')
            <i class="material-icons mdc-list-item__graphic" aria-hidden="true">{{ $iconName }}</i>
        @else
            <i class="fa {{ $iconName }}" aria-hidden="true"></i>
        @endif

        <span class="mdc-list-item__text">{{ $slot }}</span>
        <i class="material-icons">keyboard_arrow_down</i>
    </div>

    <div class="mdc-list-nested">
        @foreach($nestedList as $item)
            <a class="mdc-list-item mdc-ripple-surface--primary" href="{{ $item['route'] }}" aria-current="page">
                @if(isset($item['icon']))
                    @if($item['icon'] == 'material')
                        <i class="material-icons mdc-list-item__graphic" aria-hidden="true">{{ $item['iconName'] }}</i>
                    @else
                        <i class="fa {{ $item['iconName'] }}" aria-hidden="true"></i>
                    @endif
                @endif

                <span class="mdc-list-item__text">{{ $item['name'] }}</span>
            </a>
        @endforeach
    </div>
</div>

