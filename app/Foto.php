<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //
    protected $table = 'fotos';
    protected $primaryKey = 'fot_id';
    protected $keytype="string";
    public $timestamps = false;
    public    $incrementing=true;
    protected $fillable = [
        'fot_id',
        'fot_ruta',
        'fot_ruta2',
        'pro_id'
        ];
}
