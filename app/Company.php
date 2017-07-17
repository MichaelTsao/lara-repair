<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    const STATUS_NORMAL = 1;
    const STATUS_CLOSED = 2;

    /**
     * 获取这个公司的所有产品
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    /**
     * 获取这个公司的所有服务
     */
    public function services()
    {
        return $this->hasMany('App\Service');
    }

    /**
     * 获取这个公司的所有工人
     */
    public function workers()
    {
        return $this->hasMany('App\Worker');
    }
}
