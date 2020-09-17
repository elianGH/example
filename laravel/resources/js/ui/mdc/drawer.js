import $ from 'jquery';
import { MDCDrawer } from '@material/drawer';
import { MDCTopAppBar } from "@material/top-app-bar";

/** Initializations **/
const drawerElement = document.querySelector('.mdc-drawer-main');

if(drawerElement) {
    let drawer = MDCDrawer.attachTo(drawerElement);

    const topAppBar = MDCTopAppBar.attachTo(document.getElementById('app-bar'));

    topAppBar.setScrollTarget(document.getElementById('main-content'));
    topAppBar.listen('MDCTopAppBar:nav', () => {
        drawer.open = !drawer.open;
    });
}

