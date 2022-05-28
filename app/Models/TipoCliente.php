<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    use HasFactory;

    public function Clientes()
    {
        return $this->hasMany(Cliente::class, 'tipo_cliente_id');
    }
}
