<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoEntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tipoentrega::create([
            'nombre' => 'Retiro en Sucursal'
        ]);
        \App\Models\Tipoentrega::create([
            'nombre' => 'Domicilio'
        ]);
    }
}
