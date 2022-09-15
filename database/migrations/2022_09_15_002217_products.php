<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('nombre del producto');
            $table->string('reference')->comment('referencia del producto');
            $table->integer('price')->comment('precio del producto');
            $table->integer('weight')->comment('peso del produto');
            $table->string('category')->comment('categoria del producto');
            $table->integer('stock')->comment('cantidad en bodega del producto');
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
        Schema::dropIfExists('products');
    }
}
