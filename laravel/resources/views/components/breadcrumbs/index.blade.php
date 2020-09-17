<div class="breadcrumbs d-flex align-items-center">
    <i class="material-icons breadcrumbs__icon">
        {{ $icon }}
    </i>
    <ul class="breadcrumbs__list">
        @php
            $lastKey = array_key_last($items);
        @endphp

        @foreach($items as $key => $item)
            <li class="breadcrumbs__list-item">
                @if(isset($item['route']))
                    <a class="breadcrumbs__list-route" href="{{ $item['route'] }}">{{ $item['text'] }}</a>
                @else
                    {{ $item['text'] }}
                @endif
            </li>

            @if ($key != $lastKey)
                <li class="breadcrumbs__list-item"> > </li>
            @endif
        @endforeach
    </ul>
</div>
