<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TipoCliente::create([
            'nombre' => 'Cliente VIP',
            'descripcion' => 'Cliente compra mucho'
        ]);

        \App\Models\TipoCliente::create([
            'nombre' => 'Cliente',
            'descripcion' => 'Cliente'
        ]);
    }
}
