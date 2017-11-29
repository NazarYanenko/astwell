<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkGraph extends Model
{
    public $timestamps = false;

    protected $casts = [
        'is_work' => 'bool'
    ];
    protected $hidden = ['shop_id','week_id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function week()
    {
        return $this->belongsTo(Week::class);
    }
}
