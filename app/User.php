<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


//    /**
//     * 注册新用户
//     * @param $name
//     * @param $email
//     * @param $password
//     */
//    public static function addUser($name,$email,$password){
//        $model=new User();
//        $model->name=$name;
//        $model->email=$email;
//        $model->password=self::_encodeStr($password);
//        $model->save();
//
//        return $model->id;
//
//    }
//
//
//    /**
//     * 加密字符串
//     * @param $str
//     * @return string
//     */
//    protected static function _encodeStr($str){
//        return md5(md5($str));
//    }
}
