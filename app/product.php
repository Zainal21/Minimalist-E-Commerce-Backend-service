<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'nama_produk', 'tipe', 'deskripsi', 'stok', 'harga' , 'slug'
    ];
    public function product_gallery()
    {
        return $this->hasMany(product_gallery::class, 'products_id', 'id');
    }
}
