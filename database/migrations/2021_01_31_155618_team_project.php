<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TeamProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('team_project')){
            Schema::create('team_project', function (Blueprint $table) {
                $table->id();
                $table->string('name' ,50);
                $table->integer('fk_user_lead')->unsigned()->nullable();
                $table->foreign('fk_user_lead')->references('id')->on('users');
                $table->integer('fk_project')->unsigned();
                $table->foreign('fk_project')->references('id')->on('project');
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
        Schema::dropIfExists('team_project');
    }
}
