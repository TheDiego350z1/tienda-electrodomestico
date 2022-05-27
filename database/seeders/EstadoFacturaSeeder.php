<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoFacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PENDIENTE -> vendido pero factura no impresa
        \App\Models\EstadoFactura::create([
            'nombre' => 'PENDIENTE'
        ]);

        //Procesada -> vendido y factura impresa
        \App\Models\EstadoFactura::create([
            'nombre' => 'PROCESADA'
        ]);
        \App\Models\EstadoFactura::create([
            'nombre' => 'ANULADA'
        ]);
        \App\Models\EstadoFactura::create([
            'nombre' => 'DEVUELTA'
        ]);
    }
}
