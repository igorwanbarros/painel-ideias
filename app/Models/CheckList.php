<?php


namespace App\Models;


use Carbon\Carbon;

class CheckList extends ModelBase
{
    protected $table = 'check_list';

    protected $fillable = [
        'id',
        'titulo',
        'descricao',
        'parent',
        'realizado',
    ];


    public function getUpdatedAtAttribute($value)
    {
        $value = Carbon::createFromTimestamp(strtotime($value));
        return $value->diffForHumans();
    }
}