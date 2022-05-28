<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Vendedor::create([
            'nombre' => 'Diego Garcia',
            'sucursal_id' => 1,
            'codigo' => '11111'
        ]);
    }
}
