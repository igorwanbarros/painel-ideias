<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelBase extends Model
{
    use SoftDeletes;

    public function saveOrUpdate(array $data = [])
    {
        $result = null;

        if (isset($data['id']) && $data['id'] > 0)
            return $this->find($data['id'])->fill($data)->update();

        return $this->create($data);
    }
}