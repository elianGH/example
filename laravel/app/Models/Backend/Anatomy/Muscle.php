<?php
namespace App\Models\Backend\Anatomy;

use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body_part'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'workout_muscle';

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'backend-pgsql';
}
