<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Passport extends Model
{
    //


    public static function addAppPassport($userId){
        //随机生成key
        $k=substr(str_shuffle(md5(microtime())),rand(1,5),18);
        $v=substr(md5(str_shuffle(md5(microtime()))),rand(1,3),18);
        $model=new Passport();
        $model->user_id=$userId;
        $model->key=$k;
        $model->secret=$v;
        $model->save();

        $arr=[
            'k'=>$k,
            'v'=>$v,
        ];

        return $arr;
    }


    /**
     * 检查是不是已经存在
     * @param $k
     * @param $v
     * @return bool 是都验证完成
     */
    public static function checkPassport($k,$v){
        $find=Passport::where("key",$k)->where("secret",$v)->get();
        if(count($find) > 0){
            return $find[0]->user_id;
        }
        //没有结果,表示验证失败
        return false;
    }


    /**
     * 获取验证码
     * @param $user_id 用户的uid
     */
    public static function getPassport($user_id){
        $find=Passport::where("user_id",$user_id)->get();
        if(count($find) > 0){
            return $find[0];
        }
        //没有结果,表示验证失败
        return false;
    }


    /**
     * 重置密钥
     * @param $key
     */
    public static function reset($key){
        $phptime=date("Y-m-d H:i:s.u");
        $k=substr(str_shuffle(md5(microtime())),rand(1,5),18);
        DB::table('passports')
            ->where('key', $key) ->update(['secret' =>$k,'updated_at'=>$phptime ]);

        return 1;
    }
}
