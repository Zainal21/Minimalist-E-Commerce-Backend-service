<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction_details extends Model
{
    protected $table = 'transaction_details';
    protected $fillable = [
        'transaction_id',
        'product_id'
    ];
    public function transaction()
    {
        return $this->belongsTo(transaction::class, 'transaction_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(product::class, 'produk_id', 'id');
    }
}
