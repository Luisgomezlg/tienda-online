<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'items';
    protected $primaryKey = 'ite_id';
    protected $keytype="string";
    public $timestamps = false;
    public    $incrementing=true;
    protected $fillable = [
        'ite_id',
        'fac_id',
        'pro_id',
        'ite_cantidad',
        'ite_precio_base',
        'ite_iva',
        ];
}
