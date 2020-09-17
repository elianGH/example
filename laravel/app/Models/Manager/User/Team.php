<?php

namespace App\Models\Manager\User;

use App\Models\Manager\File\File;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Hash;

class Team extends Authenticatable
{
    use SoftDeletes,
        HasApiTokens,
        HasRoles;

    const ROLE_ADMIN = 'super_admin';
    const ROLE_MODERATOR = 'moderator';
    const ROLE_ANALYST = 'analyst';
    const ROLE_COPYWRITER = 'copywriter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'nickname', 'phone', 'last_activity_at', 'ban', 'image'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'last_activity_at' => 'datetime',
    ];

    /**
     * Associative table to this model
     *
     * @var string
     */
    protected $table = 'team';

    /**
     * Scope a query to find user by email.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $email
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEmail($query, string $email)
    {
        return $query->where('email', $email);
    }

    /**
     * Hash password
     *
     * @param $value
     */
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Scope a query to find user with ban preference.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param bool $ban
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBan($query, bool $ban = false)
    {
        return $query->where('ban', $ban);
    }

    /**
     * Get the user's full name
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Get the user's file image
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function file()
    {
        return $this->hasOne(File::class, 'id', 'image');
    }
}
