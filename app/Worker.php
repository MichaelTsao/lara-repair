<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    /**
     * 获取这个工人的所有订单
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    /**
     * 获取该工人所属的公司。
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
     * 获取该工人所属的用户。
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
