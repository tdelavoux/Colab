<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableauModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tableau_modules')){
            Schema::create('tableau_modules', function (Blueprint $table) {
                $table->integer('fk_tableau')->unsigned();
                $table->foreign('fk_tableau')->references('id')->on('tableau');
                $table->integer('fk_module')->unsigned();
                $table->foreign('fk_module')->references('id')->on('modules');
                $table->integer('visibility')->unsigned();
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
        Schema::dropIfExists('tableau_modules');
    }
}
