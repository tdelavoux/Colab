<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateTeamProjectAccessTableauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('team_project_access_tableau')){
            Schema::create('team_project_access_tableau', function (Blueprint $table) {
                $table->integer('fk_tableau')->unsigned();
                $table->foreign('fk_tableau')->references('id')->on('tableau');
                $table->integer('fk_team_project')->unsigned();
                $table->foreign('fk_team_project')->references('id')->on('team_project');
                $table->integer('access')->unsigned();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->integer('fk_user_update')->unsigned()->nullable();
                $table->foreign('fk_user_update')->nullable()->references('id')->on('users');
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
        Schema::dropIfExists('team_project_access_tableau');
    }
}
