@component('components.selects.multi-select', [
    'id' => 'multi-select-properties', 'hasValues' => $exercise->properties ? $exercise->properties->count() : null,
    'value' => $exercise->properties ? $exercise->properties->implode(','): "", 'name' => 'properties',
    'label' => 'Pick properties'
])
    @slot('chips')
        @if($exercise->properties && $exercise->properties->count())
            @foreach($exercise->properties as $item)
                @component('components.chips.chip', ['value' => $item])
                    {{ $item }}
                @endcomponent
            @endforeach
        @endif
    @endslot

    @slot('list')
        @foreach($properties as $item)
            <li class="mdc-list-item {{ $exercise->properties && $exercise->properties->contains($item) ? 'mdc-list-item--multi-selected': '' }}" data-value="{{ $item }}">
                {{ $item }}
            </li>
        @endforeach
    @endslot
@endcomponent
