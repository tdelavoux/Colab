<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrumSprintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('scrum_sprint')){
            Schema::create('scrum_sprint', function (Blueprint $table) {
                $table->id();
                $table->integer('fk_board')->unsigned();
                $table->foreign('fk_board')->references('id')->on('board');
                $table->integer('fk_color')->unsigned();
                $table->foreign('fk_color')->references('id')->on('color');
                $table->string('libelle' , 100);
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
        Schema::dropIfExists('scrum_sprint');
    }
}
