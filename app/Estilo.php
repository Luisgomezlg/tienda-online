<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    //
    protected $table = 'estilos';
    protected $primaryKey = 'est_id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
      'est_id',
      'est_nombre',
      'cat_id',
    ];
}
