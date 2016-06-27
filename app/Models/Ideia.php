<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ideia extends ModelBase
{
    use SoftDeletes;

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