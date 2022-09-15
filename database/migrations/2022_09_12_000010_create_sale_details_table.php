<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            $table->integer('sale_id')->comment('id de la venta');
            $table->integer('sorteo_id')->comment('id del sorteo');
            $table->integer('number')->comment('numero a jugar');
            $table->double('amount', 8, 2)->comment('total de la venta detalle');
            $table->integer('status')->length(1)->default(0)->comment('estado del detalle de la venta 0 - activo / 1 - desactivado');
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
        Schema::dropIfExists('sale_details');
    }
}
