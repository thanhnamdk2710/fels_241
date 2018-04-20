<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'language',
        'avatar',
        'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function activities()
    {
        return $this->hasMany(Activite::class);
    }

    public function follows()
    {
        return $this->hasMany(Follow::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function lesson()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
