<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_equipe')){
            Schema::create('user_equipe', function (Blueprint $table) {
                $table->integer('fk_users')->unsigned();
                $table->foreign('fk_users')->references('id')->on('users');
                $table->integer('fk_equipe')->unsigned();
                $table->foreign('fk_equipe')->references('id')->on('equipe');
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
        //Schema::dropIfExists('user_equipe');
    }
}
