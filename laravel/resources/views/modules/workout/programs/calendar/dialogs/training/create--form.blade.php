<form class="dialog-form df-400" method="POST" action="{{ route('workout.program.update', ['program' => 123]) }}">
    <div class="dialog-form__row">
        <div class="dialog-form__field--fullwidth mdc-text-field">
            <input id="training-form-title" type="text" class="mdc-text-field__input" name="title" aria-label="Label">
            <label class="mdc-floating-label" for="title">
                Title
            </label>
            <div class="mdc-line-ripple"></div>
        </div>
    </div>

    <div class="dialog-form__row">
        <div class="mdc-text-field mdc-text-field--textarea">
            <div class="mdc-text-field-character-counter">0 / 140</div>
            <textarea style="resize: none;" id="training-form-notes" class="mdc-text-field__input" rows="3" cols="40" maxlength="120"></textarea>
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label for="textarea" class="mdc-floating-label">Notes</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>
    </div>

    @csrf
    @method('PUT')

    <div class="d-flex justify-content-center dialog-form__submit">
        <button type="submit" class="mdc-button mdc-button--outlined" id="calendar-training-save">
            <div class="mdc-button__ripple"></div>
            <span class="mdc-button__label">Save</span>
        </button>
    </div>
</form>
