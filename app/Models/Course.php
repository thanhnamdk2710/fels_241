<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'level_completed',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
