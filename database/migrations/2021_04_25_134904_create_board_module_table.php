<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('board_module')){
            Schema::create('board_module', function (Blueprint $table) {
                $table->integer('fk_board')->unsigned();
                $table->foreign('fk_board')->references('id')->on('board');
                $table->integer('fk_module')->unsigned();
                $table->foreign('fk_module')->references('id')->on('module');
                $table->integer('visibility')->unsigned();
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
        Schema::dropIfExists('board_module');
    }
}
