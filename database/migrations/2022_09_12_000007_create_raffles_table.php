<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRafflesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raffles', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->comment('nombre del sorteo');
            //fecha 
            // hora o horas  
            // ubicacion 
            // dias se repite si es todos los dias 
           // tarde o noche  tambien se puede manejar por las horas 
           // los dias varian la hora ejemplo lune a viernes 10 pm sabados 11 domingos y festivos 9 pm
           

//            Cafeterito Tarde:
// - Lunes a Sábado 12:00 PM

// Cafeterito Noche:
// - Lunes a Viernes 10:00 PM
// - Sábado 11:00 PM
// - Domingos y Festivos 9:00 PM

// tabla numeros a bloquear por sorteo 






            $table->integer('sale_id')->comment('id de la venta');
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
        Schema::dropIfExists('raffles');
    }
}
