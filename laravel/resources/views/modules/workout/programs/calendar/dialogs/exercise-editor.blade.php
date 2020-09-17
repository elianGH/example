<div class="mdc-dialog mdc-dialog--scrollable mdc-dialog--fullwidth" id="exercise--editor-dialog">
    <div class="mdc-dialog__container">
        <div class="mdc-dialog__surface"
             role="alertdialog"
             aria-modal="true"
             aria-labelledby="my-dialog-title"
             aria-describedby="my-dialog-content">
            <h2 class="mdc-dialog__title" id="exercise--editor-title"></h2>
            <div class="mdc-dialog__content">
                <div class="exercises">
                    <div class="exercises__area" id="exercises-area">
                        @for($i = 0; $i < 20; $i++)
                            <div class="exercises-item">
                                <div class="exercises-item__title">
                                    Велосипед
                                </div>
                                <div class="exercises-item__image">
                                    <img src="https://www.gymvisual.com/img/p/6/7/5/5/6755.gif"/>
                                </div>
                                <div class="exercises-item__actions">
                                    <button class="mdc-icon-button material-icons">subtitles</button>
                                    <button class="mdc-icon-button material-icons">info</button>
                                </div>
                            </div>
                            <div class="exercises-item-rest">
                                <button class="mdc-icon-button material-icons">schedule</button>
                            </div>
                        @endfor
                    </div>
                    <div class="exercises__list" id="exercises-list"></div>
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
