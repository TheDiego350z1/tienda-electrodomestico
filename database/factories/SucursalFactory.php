<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sucursal>
 */
class SucursalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'descripcion' => $this->faker->text(500),
            'direccion' => $this->faker->address(),
            'telefono' => '2222-2222',
            'estado' => 1
        ];
    }
}
