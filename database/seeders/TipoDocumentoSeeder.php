<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TipoDocumento::create([
            'nombre' => 'Factura',
            'descripcion' => 'Factura Consumidor final',
        ]);
        \App\Models\TipoDocumento::create([
            'nombre' => 'Tiquete',
            'descripcion' => 'Tiquete para venta de consumidor final',
        ]);
        \App\Models\TipoDocumento::create([
            'nombre' => 'CCD',
            'descripcion' => 'Comprobante de Credito Fiscal',
        ]);
        \App\Models\TipoDocumento::create([
            'nombre' => 'Devolución Factura',
            'descripcion' => 'Devolución de producto, por medio de compra de Factura consumidor Final',
        ]);
        \App\Models\TipoDocumento::create([
            'nombre' => 'Devolución Tiquete',
            'descripcion' => 'Devolución de producto, por medio de compra de Tiquete consumidor Final',
        ]);
        \App\Models\TipoDocumento::create([
            'nombre' => 'Devolución CCF',
            'descripcion' => 'Devolución de producto, por medio de compra de Comprobante de Credito Fiscal consumidor Final',
        ]);
    }
}
