<?php
namespace App\Models\Backend\Workout;

use App\Models\Backend\Anatomy\Muscle;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    /**
     * Available properties
     */
    const PROPERTIES = [
        'weight', 'sets', 'reps', 'distance', 'duration'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'animation', 'video', 'title', 'description', 'tips', 'properties'
    ];

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'backend-pgsql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'workout_exercise';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'properties' => 'collection',
    ];

    /**
     * The Equipments that belong to the exercise.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function equipments()
    {
        return $this->belongsToMany(Equipment::class,
            'workout_exercise_workout_equipment',
            'workout_exercise_id',
            'workout_equipment_id'
        )->select('title', 'workout_equipment.id');
    }

    /**
     * The Equipments that belong to the exercise.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function muscles()
    {
        return $this->belongsToMany(Muscle::class,
            'workout_exercise_workout_muscle',
            'workout_exercise_id',
            'workout_muscle_id'
        )->select('title', 'workout_muscle.id');
    }
}
