<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * 获取这个地区的所有用户
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * 获取该地区所属的城市。
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
