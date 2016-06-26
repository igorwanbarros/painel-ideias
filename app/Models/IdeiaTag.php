<?php

namespace App\Models;


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
}