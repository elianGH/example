import { MDCSelect } from '@material/select';
import MDCMultiSelect from "../../libs/multi-select";
import $ from 'jquery';

/**
 * Main table per page select
 * @type {HTMLElement}
 */
const perPage = document.getElementById('main-table-select');

if(perPage) {
    const mainTableSelect = new MDCSelect(perPage);
}

/**
 * Auto init all single select elements
 * @type {NodeListOf<Element>}
 */
const autoInits = document.querySelectorAll('.mdc-select--autoinit');

[].map.call(autoInits, function(el) {
    const input = $(el).find('input[type="hidden"]');
    const select = new MDCSelect(el);

    select.listen('MDCSelect:change', () => {
        input.val(select.value);
    });
});

/**
 * Auto init all multi select elements
 * @type {MDCMultiSelect}
 */
const msAuto = document.querySelectorAll('.mdc-multi-select--autoinit');

[].map.call(msAuto, function(el) {
    return new MDCMultiSelect(el);
});
