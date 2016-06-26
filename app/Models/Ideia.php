<?php

namespace App\Models;

use Carbon\Carbon;

class Ideia extends ModelBase
{
    protected $table = 'ideia';

    protected $fillable = [
        'id',
        'nome',
        'descricao',
    ];


    public function tags()
    {
        return $this->hasMany(IdeiaTag::class);
    }


    public function getUpdatedAtAttribute($value)
    {
        $value = Carbon::createFromTimestamp(strtotime($value));
        return $value->diffForHumans();
    }
}