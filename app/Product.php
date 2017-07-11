<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * 获取这个产品的所有订单
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    /**
     * 获取该产品所属的公司。
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
