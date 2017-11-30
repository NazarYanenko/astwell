<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    //RELATIONS
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    //MUTATORS
    public function getIsOpenedAttribute()
    {
        if($this->is_open === 0) {
            return 'closed';
        } else {
            return 'opened';
        }
    }

    //SCOPES
    public function scopeWhereDateIs(Builder $builder, $request)
    {
        return $builder->when(!is_null($request['date']), function (Builder $builder) use ($request){
            return $builder->where('date', $request['date']);
        });
    }

    public function scopeWhereTimeIs(Builder $builder, $request)
    {
        return $builder->when(!is_null($request['time']), function (Builder $builder) use ($request){
            return $builder->where('time_open', '<=', $request['time'])
                ->where('time_closed', '>=', $request['time']);
        });
    }
}
