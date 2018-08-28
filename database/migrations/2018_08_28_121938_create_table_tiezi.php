<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTiezi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    

    public function up()
    {
        //创建表
         Schema::create('tiezi', function (Blueprint $table) {
            $table->increments('id');//创建主键字段
            $table->string('name');//字符串类型
            $table->text('content');//
            $table->timestamps();//添加时间字段  时间戳
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
        Schema::drop('tiezi');
    }
}
