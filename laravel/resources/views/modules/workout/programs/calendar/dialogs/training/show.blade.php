<div class="mdc-dialog mdc-dialog--scrollable mdc-dialog--fullwidth" id="training--show-dialog">
    <div class="mdc-dialog__container">
        <div class="mdc-dialog__surface"
             role="alertdialog"
             aria-modal="true"
             aria-labelledby="my-dialog-title"
             aria-describedby="my-dialog-content">
            <h2 class="mdc-dialog__title" id="training-title">Workouts on this day</h2>
            <div class="mdc-dialog__content">
                <div class="training-in-dialog" id="workout-content">
                    Loading...
                </div>

                <div class="d-flex justify-content-center">
                    <button class="mdc-button mdc-button--outlined" id="calendar-training-add">
                        <div class="mdc-button__ripple"></div>
                        <i class="material-icons mdc-button__icon" aria-hidden="true">add_circle_outline</i>
                        <span class="mdc-button__label">Add</span>
                    </button>
                </div>
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
