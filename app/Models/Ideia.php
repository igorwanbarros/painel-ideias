<?php

namespace App\Models;

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
}