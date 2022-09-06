<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalizacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->text('observacao')->nullable();
            $table->point('posicao')->nullable();
            
            //localização superior
            $table->unsignedBigInteger('localizacao_id');
            $table->foreign('localizacao_id')->references('id')->on('localizacoes');


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localizacoes');
    }
}
