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
        Schema::create('Rango', function (Blueprint $table) {
            $table->Bigincrements('id_Rango');
            $table->Char('rango', 50);
            $table->Char('smvdf', 50);
            $table->dateTime('anio', $precision = 0);
            $table->Char('max_rango', 50);
            $table->Char('min_rango', 50);
            

            
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
