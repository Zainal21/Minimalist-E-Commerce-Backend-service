<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_gallery extends Model
{
    protected $table = 'product_galleries';
    protected $fillable = [
        'products_id',
        'foto'
    ];
    public function product()
    {
        return $this->belongsTo(product::class, 'products_id', 'id');
    }
    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
   
}
