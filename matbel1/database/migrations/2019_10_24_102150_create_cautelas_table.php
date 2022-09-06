        
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCautelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cautelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario');
            $table->date('dt_cautela')->format('d.m.Y');
            $table->date('dt_exclusao')->format('d.m.Y')->nullable();
            $table->integer('quantidade')->nullable();   
            $table->text('observacao')->nullable();   
            $table->string('cautela');
            
            //opm
            $table->unsignedBigInteger('opm_id');
            $table->foreign('opm_id')->references('id')->on('opms');

            //policial
            $table->unsignedBigInteger('policial_id');
            $table->foreign('policial_id')->references('id')->on('policiais');

            //arma
            $table->unsignedBigInteger('arma_id');
            $table->foreign('arma_id')->references('id')->on('armas');
            

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
        Schema::dropIfExists('cautelas');
    }
}
