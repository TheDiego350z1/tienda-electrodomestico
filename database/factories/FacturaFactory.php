<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factura>
 */
class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sucursal_id' => 1,
            'tipo_documento_id' => 1,
            'tipo_entrega_id' => 1,
            'metodo_pago_id' => 1,
            'estado_factura_id' => 1,
            'cliente_id' => 1,
            'vendedor_id' => 1,
            'total_sumas' => 100,
            'total' => 100,
        ];
    }
}
