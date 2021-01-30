<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('project')){
            Schema::create('project', function (Blueprint $table) {
                $table->id();
                $table->string('libelle', 100);
                $table->integer('fk_user')->unsigned();
                $table->foreign('fk_user')->references('id')->on('users');
                $table->integer('fk_color')->unsigned();
                $table->foreign('fk_color')->references('id')->on('color');
                $table->timestamp('dateCloture')->nullable();
                $table->string('description', 500)->nullable()->default('NULL');
                $table->integer('fk_user_cloture')->nullable()->unsigned();
                $table->foreign('fk_user_cloture')->references('users')->on('id')->onDelete('set null');
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
        //Schema::dropIfExists('project');
    }
}
