<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatPostReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('chat_post_reply')){
            Schema::create('chat_post_reply', function (Blueprint $table) {
                $table->id();
                $table->integer('fk_chat_post')->unsigned();
                $table->foreign('fk_chat_post')->references('id')->on('chat_post');
                $table->integer('fk_user')->unsigned();
                $table->foreign('fk_user')->references('id')->on('users');
                $table->string('reply', 500);
                $table->timestamp('dateCloture')->nullable();
                $table->integer('fk_user_cloture')->unsigned()->nullable();
                $table->foreign('fk_user_cloture')->nullable()->references('id')->on('users');
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_post_reply');
    }
}
