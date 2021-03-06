<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'lrv12_users';
    protected $fillable = ['username','hoten','diachi','password','email','birthday','sex','avata','level','status','created_at','updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function news()
    {
        return $this->hasMany('App\Models\News');
    }
}
