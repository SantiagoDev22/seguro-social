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
        Schema::create('Creditos', function (Blueprint $table) {
            $table->Bigincrements('id_Creditos')
            $table->Char('num_creditos',50)
            $table->Char('importe',250)
            $table->Char('t_doc',50)
            $table->$table->dateTime('fecha_alta', $precision = 0);
            $table->$table->dateTime('fecha_circunstanciada', $precision = 0);
            $table->$table->dateTime('fecha_termino', $precision = 0);
            $table->Char('id_registron_patronal',50)
            $table->Char('id_oficinadevolvimiento',50)
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
