<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tableau')){
            Schema::create('tableau', function (Blueprint $table) {
                $table->id();
                $table->string('libelle', 200);
                $table->integer('fk_projet')->unsigned();
                $table->foreign('fk_projet')->references('id')->on('projet');
                $table->integer('fk_color')->unsigned();
                $table->foreign('fk_color')->references('id')->on('color');
                $table->timestamp('dateCloture')->nullable();
                $table->integer('fk_user_cloture')->unsigned()->nullable();
                $table->foreign('fk_user_cloture')->nullable()->references('id')->on('users');
                $table->string('description', 500)->nullable()->default('NULL');
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
        //Schema::dropIfExists('tableau');
    }
}
