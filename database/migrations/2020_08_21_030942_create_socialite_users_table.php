<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialiteUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialite_users', function (Blueprint $table) {
            $table->increments('id')->comment('主键id');
            $table->unsignedTinyInteger('socialite_client_id')->default(1)->comment('类型 1：QQ  2：Google 3：github 4:weiXin');
            $table->string('name', 30)->default('')->comment('第三方昵称');
            $table->string('avatar')->default('')->comment('头像');
            $table->string('openid', 40)->default('')->comment('第三方用户id');
            $table->string('access_token')->default('')->comment('access_token token');
            $table->string('last_login_ip', 16)->default('')->comment('最后登录ip');
            $table->integer('login_times')->unsigned()->default(0)->comment('登录次数');
            $table->string('email')->unique()->default('')->comment('邮箱');
            $table->unsignedTinyInteger('status')->default(1)->comment('账号状态 1：正常 2：限制登陆 3：禁言');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socialite_users');
    }
}
