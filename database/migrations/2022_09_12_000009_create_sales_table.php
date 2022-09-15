<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('id del usuario');
            $table->integer('raffle_id')->comment('id del sorteo');
            $table->integer('phone')->comment('telefono del cliente');
            $table->integer('total')->comment('total de la venta');
            $table->integer('status')->length(1)->default(0)->comment('estado de la venta 0 - activo / 1 - desactivado');
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
        Schema::dropIfExists('sales');
    }
}
