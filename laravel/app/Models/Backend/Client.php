<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Hash;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'password', 'username',
        'phone', 'client_role', 'email', 'email_verified_at'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password'];

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
    protected $table = 'client';

    /**
     * Hash password
     *
     * @param $value
     */
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
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
}
