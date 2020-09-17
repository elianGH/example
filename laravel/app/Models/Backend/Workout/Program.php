<?php
namespace App\Models\Backend\Workout;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    const BODY_TYPES = [
        1 => "ectomorph",
        2 => "mesomorph",
        3 => "endomorph",
        4 => "ectomorph-mesomorph",
        5 => "ectomorph-endomorph",
        6 => "mesomorph-endomorph",
        7 => "all"
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'calendar', 'difficulty', 'duration', 'age', 'client_id'
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
    protected $table = 'workout_program';

    /**
     * Body type as text attribute
     *
     * @param $value
     * @return string
     */
    public function getBodyTypeTextAttribute($value)
    {
        return self::BODY_TYPES[$value] ?? "undefined";
    }
}
