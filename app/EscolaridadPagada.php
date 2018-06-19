<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EscolaridadPagada extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cantidad_cuotas_pagadas', 
        'valor_total', 
        'metodo_pago'
    ];
    //
    public function metodosPagos()
    {
        return $this->belongsToMany(MetodoPago::class);
    }
}
