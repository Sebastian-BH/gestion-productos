<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
    */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->default(1)->comment('id de la compañia');
            $table->string('document',20)->nullable()->comment('numero de documento del usuario');
            $table->string('name',100)->comment('nombre del usuario');
            $table->string('lastname',100)->nullable()->comment('apellido del usuario');
            $table->integer('phone')->nullable()->comment('telefono del usuario');
            $table->string('addres',100)->nullable()->comment('dirección del usuario');
            $table->string('email')->nullable()->comment('email del usuario');
            $table->string('username')->unique()->comment('alias del usuario');
            $table->string('password')->comment('contraseña del usuario');
            $table->string('token',300)->nullable()->comment('token del usuario - movil');
            $table->integer('role_id')->default(1)->comment('rol del usuario');
            $table->integer('login')->length(1)->default(0)->comment('se puede loguear 0 - puede ingresar a la web -- 1 - no puede ingresar en la web');
            $table->integer('status')->length(1)->default(0)->comment('estado del usuario  0 - activo   1 - desactivado');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
