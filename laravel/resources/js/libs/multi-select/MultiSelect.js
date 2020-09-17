import { MDCSelect } from '@material/select';
import $ from 'jquery';

class MultiSelect
{
    /**
     * Constructor
     * @param element
     */
    constructor(element) {
        this.element = element;
        this.menu = $(this.element).find('.mdc-list');
        this.fitWidth();
        this.chips = element.querySelector('.mdc-multi-select__chips');
        this.selectedValues = this.getSelectedValues();
        this.selected = this.selectedValues.length ? this.getSelectedKeys() : [];
        this.multiSelect = new MDCSelect(element);
        this.addEventListener();
    }

    /**
     * Get selected keys
     *
     * @returns []
     */
    getSelectedKeys() {
        const listItems = this.element.querySelectorAll('.mdc-list li');
        let selected = [];

        for (let i=0; i < listItems.length; i++) {
            const classes = listItems[i].className.split(' ');
            for(let j=0; j < classes.length; j++) {
                if(classes[j] === 'mdc-list-item--multi-selected') {
                    selected.push(i);
                }
            }
        }

        return selected;
    }

    /**
     * Get selected values as array
     *
     * @returns []
     */
    getSelectedValues() {
        const values = $(this.element).find("input[type=hidden]").val();
        return values && values !== "" ? values.split(',') : [];
    }

    /**
     * Add on change event
     */
    addEventListener() {
        this.multiSelect.listen('MDCSelect:change', (select) => {
            const { index, value } = select.detail;

            if(index === -1) {
                return false;
            }

            if(this.selected.indexOf(index) === -1) {
                this.addItem(index, value);
            } else {
                this.removeItem(index, value)
            }

            this.markSelected();
        });
    }

    /**
     * Adjust the width of the select list
     */
    fitWidth() {
        $(this.element).find('.mdc-select__menu').width($(this.element).parents().width());
    }

    /**
     * Add item chip on select
     *
     * @param index
     * @param value
     */
    addItem(index, value) {
        this.selected.push(index);
        const text = this.element.querySelector('.mdc-select__selected-text').textContent;
        this.chips
            .appendChild(
                this.createChip(text, value)
            );

        this.appendValue(value);
    }

    /**
     * Remove item chip from multi select
     *
     * @param index
     * @param value
     */
    removeItem(index, value) {
        this.selected.splice(this.selected.indexOf(index), 1);
        this.chips
            .querySelector(`[data-value="${value}"]`)
            .remove();

        this.removeValue(value);
    }

    /**
     * Append value to input
     *
     * @param value
     */
    appendValue(value) {
        this.selectedValues.push(value);
        this.element.querySelector('.multi-select-values').value = this.selectedValues.join(',');
    }

    /**
     * Remove value from input
     *
     * @param value
     */
    removeValue(value) {
        this.selectedValues.splice(this.selectedValues.indexOf(value), 1);
        this.element.querySelector('.multi-select-values').value = this.selectedValues.join(',');

        if(! this.selectedValues.length) {
            this.multiSelect.selectedIndex = -1;
        }
    }

    /**
     * Mark all selected items in menu
     */
    markSelected() {
        this.menu.find('li').removeClass('mdc-list-item--multi-selected');
        for (let val of this.selectedValues) {
            this.menu.find(`[data-value="${val}"]`).addClass('mdc-list-item--multi-selected');
        }
    }

    /**
     * Create chip element on add item event
     *
     * @param text
     * @param value
     * @returns {HTMLDivElement}
     */
    createChip(text, value) {
        const chip = document.createElement('div');
        chip.className = "mdc-chip";
        chip.setAttribute('data-value', value);
        chip.innerHTML = `
            <div class="mdc-chip__ripple"></div>
            <span role="gridcell">
                <span role="button" tabindex="-1" class="mdc-chip__text">${text}</span>
            </span>
        `;

        return chip;
    }
}

export default MultiSelect;
