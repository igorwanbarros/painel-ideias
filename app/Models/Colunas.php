<?php


namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colunas extends ModelBase
{
    use SoftDeletes;

    protected $table = 'colunas';

    protected $fillable = [
        'id',
        'nome',
        'painel',
    ];


    public function getUpdatedAtAttribute($value)
    {
        $value = Carbon::createFromTimestamp(strtotime($value));
        return $value->diffForHumans();
    }
}