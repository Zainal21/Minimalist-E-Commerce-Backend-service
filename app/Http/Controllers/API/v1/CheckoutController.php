<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\transaction;
use App\product;
use Auth;
class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // ubah status transaksi menjadi pending dan menampilkan detail transaksi 
       $request->validate([
        
        'user_id' => 'required',
        'product_id' => 'required',
        'jumlah' => 'required',
        'total_bayar' =>'required',
      
       ]);
    //    $this->vars = [
    //             'meta' => [
    //                 'code' => 200,
    //                 'messsage' => 'Transaksi Berhasil',
    //             ],
    //             'data' => [
    //                 Transaction::create([
    //                     'UUID' => 'TRS'. mt_rand(10000,999999),
    //                     'user_id' =>$request->user_id,
    //                     'product_id' => $request->product_id,
    //                     'jumlah' => $request->jumlah,
    //                     'total_bayar' => $request->total_bayar,
    //                     'alamat' => $request->alamat,
    //                     'status' => 'Pending'
    //                 ]),
    //                 $p = new Product,
    //                 $p->stok - $request->jumlah,
    //                 $p->save()
    //             ],
            
        // ];
        return response()->json($this->vars,200);
    }
}
