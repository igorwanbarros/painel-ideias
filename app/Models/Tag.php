<?php

namespace App\Models;


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
}