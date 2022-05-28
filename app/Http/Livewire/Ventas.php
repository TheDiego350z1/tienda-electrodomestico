<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\TipoDocumento;
use App\Models\TipoPago;
use App\Models\TipoEntrega;
use App\Models\Vendedor;
use App\Models\Cliente;
use App\Models\Producto;

class Ventas extends Component
{
    public $buscarProducto = '';

    public $tipoDocumento, $productos;

    public function render()
    {
        $documentos = TipoDocumento::all();
        $tipoPagos = TipoPago::all();
        $tipoEntregas = TipoEntrega::all();
        $vendedores = Vendedor::all();
        $clientes = Cliente::all();

        return view('livewire.ventas', [
            'documentos' => $documentos,
            'tipoPagos' => $tipoPagos,
            'tipoEntregas' => $tipoEntregas,
            'vendedores' => $vendedores,
            'clientes' => $clientes,
        ]);
    }

    public function buscar_producto()
    {
        $this->productos = Producto::where('nombre', 'like', '%' . $this->buscarProducto . '%')
                            ->get();
    }
}
