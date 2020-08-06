<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
  protected $table = 'eventos';
  protected $primaryKey = 'eve_id';
  protected $keytype="string";
  public $timestamps = false;
  public    $incrementing=true;
  protected $fillable = [
      'eve_id',
      'eve_descripcion',
      'titulo',
      'eve_link_img',
      'eve_fecha',
      'users_id',
      ];
}
