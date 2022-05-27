<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TipoPago::create([
            'nombre' => 'Efectivo'
        ]);
        \App\Models\TipoPago::create([
            'nombre' => 'Tarjeta'
        ]);
        \App\Models\TipoPago::create([
            'nombre' => 'BTC'
        ]);
    }
}
