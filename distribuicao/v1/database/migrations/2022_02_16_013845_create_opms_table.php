<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opms', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sigla');
            $table->integer('vagas_masculinas');
            $table->integer('vagas_femininas');
            $table->integer('vagas_unisex');

            $table->text('observacao')->nullable();

            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')->references('id')->on('cidades');

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
        Schema::dropIfExists('opms');
    }
}
