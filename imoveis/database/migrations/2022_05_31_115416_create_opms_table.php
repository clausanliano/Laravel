<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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

            $table->foreignId('opm_id')->nullable()->constrained('opms');
            $table->foreignId('imovel_id')->constrained('imoveis');

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
};
