<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('especie');
            $table->string('raca');
            $table->double('peso');
            $table->string('nascimento');
            $table->char('porte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_models');
    }
}
