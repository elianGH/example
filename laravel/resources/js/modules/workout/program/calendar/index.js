import $ from 'jquery';
import Calendar from './Calendar';

const programId = $('#program-id').val();
const calendar = new Calendar(programId);

$('#calendar-week-add').on('click', function() {
    calendar.addWeek();
});

$(document).on('click', '.grid__day', function(e) {
    if(e.target.className === 'grid__workout') {
        return false;
    }

    calendar.openDay($(this).parent().attr('id'), $(this).attr('id'));
});

$(document).on('click', '.grid__workout', function(e) {
    calendar.openTraining($(this).attr('id'));
    e.stopPropagation();
});

$(document).on('click', '.exercise--add', function(e) {
    calendar.addExercise($(this).data('id'));
    e.stopPropagation();
});

$('#calendar-training-add').on('click', function() {
    calendar.openTrainingAdd();
});

$('#calendar-training-save').on('click', function(e) {
    e.preventDefault();
    calendar.addTraining();
});

