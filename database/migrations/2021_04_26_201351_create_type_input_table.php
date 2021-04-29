<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('type_input')){
            Schema::create('type_input', function (Blueprint $table) {
                $table->id();
                $table->string('libelle', 50);
                $table->string('code', 50);
                $table->string('unit', 5)->nullable();
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
        Schema::dropIfExists('type_input');
    }
}
