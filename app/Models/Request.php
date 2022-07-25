<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Request extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function isModifyable(): bool
    {
        return $this->status === 0 && $this->user->role === 'user';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function typeDecoded()
    {
        $type = '';

        if ($this->type == 1) $type = 'نویسندگی';
        if ($this->type == 2) $type = 'ویراستار';

        return $type;
    }

    public function accept()
    {
        DB::transaction(function () {
            $this->status = 2;
            $this->save();

            if ($this->type == 1)
                $this->user->role = 'writer';
            if ($this->type == 2)
                $this->user->role = 'editor';

            $this->user->save();
        }, 5);
    }

    public function reject()
    {
        $this->status = 1;
        $this->save();
    }
}
