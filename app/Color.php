<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $table = 'colores';
    protected $primaryKey = 'col_id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
      'col_id',
      'col_nombre',
    ];
}
