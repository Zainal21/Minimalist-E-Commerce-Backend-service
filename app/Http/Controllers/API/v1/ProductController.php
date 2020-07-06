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
}
