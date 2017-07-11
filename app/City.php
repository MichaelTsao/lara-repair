<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * 获取这个城市的所有地区
     */
    public function areas()
    {
        return $this->hasMany('App\Area');
    }

    /**
     * 获取该城市所属的国家。
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
