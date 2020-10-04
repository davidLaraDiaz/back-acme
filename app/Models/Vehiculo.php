<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo';

    protected $fillable = 
    [
        'placa',
		'color',
		'marca',
        'tipo_vehiculo'
    ];

    public function propietario(){
    	return $this->belongTo('App\Models\Propietario');
 
    }


    public function registros(){
    	return $this->hasMany('App\Models\Registro');
    }

    public $timestamps = false;

}
