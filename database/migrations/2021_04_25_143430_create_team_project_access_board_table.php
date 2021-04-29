<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateTeamProjectAccessBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('team_project_access_board')){
            Schema::create('team_project_access_board', function (Blueprint $table) {
                $table->integer('fk_board')->unsigned();
                $table->foreign('fk_board')->references('id')->on('board');
                $table->integer('fk_team_project')->unsigned();
                $table->foreign('fk_team_project')->references('id')->on('team_project');
                $table->integer('access')->unsigned();
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
        Schema::dropIfExists('team_project_access_board');
    }
}
