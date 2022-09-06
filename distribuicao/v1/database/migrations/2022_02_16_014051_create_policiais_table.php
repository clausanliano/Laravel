<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliciaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policiais', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('numero_praca', 8)->unique();
            $table->string('matricula', 7)->unique();
            $table->enum('sexo', ['Masculino', 'Feminino']);
            $table->integer('classificacao')->unique();
            $table->text('observacao')->nullable();

            $table->unsignedBigInteger('opm_id')->nullable();
            $table->foreign('opm_id')->references('id')->on('opms');

            $table->unsignedBigInteger('policial_id')->nullable();
            $table->foreign('policial_id')->references('id')->on('policiais');

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
        Schema::dropIfExists('policiais');
    }
}
