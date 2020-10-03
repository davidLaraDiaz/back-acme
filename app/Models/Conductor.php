<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;


    protected $table = 'conductor';

    protected $fillable = 
    [
        'numero_cedula',
		'primer_nombre',
		'segundo_nombre',	
		'apellidos',	
		'direccion',	
		'telefono',	
		'ciudad'
    ];


    public function registros(){
    	return $this->hasMany('App\Models\Registro');
    }

    public $timestamps = false;

}
