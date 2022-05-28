<?php

namespace App\Http\Livewire\Reportes;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

use App\Models\Vendedor;
use App\Models\Factura;

class Vendedores extends Component
{
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



        // dd($vendedor);

        // $vendedor_id = DB::table('vendedors')
        //                 ->select('id')
        //                 ->where('codigo', '=', $this->codigoVendedor)
        //                 ->get();
        // dd($vendedor_id->facturas);

        // $this->ventas = Factura::where('vendedor_id', '=', $vendedor->id)
        //                         ->whereBetween('created_at', [$this->fechaInicio, $this->fechaFin])
        //                         ->get();
        // $fechas = Factura::where('vendedor_id', '=', $vendedor->id)
        //                         ->whereBetween('created_at', [$this->fechaInicio, $this->fechaFin])
        //                         ->get();


        // $fechas = $vendedor::whereBetween('created_at', [$this->fechaInicio, $this->fechaFin])
        //                     ->get();
        // $fechas = $vendedor->facturas::whereBetween('created_at', [$this->fechaInicio, $this->fechaFin])
        //                     ->get();

        // $fechas = DB::table('facturas')
        //                     ->select('vendedor_id')
        //                     ->where('vendedor_id', '=', $vendedor->id)
        //                     ->whereBetween('created_at', [$this->fechaInicio, $this->fechaFin])
        //                     ->get();

        // dd($fechas);
    }

}
