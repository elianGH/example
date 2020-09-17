import $ from 'jquery';
import { MDCDialog } from '@material/dialog';

class Dialog
{
    constructor() {
        const dayDialog = $('#day-dialog');
        const trainingAdd = $('#training--create-dialog');
        const exerciseEditor = $('#exercise--editor-dialog');
        this.modalDay = dayDialog.length ? new MDCDialog(dayDialog[0]) : null;
        this.modalTrainingAdd = trainingAdd.length ? new MDCDialog(trainingAdd[0]) : null;
        this.exerciseEditor = exerciseEditor.length ? new MDCDialog(exerciseEditor[0]) : null;
    }

    openDay() {
        this.modalDay.open();
    }

    closeDay() {
        this.modalDay.close();
    }

    openTrainingAdd() {
        this.modalTrainingAdd.open();
    }

    closeTrainingAdd() {
        this.modalTrainingAdd.close();
    }

    openExerciseEditor() {
        this.exerciseEditor.open();
    }

    closeExerciseEditor() {
        this.exerciseEditor.close();
    }
}

export default Dialog;
