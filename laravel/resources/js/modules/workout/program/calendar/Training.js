import uuid from 'uuid';
import $ from 'jquery';
import DOM from './DOM';

class Training
{
    constructor() {
        this.dom = new DOM();
        this.trainingData = {};
        this.trainingHtml = null;
    }

    create() {
        const id = uuid.v1();
        const text = $('#training-form-title').val();
        this.trainingData = {
            "id": id,
            "title": text,
            "notes": $('#training-form-notes').val()
        };

        this.trainingHtml = this.createInDay(id, text);
    }

    allForDialog(dayData) {
        if(dayData) {
            if(! dayData.trainings.length) {
                return this.emptyList();
            }

            const wrapper = this.dom.createElement('div', 'training-in-dialog__list');

            for(let training of dayData.trainings) {
                const { id, title } = training;
                wrapper.append(
                    this.dom.createElement('div', 'training-in-dialog__item', id, title)
                );
            }

            return wrapper;
        } else {
            return this.error();
        }
    }

    createInDay(id, text) {
        return this.dom.createElement('div', 'grid__training', id, text);
    }

    emptyList() {
        return this.dom.createElement(
            'div', 'training-in-dialog__empty',
            null, 'There are no trainings on this day'
        );
    }

    error() {
        return this.dom.createElement(
            'div', 'mdc-dialog--error', null, 'Error load trainings'
        );
    }

    getTrainingHtml() {
        return this.trainingHtml;
    }

    getTrainingData() {
        return this.trainingData;
    }
}

export default Training;
