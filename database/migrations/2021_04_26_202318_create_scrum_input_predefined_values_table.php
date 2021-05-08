<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrumInputPredefinedValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('scrum_input_predefined_values')){
            Schema::create('scrum_input_predefined_values', function (Blueprint $table) {
                $table->id();
                $table->integer('fk_scrum_input')->unsigned();
                $table->foreign('fk_scrum_input')->references('id')->on('scrum_input');
                $table->integer('fk_color')->nullable()->unsigned();
                $table->foreign('fk_color')->references('id')->on('color');
                $table->boolean('clothing_step');
                $table->string('value');
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
        Schema::dropIfExists('scrum_input_predefined_values');
    }
}
