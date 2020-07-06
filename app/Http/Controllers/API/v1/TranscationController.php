<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranscationController extends Controller
{
    public function addCart()
    {
        // ditambahkan kedatabase dengan status transaksi menjadi cart + jumlah stok dikurangi jumlah pesanan
    }

    // delete cart

    // menghapus cart dari table transcation dan menjumlahkan stok dengan jumlah yang sebelumnya di masukkan ke cart
}
