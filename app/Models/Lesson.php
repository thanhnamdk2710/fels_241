<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'name',
        'course_id',
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function words()
    {
        return $this->hasMany(Word::class);
    }
}
