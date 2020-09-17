@component('components.selects.multi-select', [
    'id' => 'multi-select-muscles', 'hasValues' => $exercise->muscles->count(),
    'value' => $exercise->muscles->implode('id', ','), 'name' => 'muscles',
    'label' => 'Pick muscles'
])
    @slot('chips')
        @if($exercise->muscles->count())
            @foreach($exercise->muscles as $item)
                @component('components.chips.chip', ['value' => $item->id])
                    {{ $item->title }}
                @endcomponent
            @endforeach
        @endif
    @endslot

    @slot('list')
        @foreach($muscles as $item)
            <li class="mdc-list-item {{ $exercise->muscles->contains($item->id) ? 'mdc-list-item--multi-selected': '' }}" data-value="{{ $item->id }}">
                {{ $item->title }}
            </li>
        @endforeach
    @endslot
@endcomponent
