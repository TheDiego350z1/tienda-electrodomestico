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

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
