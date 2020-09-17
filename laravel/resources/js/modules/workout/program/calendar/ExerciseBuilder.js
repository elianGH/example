import DOM from './DOM';

class ExerciseBuilder
{
    constructor() {
        this.dom = new DOM();
        this.item = null;
    }

    create({ id, title, image, animation, description, tips }) {
        this.item = this.dom.createElement('div', 'exercises-list__item', id);
        this.addTitle(title);
        this.addImage(image);
        this.addActions(id);

        return this.item;
    }

    addTitle(title) {
        this.item.append(
            this.dom.createElement('h5', 'exercises-list__title', null, title)
        );
    }

    addImage(image) {
        const imageTag = this.dom.createElement('div', 'exercises-list__image');
        imageTag.setAttribute('style', `background-image: url(${image})`);
        this.item.append(imageTag);
    }

    addActions(id) {
        const actions = this.dom.createElement('div', 'mdc-card__actions');
        const actionsLeft = this.dom.createElement('div', 'mdc-card__action--icons');
        const actionsRight = this.dom.createElement('div', 'mdc-card__action--icons');
        actionsLeft.append(this.addButton('add', id, 'exercise--add'));
        actionsRight.append(this.addButton('more_vert', id));
        actions.append(actionsLeft);
        actions.append(actionsRight);
        this.item.append(actions);
    }

    addButton(text, id, classNames = '') {
        const button = this.dom.createElement(
            'button',
            `material-icons mdc-icon-button mdc-card__action mdc-card__action--icon ${classNames}`,
            null,
            text
        );
        button.setAttribute('data-id', id);

        return button;
    }
}

export default ExerciseBuilder;
