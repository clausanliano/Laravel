<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisparosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disparos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_hora')->format('d.m.Y');
            $table->integer('quantidade');   
            $table->text('observacao')->nullable();   
            
            //opm
            $table->unsignedBigInteger('opm_id');
            $table->foreign('opm_id')->references('id')->on('opms');

            //policial
            $table->unsignedBigInteger('policial_id');
            $table->foreign('policial_id')->references('id')->on('policiais');

            //arma
            $table->unsignedBigInteger('arma_id');
            $table->foreign('arma_id')->references('id')->on('armas');

            //tipo municao
            $table->unsignedBigInteger('tipo_municao_id');
            $table->foreign('tipo_municao_id')->references('id')->on('tipos_municao');
                        
            //tipo disparo
            $table->unsignedBigInteger('tipo_disparo_id');
            $table->foreign('tipo_disparo_id')->references('id')->on('tipos_disparo');

            //localizacao
            $table->unsignedBigInteger('localizacao_id')->nullable();
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
        Schema::dropIfExists('disparos');
    }
}
