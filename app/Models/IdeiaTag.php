<?php

namespace App\Models;


use Carbon\Carbon;

class IdeiaTag extends ModelBase
{
    protected $table = 'ideia_tag';


    public function ideia()
    {
        return $this->belongsTo(Ideia::class);
    }


    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }


    public function getUpdatedAtAttribute($value)
    {
        $value = Carbon::createFromTimestamp(strtotime($value));
        return $value->diffForHumans();
    }
}