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
        Schema::create('inventario_detalles', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_transaccion');
            $table->integer('cantidad_ingreso')->nullable();
            $table->integer('cantidad_egreso')->nullable();
            $table->decimal('costo_promedio');
            $table->boolean('estado');
            $table->unsignedBigInteger('inventario_id');
            $table->unsignedBigInteger('sucursal_id');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('tipo_documento_id');

            $table->foreign('inventario_id')
                    ->references('id')->on('inventarios');
            $table->foreign('sucursal_id')
                    ->references('id')->on('sucursals');
            $table->foreign('producto_id')
                    ->references('id')->on('productos');
            $table->foreign('tipo_documento_id')
                    ->references('id')->on('tipo_documentos');
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
        Schema::dropIfExists('inventario_detalles');
    }
};
