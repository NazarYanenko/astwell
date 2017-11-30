<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    protected $table = 'work_time';

    public $timestamps = false;

    protected $casts = [
        'is_work' => 'bool'
    ];

    protected $hidden = [
        'shop_id'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
