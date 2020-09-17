<?php
use App\Models\Kernel\Anatomy\Muscle;
use App\Models\Kernel\Anatomy\BodyPart;

Route::prefix('anatomy')->group(function () {
    Route::resource('body_type', 'Anatomy\BodyTypeController');

    Route::resource('muscle', 'Anatomy\MuscleController');
    Route::model('muscle', Muscle::class);

    Route::resource('body_part', 'Anatomy\BodyPartController');
    Route::model('body_part', BodyPart::class);
});
