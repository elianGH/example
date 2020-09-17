@component('components.selects.multi-select', [
    'id' => 'multi-select-equipments', 'hasValues' => $exercise->equipments->count(),
    'value' => $exercise->equipments->implode('id', ','), 'name' => 'equipments',
    'label' => 'Pick equipments'
])
    @slot('chips')
        @if($exercise->equipments->count())
            @foreach($exercise->equipments as $equipment)
                @component('components.chips.chip', ['value' => $equipment->id])
                    {{ $equipment->title }}
                @endcomponent
            @endforeach
        @endif
    @endslot

    @slot('list')
        @foreach($equipments as $item)
            <li class="mdc-list-item {{ $exercise->equipments->contains($item->id) ? 'mdc-list-item--multi-selected': '' }}" data-value="{{ $item->id }}">
                {{ $item->title }}
            </li>
        @endforeach
    @endslot
@endcomponent
