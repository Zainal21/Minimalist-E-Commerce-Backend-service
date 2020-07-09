<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
class ProductController extends Controller
{
    public function result()
    {
        $this->vars = 
        [
            'meta' => [
                'code' => 200,
                'messsage' => 'Data Produk Berhasil Diambil'
            ],
            'data' => product::with(['product_gallery'])->get()
        ];
        return response()->json($this->vars,200);
    }
    public function details($slug)
    {
        $this->vars = [
            'meta' => [
                'code' => 200,
                'messsage' => 'Data Detail Produk Berhasil Diambil'
            ],
            'data' => product::with(['product_gallery'])
            ->where(['slug' => $slug])
            ->get()
        ];

        if($this->vars){
            return response()->json($this->vars,200);
        }else{
            return response()->json(['error' => 'Data Tidak Ditemukan'],401);
        }
    }

    public function search(Request $request)
    {
// mengambil data dari request server
        $nama_produk = $request->input('nama_produk');
        $tipe = $request->input('tipe');
// ambil data product yang akan di query
        $product = product::with(['product_gallery'])->get();

        if($nama_produk)
        {
            // query pencarian
            $product->where('nama_produk', 'like', '%' .$nama_produk. '%');
        }
        if($tipe)
        {
            // query pencarian
            $product->where('tipe', 'like', '%' .$tipe. '%');
        }
      
        $this->vars = [
            'meta' => [
                'code' => 200,
                'messsage' => 'Data Pencarian Produk Berhasil Diambil'
            ],
            'data' => $product
        ];
        return response()->json($this->vars, 200);

    }
}
