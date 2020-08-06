<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'categorias';
    protected $primaryKey = 'cat_id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
      'cat_id',
      'cat_nombre',
      'cat_descripcion',
    ];
}
