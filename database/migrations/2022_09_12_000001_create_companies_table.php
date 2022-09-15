<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');                                               
            $table->integer('country_id')->nullable()->comment('pais de la compañia'); 
            $table->string('name')->comment('nombre de la compañia');
            $table->string('nit',20)->nullable()->comment('nit de la compañia');
            $table->string('phone',20)->nullable()->comment('telefono de la compañia');
            $table->string('email')->nullable()->comment('email de la compañia');      
            $table->integer('status')->length(1)->default(0)->comment('estado de la compañia 0 - activo / 1 - desactivado');
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
        Schema::dropIfExists('companies');
    }
}
