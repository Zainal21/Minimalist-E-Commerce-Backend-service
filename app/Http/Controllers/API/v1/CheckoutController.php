<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\transaction;
use App\product;
use App\transaction_details;
use Auth;
class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // ubah status transaksi menjadi pending dan menampilkan detail transaksi 
       $request->validate([ 
        'Nama_Pemesan'=> 'required',
        'Alamat'=> 'required',
        'produk_id'=> 'required',
        'Jumlah'=> 'required',
        'Total_Bayar'=> 'required',
        'status'=> 'required',     
       ]);
       $Transaction = Transaction::create([
            'Nama_Pemesan'=> $request->Nama_Pemesan,
            'Alamat'=> $request->Alamat,
            'produk_id'=> $request->produk_id,
            'Jumlah'=> $request->Jumlah,
            'Total_Bayar'=> $request->Total_Bayar,
            'status'=> 'Pending', 
        ]);
        $produk =  product::find($request->produk_id);
        $produk->stok = $produk->stok - $request->Jumlah;
        $produk->save();

        // $transaction_details = transaction_details::create([
        //     'transaction_id' => $Transaction->id,
        //     'product_id' => $produk->id
        // ]);
       $this->vars = [
                'meta' => [
                    'code' => 200,
                    'messsage' => 'Berhasil Melakukan Transaksi',
                ],
              
        ];
        return response()->json($this->vars,200);
    }
    public function details($id)
    {
        $transaction_details = transaction_details::with(['product', 'transaction'])->find($id);
        $this->vars = [
                    'meta' => [
                        'code' => 200,
                        'messsage' => 'Details Transaksi Berhasil Diambil',
                    ],
                    'data' => $transaction_details
            ];
        return response()->json($this->vars,200);
    }
    
}
