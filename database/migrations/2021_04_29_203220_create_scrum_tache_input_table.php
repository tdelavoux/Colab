<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrumTacheInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('scrum_tache_input')){
            Schema::create('scrum_tache_input', function (Blueprint $table) {
                $table->integer('fk_scrum_tache')->unsigned();
                $table->foreign('fk_scrum_tache')->references('id')->on('scrum_tache'); 
                $table->integer('fk_scrum_input')->unsigned();
                $table->foreign('fk_scrum_input')->references('id')->on('scrum_input'); 
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
        Schema::dropIfExists('scrum_tache_input');
    }
}
