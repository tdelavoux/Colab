<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTeamProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_team_project')){
            Schema::create('user_team_project', function (Blueprint $table) {
                $table->id();
                $table->integer('fk_user')->unsigned();
                $table->foreign('fk_user')->references('id')->on('users');
                $table->integer('fk_team_project')->unsigned();
                $table->foreign('fk_team_project')->references('id')->on('team_project');
                $table->timestamp('dateCloture')->nullable();
                $table->integer('fk_user_cloture')->unsigned()->nullable();
                $table->foreign('fk_user_cloture')->nullable()->references('id')->on('users');
                $table->timestamps();
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
        Schema::dropIfExists('user_team_project');
    }
}
