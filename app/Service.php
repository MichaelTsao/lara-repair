<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * 获取这个服务的所有订单
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    /**
     * 获取该服务所属的公司。
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
