<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosArmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_arma', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome')->unique();
            $table->string('comprimento_cano');            
            $table->text('observacao')->nullable();

            //calibre
            $table->unsignedBigInteger('calibre_id');
            $table->foreign('calibre_id')->references('id')->on('calibres');

            //tipo arma
            $table->unsignedBigInteger('tipo_arma_id');
            $table->foreign('tipo_arma_id')->references('id')->on('tipos_arma');

            //fabricante
            $table->unsignedBigInteger('fabricante_id');
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');


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
