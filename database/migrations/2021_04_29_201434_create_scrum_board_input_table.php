<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrumBoardInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('scrum_board_input')){
            Schema::create('scrum_board_input', function (Blueprint $table) {
                $table->integer('fk_board')->unsigned();
                $table->foreign('fk_board')->references('id')->on('board');
                $table->integer('fk_scrum_input')->unsigned();
                $table->foreign('fk_scrum_input')->references('id')->on('scrum_input');
                $table->integer('ordre');
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
        Schema::dropIfExists('scrum_board_input');
    }
}
