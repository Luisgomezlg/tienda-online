<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    //
    protected $table = 'lineas';
    protected $primaryKey = 'lin_id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
      'lin_id',
      'lin_nombre',
      'lin_descripcion',
      'cat_id',
    ];
}
