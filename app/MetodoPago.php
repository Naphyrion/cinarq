<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'description'
    ];
    //
    public function escolaridadesPagadas()
    {
        return $this->belongsToMany(EscolaridadPagada::class);
    }
}
