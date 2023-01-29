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
        Schema::create('registro_patronal', function (Blueprint $table) {
            $table->Bigincrements('id_registro_patronal')
            $table->Char('nombre',200)
            $table->Char('calle',200)
            $table->Char('numero_ext',10)
            $table->Char('numero_int',10)
            $table->Char('municipio',200)
            $table->Char('estado',200)
            $table->Char('estado',200)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
};
