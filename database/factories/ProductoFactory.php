<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->text(500),
            'precio_sugerido' => 0,
            'stok' => rand(1,500),
            'tipo_producto_id' => rand(1,10),
            'marca_id' => rand(1,20),

        ];
    }
}
