<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 获取这个用户的所有订单
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    /**
     * 获取该用户所属的地区。
     */
    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    /**
     * 获取这个用户可能对应的工人
     */
    public function worker()
    {
        return $this->hasOne('App\Worker');
    }
}
