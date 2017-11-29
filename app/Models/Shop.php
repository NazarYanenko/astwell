<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public $timestamps = false;

    public function work_graphs()
    {
        return $this->hasMany(WorkGraph::class);
    }



}
