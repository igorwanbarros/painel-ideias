<?php


namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckList extends ModelBase
{
    use SoftDeletes;

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