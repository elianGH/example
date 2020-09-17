<?php

Route::prefix('workout')->group(function () {

    Route::get('program/edit/{calendar}/calendar', 'Workout\ProgramController@editCalendar')->name('workout.program.edit.calendar');
    Route::post('program/show/{calendar}/modal', 'Workout\ProgramController@showInModal')->name('workout.program.show.in.modal');

    Route::resource('program', 'Workout\ProgramController')->names([
        'index' => 'workout.program.index',
        'create' => 'workout.program.create',
        'store' => 'workout.program.store',
        'show' => 'workout.program.show',
        'edit' => 'workout.program.edit',
        'update' => 'workout.program.update',
        'destroy' => 'workout.program.destroy',
    ]);

    Route::get('exercise/fetch', 'Workout\ExerciseController@fetch')->name('workout.exercise.fetch');
    Route::resource('exercise', 'Workout\ExerciseController')->names([
        'index' => 'workout.exercise.index',
        'create' => 'workout.exercise.create',
        'store' => 'workout.exercise.store',
        'show' => 'workout.exercise.show',
        'edit' => 'workout.exercise.edit',
        'update' => 'workout.exercise.update',
        'destroy' => 'workout.exercise.destroy',
    ]);

    Route::resource('equipments', 'Workout\EquipmentController')->names([
        'index' => 'workout.equipment.index',
        'create' => 'workout.equipment.create',
        'store' => 'workout.equipment.store',
        'show' => 'workout.equipment.show',
        'edit' => 'workout.equipment.edit',
        'update' => 'workout.equipment.update',
        'destroy' => 'workout.equipment.destroy',
    ]);
});
