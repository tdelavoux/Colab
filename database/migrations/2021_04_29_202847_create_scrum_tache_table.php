<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrumTacheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('scrum_tache')){
            Schema::create('scrum_tache', function (Blueprint $table) {
                $table->id();
                $table->string('libelle' , 200);
                $table->integer('fk_scrum_sprint')->unsigned();
                $table->foreign('fk_scrum_sprint')->references('id')->on('scrum_sprint');   
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
        Schema::dropIfExists('scrum_tache');
    }
}
