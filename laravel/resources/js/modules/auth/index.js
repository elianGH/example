import $ from 'jquery';
import Auth from './Auth';

$(document).ready(function() {

    $('#auth__form--verify').on('submit', function (e) {
        e.preventDefault();
        Auth.verify($('#email').val(), $(this));
    });

    $('#auth__form--authorize').on('submit', function (e) {
        e.preventDefault();
        Auth.authorize($('#password').val(), $(this));
    });
});
