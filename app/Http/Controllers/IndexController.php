<?php

namespace App\Http\Controllers;

use App\Passport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class IndexController extends Controller
{

    public function __construct()
    {
        if(Auth::check() == false){
            return redirect()->intended("/auth/login");
        }
    }


    public function index(Request $request){
        $func=__FUNCTION__;
        //展示后台首页
        return view('/back/index',[
            'func'=>$func
        ]);
    }


    /**
     * 展示现在的kv
     */
    public function key(Request $request){

        $func=__FUNCTION__;

        //获取当前的密钥
        $user_id=6;
        $info=Passport::getPassport($user_id);

        return view('/back/key',[
            'func'=>$func,
            'info'=>$info,
        ]);
    }

    /**
     * ajax的方式对密钥进行重置
     */
    public function ajaxReset()
    {
        $key=$_GET['key'];
        $reset=Passport::reset($key);
        return $reset;
    }


    /**
     * 背景文件管理
     */
    public function pic(){
        $func=__FUNCTION__;



        return view('/back/pic',[
            'func'=>$func,

        ]);

    }
}
