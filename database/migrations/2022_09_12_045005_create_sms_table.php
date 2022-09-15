<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->increments('id');                                               
            $table->integer('sale_id')->comment('id de la venta'); 
            $table->integer('to')->comment('numero telefono de sms');  
            $table->string('message')->nullable()->comment('mensaje de sms');      
            $table->integer('status')->length(1)->default(0)->comment('estado del sms 0 - activo / 1 - desactivado');
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
        Schema::dropIfExists('sms');
    }
}
