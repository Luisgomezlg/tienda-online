<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'tipo_identificacion',
        'numero_identificacion',
        'direccion',
        'email',
        'password',
        'rol_id',
        ];
}
