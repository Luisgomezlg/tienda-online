<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';
    protected $primaryKey = 'pro_id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
      'pro_id',
      'pro_nombre',
      'slug',
      'pro_descripcion',
      'pro_talla',
      'pro_fecha',
      'pro_precio',
      'pro_iva',
      'col_id',
      'est_id',
      'lin_id',
      'cat_id',
    ];
}
