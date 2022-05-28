<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;

use App\Models\Cliente;
use App\Models\Factura;

class Clientes extends Component
{
    public $cliente_id, $fechaInicio, $fechaFin, $compras;

    public $buscarCliente = '';

    public function render()
    {
        $clientes = Cliente::where('nombre', 'like', '%' . $this->buscarCliente . '%')
                            ->get();
        return view('livewire.reportes.clientes', compact('clientes'));
    }

    public function buscar()
    {
        $cliente = Cliente::find($this->cliente_id);

        $this->compras = Factura::where('cliente_id', '=', $cliente->id)
                            ->whereBetween('created_at', [$this->fechaInicio, $this->fechaFin])
                            ->get();
    }
}
