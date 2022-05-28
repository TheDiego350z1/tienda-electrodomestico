<?php

namespace App\Http\Livewire\Reportes;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Vendedor;
use App\Models\Factura;

class Vendedores extends Component
{
    use WithPagination;

    public $vendedor_id, $fechaInicio, $fechaFin, $ventas;

    public $buscarVendedor = '';

    public function render()
    {
        $vendedores = Vendedor::where('codigo', 'like', '%' . $this->buscarVendedor . '%')
                            ->get();
        return view('livewire.reportes.vendedores', compact('vendedores'));
    }

    public function buscar()
    {

        $vendedor = Vendedor::find($this->vendedor_id);

        $this->ventas = Factura::where('vendedor_id', '=', $vendedor->id)
                            ->whereBetween('created_at', [$this->fechaInicio, $this->fechaFin])
                            ->get();
    }

}
