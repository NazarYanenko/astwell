<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    public $timestamps = false;
    protected $table = 'week';

    public function work_graphs()
    {
        return $this->hasMany(WorkGraph::class);
    }
}
