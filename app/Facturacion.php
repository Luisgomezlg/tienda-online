<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    //
    protected $table = 'facturacions';
    protected $primaryKey = 'fac_id';
    protected $keytype="string";
    public $timestamps = false;
    public    $incrementing=true;
    protected $fillable = [
        'fac_id',
        'fac_fecha',
        'fac_num_auth',
        'for_id',
        'users_id',
        ];
}
