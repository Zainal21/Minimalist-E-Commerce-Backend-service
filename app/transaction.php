<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = [
        'UUID' ,
        'user_id' ,
        'product_id' ,
        'jumlah' ,
        'total_bayar',
        'status' ,
        'alamat'
    ];
}
