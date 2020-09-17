import $ from 'jquery';

/** Nested aside toggle list **/
$('.mdc-list-item--has-nested').on('click', function(e) {
    e.preventDefault();

    $(this).siblings('.mdc-list-nested').toggleClass('mdc-list-nested--opened');
});
