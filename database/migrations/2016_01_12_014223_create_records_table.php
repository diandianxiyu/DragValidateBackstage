<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//用户验证码标记表
class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('create_verify'); //验证码创建时间
            $table->string('void_verify'); //验证码校验时间
            $table->integer('user_id');  //针对哪个用户
            $table->string('pic_original');
            $table->string('pic_background');
            $table->string('pic_button');
            $table->integer('point_x');
            $table->integer('point_y');
            $table->string('cookie_str');  //验证页面的请求的cookie的id,判断是不是当前的请求
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('records');
    }
}
