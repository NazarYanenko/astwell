<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    public $timestamps = false;

    public function workGraphs()
    {
        return $this->hasMany(WorkTime::class);
    }

}
