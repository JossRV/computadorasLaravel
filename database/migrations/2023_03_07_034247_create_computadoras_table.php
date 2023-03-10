<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_computadoras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('ram');
            $table->string('procesador');
            $table->string('disco_duro');
            // $table->string('disco_duro')->nullable();
            $table->text('descripcion')->default('null');
            $table->string('URL_imagen')->default('null');
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
        Schema::dropIfExists('t_computadoras');
    }
}
