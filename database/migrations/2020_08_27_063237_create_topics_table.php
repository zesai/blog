<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->string('cover')->default('')->comment('封面图');
            $table->string('keywords')->default('')->comment('关键词');
            $table->string('description')->default('')->comment('描述');
            $table->mediumText('markdown')->comment('markdown文章内容');
            $table->mediumText('html')->comment('markdown转的html页面');
            $table->unsignedInteger('user_id')->default(0)->index()->comment('作者');
            $table->unsignedTinyInteger('category_id')->default(0)->index()->comment('分类id');
            $table->unsignedInteger('reply_count')->default(0)->comment('回复数量');
            $table->unsignedInteger('view_count')->default(0)->comment('浏览数量');
            $table->unsignedInteger('last_reply_user_id')->default(0)->comment('最后回复用户id');
            $table->unsignedTinyInteger('is_top')->default(0)->comment('是否置顶 1是 0否');
            $table->text('excerpt')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('topics');
    }
}
