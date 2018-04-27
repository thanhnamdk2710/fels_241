<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'level_completed',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function getImage() {
        return asset(config('settings.direct_images') . $this->image);
    }
}
