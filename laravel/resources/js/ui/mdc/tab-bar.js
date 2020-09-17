import {MDCTabBar} from '@material/tab-bar';

const crudTabBarElement = document.getElementById('crud-tab-bar');

if(crudTabBarElement) {
    const tabBar = new MDCTabBar(crudTabBarElement);
    let contentElements = document.querySelectorAll('.tab-bar-content');

    tabBar.listen('MDCTabBar:activated', function(event) {
        // Hide currently-active content
        document.querySelector('.tab-bar-content__active').classList.remove('tab-bar-content__active');
        // Show content for newly-activated tab
        contentElements[event.detail.index].classList.add('tab-bar-content__active');
    });
}

