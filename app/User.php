<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const ADMIN_TYPE = 1; //ตัวแปร admin
    const DEFAULT_TYPE = 0; //ตัวแปร นักเรียน
    const TEACHER_TYPE = 2; //ตัวแปร อาจารย์

public function isAdmin(){
    return $this->type === self::ADMIN_TYPE;
}
public function isteacher(){
    return $this->type === self::TEACHER_TYPE;
}



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name','username', 'lastname', 'password','remember_token',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
