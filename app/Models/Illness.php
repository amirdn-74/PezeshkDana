<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Illness extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }
}
