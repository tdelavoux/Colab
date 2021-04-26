<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('modules_actions')){
            Schema::create('modules_actions', function (Blueprint $table) {
                $table->id();
                $table->integer('fk_module')->unsigned();
                $table->foreign('fk_module')->references('id')->on('modules');
                $table->string('libelle');
                $table->string('action');
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
        Schema::dropIfExists('modules_actions');
    }
}
