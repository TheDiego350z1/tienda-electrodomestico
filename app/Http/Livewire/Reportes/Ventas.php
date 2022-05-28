<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;

use App\Models\Factura;

class Ventas extends Component
{
    public $fehcaInicio, $fechaFin;
    public $movimientos = [];

    public function render()
    {
        return view('livewire.reportes.ventas');
    }

    public function buscar()
    {
        $this->movimientos = Factura::whereBetween('created_at', [$this->fehcaInicio, $this->fechaFin])
                            ->get();
    }
}
