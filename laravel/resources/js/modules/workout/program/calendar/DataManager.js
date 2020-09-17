import Fuse from 'fuse.js';

class DataManager
{
    constructor(data) {
        this.data = data;
        this.exercises = [];
        this.fuse = null;
    }

    setExercises(exercises) {
        this.exercises = exercises;
        this.fuse = new Fuse(exercises, {
            keys: ['id']
        });
    }

    pushWeek(week) {
        this.data.push(week);
    }

    pushTraining({ weekId, dayId }, workout) {
        for (let [weekIndex, week] of this.data.entries()) {
            if(week.id === weekId) {
                for (let [dayIndex, day] of this.data[weekIndex].days.entries()) {
                    if(day.id === dayId) {
                        this.data[weekIndex].days[dayIndex].trainings.push(workout);
                    }
                }
            }
        }
    }

    findWeek(weekId) {
        for(let week of this.data) {
            if(week.id === weekId) {
                return week;
            }
        }

        return null;
    }

    findDay({ weekId, dayId }) {
        const weekData = this.findWeek(weekId);

        if(weekData && weekData.hasOwnProperty('days')) {
            for(let day of weekData.days) {
                if(day.id === dayId) {
                    return day;
                }
            }
        }

        return null;
    }

    findTraining() {

    }

    findExercise(exerciseId) {
        for(const exercise of this.exercises) {
            if(exercise.id === exerciseId) {
                return exercise;
            }
        }

        return null;
    }

}

export default DataManager;
