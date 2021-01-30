<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('chat_post')){
            Schema::create('chat_post', function (Blueprint $table) {
                $table->id();
                $table->string('libelle', 1000);
                $table->integer('fk_chat_room')->unsigned();
                $table->foreign('fk_chat_room')->references('id')->on('chat_room');
                $table->integer('fk_user')->unsigned();
                $table->foreign('fk_user')->references('id')->on('users');
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
        Schema::dropIfExists('chat_post');
    }
}
