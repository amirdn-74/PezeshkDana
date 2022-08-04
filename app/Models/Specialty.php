<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialty extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function scientificLevel()
    {
        return $this->belongsTo(ScientificLevel::class);
    }

    public function illnesses()
    {
        return $this->hasMany(Illness::class);
    }
}
