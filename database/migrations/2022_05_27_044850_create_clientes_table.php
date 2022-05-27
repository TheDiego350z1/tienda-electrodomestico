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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('pellido')->nullable();
            $table->text('direccion');
            $table->string('dui', 9)->nullable();
            $table->string('nit', 16)->nullable();
            $table->string('ruc', 9)->nullable();
            $table->boolean('estado');
            $table->unsignedBigInteger('tipo_cliente_id');

            $table->foreign('tipo_cliente_id')
                    ->references('id')->on('tipo_clientes');
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
        Schema::dropIfExists('clientes');
    }
};
