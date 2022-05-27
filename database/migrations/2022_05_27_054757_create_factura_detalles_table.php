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
        Schema::create('factura_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factura_id');
            $table->unsignedBigInteger('inventario_id');
            $table->unsignedBigInteger('producto_id');
            $table->text('descripcion');
            $table->decimal('precio_venta',10,2);
            $table->decimal('descuento', 10, 2);
            $table->decimal('descuento_total', 10, 2);
            $table->decimal('sub_total', 10, 2);

            $table->foreign('factura_id')
                    ->references('id')->on('facturas');
            $table->foreign('inventario_id')
                    ->references('id')->on('inventarios');
            $table->foreign('producto_id')
                    ->references('id')->on('productos');
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
        Schema::dropIfExists('factura_detalles');
    }
};
