<thead class="mdc-data-table__header">
    <tr class="mdc-data-table__header-row mdc-data-table__header-col-{{ $table->getColsCount() }} {{ $hasTools ? 'mdc-data-table__header--has-actions' : '' }}">
        @component('components.blueprints.table.head.cols.head-col--checkbox')@endcomponent

        @foreach($table->getHead() as $col)
            @component('components.blueprints.table.head.cols.head-col', ['name' => $col, 'area' => $table->area])@endcomponent
        @endforeach

        @if($hasTools)
            @component('components.blueprints.table.head.cols.head-col--actions', ['name' => 'Actions', 'area' => $table->area])@endcomponent
        @endif
    </tr>
</thead>
