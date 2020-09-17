@component('components.selects.multi-select', [
    'id' => 'multi-select-body-parts', 'hasValues' => $exercise->bodyParts->count(),
    'value' => $exercise->bodyParts->implode('id', ','), 'name' => 'bodyParts',
    'label' => 'Pick body parts'
])
    @slot('chips')
        @if($exercise->bodyParts->count())
            @foreach($exercise->bodyParts as $item)
                @component('components.chips.chip', ['value' => $item->id])
                    {{ $item->title }}
                @endcomponent
            @endforeach
        @endif
    @endslot

    @slot('list')
        @foreach($bodyParts as $item)
            <li class="mdc-list-item {{ $exercise->bodyParts->contains($item->id) ? 'mdc-list-item--multi-selected': '' }}" data-value="{{ $item->id }}">
                {{ $item->title }}
            </li>
        @endforeach
    @endslot
@endcomponent
