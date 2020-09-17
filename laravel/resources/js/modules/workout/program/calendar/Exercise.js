import axios from 'axios';
import ExerciseBuilder from "./ExerciseBuilder";

class Exercise
{
    constructor(gridManager, dataManager) {
        this.gridManager = gridManager;
        this.dataManager = dataManager;
        this.builder = new ExerciseBuilder();
    }

    fetch() {
        axios.get('/manager/workout/exercise/fetch', {'responseType': 'json'})
            .then((response) => {
                this.render(response.data);
                this.dataManager.setExercises(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    render(exercises) {
        if(! exercises.length) {
            return false;
        }

        for(const exercise of exercises) {
            this.gridManager.renderExercises(
                this.builder.create(exercise)
            );
        }
    }
}

export default Exercise;
