<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = [
        'Nama_Pemesan',
        'Alamat',
        'produk_id',
        'Jumlah',
        'Total_Bayar',
        'status',
    ];
    public function product()
    {
        return $this->belongsTo(product::class, 'product_id', 'id');
    }
    public function transaction_details()
    {
        return $this->hashMany(transaction::class,'transaction_id', 'id');
    }
}
