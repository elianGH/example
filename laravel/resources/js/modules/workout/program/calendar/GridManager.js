import $ from 'jquery';

class GridManager
{
    constructor() {
        this.grid = $('#grid');
        this.gridWeeks = $('#grid__weeks');
        this.dayDialogContent = $('#day-dialog-content');
        this.trainingDialogContent = $('#training-dialog-content');
        this.exerciseList = $('#exercises-list');
        this.exerciseArea = $('#exercises-area');
        this.gridItemDummy = $('#grid__item-dummy-width');
        this.exerciseEditorTitle = $('#exercise--editor-title');
    }

    buildUi() {
        this.setGridHeight();
        this.addListeners();
    }

    setGridHeight() {
        $('.grid__week').height(this.gridItemDummy.width() + 'px');
    }

    addListeners() {
        $(window).on('resize', () => {
            this.setGridHeight();
        });
    }

    addWeekRow(html) {
        this.gridWeeks.append(html);
        this.setGridHeight();
    }

    renderToDialog(html, dialog) {
        if(dialog === 'day') {
            this.dayDialogContent.html(html);
        } else if(dialog === 'training') {
            this.trainingDialogContent.html(html);
        }
    }

    renderToDay({ weekId, dayId }, html) {
        $(`#${weekId}`).find(`#${dayId}`).append(html);
    }

    setExerciseEditorTitle({ title }) {
        this.exerciseEditorTitle.text(title);
    }

    renderExercises(exerciseElement) {
        this.exerciseList.append(exerciseElement);
    }
}

export default GridManager;
