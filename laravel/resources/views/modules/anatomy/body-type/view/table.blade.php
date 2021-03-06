<div class="mdc-data-table mdc-data-table--fullwidth" id="mdc-data-table">
    <table class="mdc-data-table__table" aria-label="Dessert calories">
        @component('components.blueprints.table.head.wrapper', ['table' => $table, 'hasTools' => false])@endcomponent

        <tbody class="mdc-data-table__content">
            @foreach($table->getBodyData() as $key => $item)
                <tr data-row-id="{{ $key }}" class="mdc-data-table__row mdc-data-table__row-col-{{ $table->getColsCount() }}">
                    @component('components.blueprints.table.body.cols.body-col--checkbox', ['area' => $table->area])@endcomponent

                    @component('components.blueprints.table.body.cols.body-col', ['area' => $table->area])
                        {{ $item->image }}
                    @endcomponent

                    @component('components.blueprints.table.body.cols.body-col', ['area' => $table->area])
                        {{ $item->title }}
                    @endcomponent
                </tr>
            @endforeach
        </tbody>

    </table>

    @component('components.blueprints.table.foot.wrapper', ['table' => $table])@endcomponent
</div>


