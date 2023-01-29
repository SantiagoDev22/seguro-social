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
        Schema::create('creditoincidencia', function (Blueprint $table) {
            $table->Bigincrements('id_creditoincidencia')
            $table->Char('id_creditos',50)
            $table->Char('id_creditos',50)
            $table->Char('id_movimientos',50)
            $table->Char('id_sector',50)
            $table->$table->dateTime('fecha_incidencia', $precision = 0);
            $table->$table->dateTime('fecha_doc', $precision = 0);
            $table->$table->dateTime('fecha_noti', $precision = 0);
            $table->$table->dateTime('periodo', $precision = 0);
            $table->$table->dateTime('dias_incidencia', $precision = 0);
            $table->Char('t_doc',50)
            $table->Char('dr',50)
            $table->Char('observaciones',500)
            $table->Char('total_creditos',100)
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
