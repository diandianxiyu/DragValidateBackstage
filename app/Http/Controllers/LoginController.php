<?php

/**
 *
 *
 * 重写框架自带的auth部分,写到系统中
 *
 * 需要思考的
 *
 * 最新部署的系统,创建用户
 *
 *
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class LoginController extends Controller
{

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    //用户登录
    public static function index(Request $request){

        if(\Auth::check()){
            return redirect('/backend/index');
        }

        if($request->method() == "POST"){

            //先跳转到后台首页去
            return redirect('/backend/index');
        }
        return view('others/login');
    }




}
