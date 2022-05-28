<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TipoProducto::factory(10)->create();
        \App\Models\Marca::factory(20)->create();
        \App\Models\Producto::factory(200)->create();
        \App\Models\Sucursal::factory(1)->create();

        $this->call(TipoDocumentoSeeder::class);
        $this->call(TipoClienteSeeder::class);
        $this->call(TipoEntregaSeeder::class);
        $this->call(TipoPagoSeeder::class);
        $this->call(EstadoFacturaSeeder::class);
        $this->call(VendedorSeeder::class);
        \App\Models\Vendedor::factory(4)->create();

        \App\Models\Cliente::factory(10)->create();
        \App\Models\Factura::factory(100)->create();
        $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
