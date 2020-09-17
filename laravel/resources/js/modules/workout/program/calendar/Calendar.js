import GridManager from './GridManager';
import Dialog from "./Dialog";
import DataManager from "./DataManager";
import Week from './Week';
import Training from "./Training";
import Exercise from "./Exercise";

class Calendar
{
    constructor(programId, data = []) {
        this.programId = programId;
        this.dialog = new Dialog();
        this.gridManager = new GridManager();
        this.dataManager = new DataManager(data);
        this.exercise = new Exercise(this.gridManager, this.dataManager);
        this.gridManager.buildUi();
        this.exercise.fetch();
        this.opened = {};
        // this.dialog.openExerciseEditor();
    }

    addWeek() {
        const week = new Week();
        week.addWeek();
        this.gridManager.addWeekRow(week.getWeekHTML());
        this.dataManager.pushWeek(week.getWeekData());
    }

    addTraining() {
        const training = new Training();
        training.create();
        this.gridManager.renderToDay(this.opened, training.getTrainingHtml());
        this.gridManager.setExerciseEditorTitle(training.getTrainingData());
        this.dataManager.pushTraining(this.opened, training.getTrainingData());
        this.dialog.openExerciseEditor();
        this.dialog.closeTrainingAdd();
        this.dialog.closeDay();
        this.save();
    }

    addExercise(exerciseId) {
        const exercise = this.dataManager.findExercise(exerciseId);
        console.log(exercise);
    }

    openDay(weekId, dayId) {
        this.opened = {
            "weekId": weekId,
            "dayId": dayId
        };
        const dayData = this.dataManager.findDay(this.opened);
        const workout = new Training();
        this.dialog.openDay();
        this.gridManager.renderToDialog(
            workout.allForDialog(dayData),
            'day'
        );
    }

    openTrainingAdd() {
        this.dialog.openTrainingAdd();
    }

    openTraining(trainingId) {

    }

    save() {
        // this.programId;
    }
}

export default Calendar;
