<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    protected $table = 'propietario';

    protected $fillable = 
    [
        'numero_cedula',
		'primer_nombre',
		'segundo_nombre',
		'apellidos',
		'direccion',
		'telefono' 
		'ciudad'
    ];


    public function vehiculos(){
    	return $this->hasMany('App\Models\Vehiculo');
    }

  

    public $timestamps = false;
}
