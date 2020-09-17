<div class="mdc-dialog mdc-dialog--scrollable" id="training--create-dialog">
    <div class="mdc-dialog__container">
        <div class="mdc-dialog__surface"
             role="alertdialog"
             aria-modal="true"
             aria-labelledby="my-dialog-title"
             aria-describedby="my-dialog-content">
            <h2 class="mdc-dialog__title" id="training--add-title">Add training</h2>
            <div class="mdc-dialog__content">
                @include('modules.workout.programs.calendar.dialogs.training.create--form')
            </div>
            <footer class="mdc-dialog__actions">
                <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="close">
                    <span class="mdc-button__label">Close</span>
                </button>
            </footer>
        </div>
    </div>
    <div class="mdc-dialog__scrim"></div>
</div>
