<div class="mdc-data-table mdc-data-table--fullwidth" id="mdc-data-table">
    <table class="mdc-data-table__table" aria-label="Dessert calories">
        @component('components.blueprints.table.head.wrapper', ['table' => $table, 'hasTools' => true])@endcomponent

        <tbody class="mdc-data-table__content">
            @foreach($table->getBodyData() as $key => $item)
                <tr data-row-id="{{ $key }}" class="mdc-data-table__row mdc-data-table__row--has-actions mdc-data-table__row-col-{{ $table->getColsCount() }} pointer">
                    @component('components.blueprints.table.body.cols.body-col--checkbox', ['area' => $table->area])@endcomponent

                    @component('components.blueprints.table.body.cols.body-col', ['area' => $table->area])
                        {{ $item->title }}
                    @endcomponent

                    @component('components.blueprints.table.body.cols.body-col', ['area' => $table->area])
                        <img style="max-height: 40px;" src="{{ $item->image }}" alt="{{ $item->title }}" />
                    @endcomponent

                    @component('components.blueprints.table.body.cols.body-col--actions', ['area' => $table->area])
                        <a class="mdc-icon-button material-icons" href="{{ route('workout.exercise.edit', $item->id) }}">
                            edit
                        </a>
                    @endcomponent
                </tr>
            @endforeach
        </tbody>

    </table>

    @component('components.blueprints.table.foot.wrapper', ['table' => $table])@endcomponent
</div>


