<?php
namespace App\Models\Manager\File;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manager\User\Team;

class File extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'path',
        'extension',
        'mime_type',
        'size',
        'uuid',
        'public',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at',
    ];

    /**
     * Associative table to this model
     *
     * @var string
     */
    protected $table = 'file';

    /**
     * Get user for the file
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(Team::class)->withTrashed();
    }

    /**
     * Get file where uuid
     *
     * @param $query
     * @param $uuid
     * @return mixed
     */
    public function scopeUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid);
    }

}
