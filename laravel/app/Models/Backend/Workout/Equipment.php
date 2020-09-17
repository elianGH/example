<?php
namespace App\Models\Backend\Workout;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'active', 'sort', 'image'
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
    protected $table = 'workout_equipment';
}
