<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->integer('id');
          $table->primary('id');
          $table->string('nombre');
          $table->string('apellido');
          $table->string('fecha_nacimiento');
          $table->string('tipo_identificacion');
          $table->string('numero_identificacion');
          $table->string('email')->unique();
          $table->string('password');
          $table->integer('rol_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
