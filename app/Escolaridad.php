<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;

class Escolaridad extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'valor', 
        'n_cuota', 
        'pagado'
    ];
    //
    public function alumno()
    {
        return $this->belongTo('Alumno');
    }
}
