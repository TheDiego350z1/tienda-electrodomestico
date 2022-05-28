<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'vendedor_id');
    }

    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class, 'tipo_documento_id');
    }

    public function metodoPago()
    {
        return $this->belongsTo(TipoPago::class, 'metodo_pago_id');
    }
}
