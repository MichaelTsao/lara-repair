<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * 获取该订单所包含的产品。
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * 获取该订单所包含的服务。
     */
    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    /**
     * 获取该订单所包含的用户。
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * 获取该订单所包含的工人。
     */
    public function worker()
    {
        return $this->belongsTo('App\Worker');
    }
}
