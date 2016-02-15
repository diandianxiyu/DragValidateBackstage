<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//获取数据
Route::get('/picture',"PicController@output");
//检查验证
Route::any('/v',"PicController@v");

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

//默认是登录的路由
    Route::get('/',function () {
        return view('welcome');
    });


    //密钥管理
    Route::get('/backend/key',"IndexController@key");
    //
    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    //用户登录地址
    Route::get('/login/index',"LoginController@index");
    Route::post('/login/index',"LoginController@index");

    //后台首页
    Route::get('/backend/index',"IndexController@index");
    //密钥管理
    Route::get('/backend/key',"IndexController@key");
    //重置密钥
    Route::get('/backend/key/reset',"IndexController@ajaxReset");

    //背景图片管理
    Route::get('/backend/pic',"IndexController@pic");

    //退出
    Route::get('/login/logout',"LoginController@getLogout");

});
