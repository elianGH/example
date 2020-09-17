import { MDCDataTable } from '@material/data-table';

/**
 * Init main data-table
 * @type {MDCDataTable}
 */

const mainTable = document.getElementById('mdc-data-table');

if(mainTable) {
    const dataTable = new MDCDataTable(mainTable);
}

