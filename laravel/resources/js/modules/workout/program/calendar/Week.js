import uuid from 'uuid';
import DOM from './DOM';

class Week
{
    constructor(props) {
        this.weekData = {};
        this.weekWrapper = null;
        this.dom = new DOM();
    }

    addWeek() {
        const id = uuid.v1();
        this.weekData = {
            "id": id,
            "days": []
        };

        this.weekWrapper = this.dom.createElement('div', 'grid__week', id);
        this.addDays();
    }

    addDays(count = 7) {
        for(let i = 0; i < count; i++) {
            const id = uuid.v1();
            const day = this.dom.createElement('div', 'grid__item grid__day', id);
            this.weekWrapper.appendChild(day);
            this.weekData.days.push({
                "id": id,
                "is_rest": false,
                "trainings": []
            });
        }
    }

    getWeekData() {
        return this.weekData;
    }

    getWeekHTML() {
        return this.weekWrapper;
    }
}

export default Week;
