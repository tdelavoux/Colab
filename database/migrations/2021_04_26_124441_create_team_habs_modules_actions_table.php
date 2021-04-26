<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamHabsModulesActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('team_project_habs_modules_actions')){
            Schema::create('team_project_habs_modules_actions', function (Blueprint $table) {
                $table->integer('fk_module_action')->unsigned();
                $table->foreign('fk_module_action')->references('id')->on('modules_actions');
                $table->integer('fk_team_project')->unsigned();
                $table->foreign('fk_team_project')->references('id')->on('team_project');
                $table->integer('habs')->unsigned();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->timestamp('dateCloture')->nullable();
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
        Schema::dropIfExists('team_project_habs_modules_actions');
    }
}
