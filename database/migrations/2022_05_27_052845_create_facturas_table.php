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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sucursal_id');
            $table->unsignedBigInteger('tipo_documento_id');
            $table->unsignedBigInteger('tipo_entrega_id');
            $table->unsignedBigInteger('metodo_pago_id');
            $table->unsignedBigInteger('estado_factura_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('vendedor_id');

            $table->decimal('tatal_descuento',10,2)->nullable();
            $table->decimal('total_percepcion', 10, 2)->nullable();
            $table->decimal('total_retencion', 10, 2)->nullable();
            $table->decimal('total_iva',10, 2)->nullable();
            $table->decimal('total_sumas',10, 2);
            $table->decimal('total_exento', 10, 2)->nullable();
            $table->decimal('total_no_sujeto',10, 2)->nullable();
            $table->decimal('total', 10,2);

            $table->foreign('sucursal_id')
                    ->references('id')->on('sucursals');
            $table->foreign('tipo_documento_id')
                    ->references('id')->on('tipo_documentos');
            $table->foreign('tipo_entrega_id')
                    ->references('id')->on('tipo_entregas');
            $table->foreign('metodo_pago_id')
                    ->references('id')->on('tipo_pagos');
            $table->foreign('estado_factura_id')
                    ->references('id')->on('estado_facturas');
            $table->foreign('cliente_id')
                    ->references('id')->on('clientes');
            $table->foreign('vendedor_id')
                    ->references('id')->on('vendedors');
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
        Schema::dropIfExists('facturas');
    }
};
