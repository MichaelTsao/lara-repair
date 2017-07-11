<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * 获取这个国家的所有城市
     */
    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
