<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = 'rols';
    protected $primaryKey = 'rol_id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
        'rol_id',
        'rol_nombre',
        'rol_descripcion',
        ];
}
