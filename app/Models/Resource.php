<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function statusDecoded()
    {
        return $this->status == 0 ? 'غیر فعال' : 'فعال';
    }
}
