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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->string('nombre');
            $table->decimal('precio');
            $table->string('usuario');
            $table->decimal('total');
            $table->foreignId('id_venta');
            $table->foreign('id_venta')->references('id')->on('ventas')->onDelete('cascade');
            $table->foreignId('id_producto');
            $table->foreign('id_producto')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('detalles');
    }
};
