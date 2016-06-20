<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ideia extends Model
{
    protected $table = 'ideia';
    protected $fillable = [
        'id',
        'nome',
        'descricao',
    ];
}