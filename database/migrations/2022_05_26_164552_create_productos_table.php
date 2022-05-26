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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio_sugerido', 10,2);
            $table->integer('stok');
            $table->unsignedBigInteger('tipo_producto_id');
            $table->unsignedBigInteger('marca_id');

            $table->foreign('tipo_producto_id')
                    ->references('id')->on('tipo_productos');

            $table->foreign('marca_id')
                    ->references('id')->on('marcas');

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
};
