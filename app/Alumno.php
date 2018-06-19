<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Escolaridad;

class Alumno extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 
        'curso', 
        'matricula', 
        'ano_lectivo', 
        'porcentaje_beca', 
        'SEP'
    ];
    //escolaridad
    public function escolaridades()
    {
        return $this->hasMany('Escolaridad');
    }
}
