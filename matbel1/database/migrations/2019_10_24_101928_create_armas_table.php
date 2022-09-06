<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armas', function (Blueprint $table) {
            $table->bigIncrements('id');

            
            $table->string('numero_serie', 25)->nullable()->unique();
            $table->string('numero_tombo', 15)->nullable()->unique();      
            $table->string('carregador', 15)->nullable();
            $table->string('subunidade', 30)->nullable();
            $table->text('observacao')->nullable();
            
            //modelo arma
            $table->unsignedBigInteger('modelo_arma_id');
            $table->foreign('modelo_arma_id')->references('id')->on('modelos_arma');

            //situacao
            $table->unsignedBigInteger('situacao_id')->nullable();
            $table->foreign('situacao_id')->references('id')->on('opms');

            //opm
            $table->unsignedBigInteger('opm_id')->nullable();
            $table->foreign('opm_id')->references('id')->on('opms');

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
        Schema::dropIfExists('armas');
    }
}
