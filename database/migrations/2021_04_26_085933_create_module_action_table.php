<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('module_action')){
            Schema::create('module_action', function (Blueprint $table) {
                $table->id();
                $table->integer('fk_module')->unsigned();
                $table->foreign('fk_module')->references('id')->on('module');
                $table->string('libelle');
                $table->string('action');
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
        Schema::dropIfExists('module_action');
    }
}
