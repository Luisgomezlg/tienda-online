<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('pro_id');
            $table->primary('pro_id');
            $table->string('pro_nombre', 45);
            $table->string('pro_descripcion', 245);
            $table->string('pro_talla');
            $table->date('pro_fecha', 45);
            $table->string('pro_colores', 245);
            $table->integer('pro_precio');
            $table->string('pro_iva', 45);
            $table->integer('lin_id');
            $table->integer('cat_id');

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
        Schema::dropIfExists('productos');
    }
}
