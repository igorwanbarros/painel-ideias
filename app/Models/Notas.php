<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notas extends ModelBase
{
    use SoftDeletes;

    protected $table    = 'notas';

    protected $fillable = [
        'id',
        'titulo',
        'descricao',
        'realizado',
    ];


    public function getUpdatedAtAttribute($value)
    {
        $value = Carbon::createFromTimestamp(strtotime($value));
        return $value->diffForHumans();
    }
}