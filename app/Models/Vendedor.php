<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    // public function facturas()
    // {
    //     return $this->hasMany(Factura::class, 'vendedor_id');
    // }

    /**
     * Get all of the comments for the Vendedor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany(Factura::class, 'vendedor_id');
    }
}
