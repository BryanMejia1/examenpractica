<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorios', function (Blueprint $table) {
            $table->string('codigoEntrada', 10)->primary();
            $table->string('nombre', 30);
            $table->string('apellido', 30);
            $table->string('correo', 50)->unique();
            $table->string('telefono', 35);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directorios');
    }
}
