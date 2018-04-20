<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $fillable = [
        'activitable_id',
        'activitable_type',
        'action',
        'user_id',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activitable()
    {
        return $this->morphTo();
    }
}
