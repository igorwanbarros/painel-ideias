<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends ModelBase
{
    use SoftDeletes;

    protected $table    = 'tag';

    protected $fillable = [
        'id',
        'nome',
        'tipo',
    ];


    public function getUpdatedAtAttribute($value)
    {
        $value = Carbon::createFromTimestamp(strtotime($value));
        return $value->diffForHumans();
    }
}