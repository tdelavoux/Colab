<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WikiNote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('wiki_note')){
            Schema::create('wiki_note', function (Blueprint $table) {
                $table->id();
                $table->string('libelle', 50);
                $table->integer('fk_tableau')->unsigned();
                $table->foreign('fk_tableau')->references('id')->on('tableau');
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
        Schema::dropIfExists('wiki_note');
    }
}
