<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Record extends Model
{
    //


    /**
     * 进行记录的保存
     */
    public static function AddRecord($create_verify,$void_verify,$user_id,$pic_original,$pic_background,$pic_button,$point_x,$point_y,$cookie_str){
        $model=new Record();
        $model->create_verify=$create_verify;
        $model->void_verify=$void_verify;
        $model->user_id=$user_id;
        $model->pic_original=$pic_original;
        $model->pic_background=$pic_background;
        $model->pic_button=$pic_button;
        $model->point_x=$point_x;
        $model->point_y=$point_y;
        $model->cookie_str=$cookie_str;
        $model->save();
        return $model->id;
    }


    /**
     * 修改记录,变成标记状态
     * @param $cooike
     */
    public static function mark($cooike){
        DB::table('records')
            ->where('cookie_str', $cooike)
            ->update(['void_verify' => time()]);
    }


    /**
     * 获取这次的全部信息
     * @param $k
     * @param $v
     * @param $cookie
     */
    public static function getInfoByCooike($cookie){
        $info= DB::table('records')->where('cookie_str',$cookie)->get();
        return $info[0];
    }
}
