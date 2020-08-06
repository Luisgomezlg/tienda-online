<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    protected $primaryKey = 'com_id';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $fillable = [
      'com_id',
      'comment',
    ];
}
