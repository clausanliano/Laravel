<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coletes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_serie', 25)->unique();
            $table->string('tombo', 15)-> nullable();
            $table->string('subunidade', 30)-> nullable();
            $table->date('validade')->format('d.m.Y');
            $table->text('observacao')->nullable();

            //genero
            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos');

            //nivel
            $table->unsignedBigInteger('nivel_id');
            $table->foreign('nivel_id')->references('id')->on('niveis');

            //tamanho
            $table->unsignedBigInteger('tamanho_colete_id');
            $table->foreign('tamanho_colete_id')->references('id')->on('tamanhos_colete');

            //situacao colete
            $table->unsignedBigInteger('situacao_colete_id');
            $table->foreign('situacao_colete_id')->references('id')->on('situacoes_colete');
            

            //fabricante
            $table->unsignedBigInteger('fabricante_id');
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');

            //opm
            $table->unsignedBigInteger('opm_id');
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
        Schema::dropIfExists('modelos_arma');
    }
}
