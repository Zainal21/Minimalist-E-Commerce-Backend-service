<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Validator;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'product' => product::all()
        ];
        return view('BackEnd.Product.index', $data);
    }
    public function create()
    {
        return view('BackEnd.Product.create');
    }

    public function store(Request $request)
    {
        $error = Validator::make($request->all(), [
            'nama_produk' => 'required', 
            'tipe' => 'required', 
            'deskripsi' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            // dd($request);
            product::create([
                'nama_produk' => $request->nama_produk, 
                'tipe' => $request->tipe, 
                'deskripsi' => $request->deskripsi,
                'tipe' => $request->tipe, 
                'stok' => $request->stok,
                'harga' => $request->harga,
                'slug'=> str::slug($request->nama_produk)
            ]);
            return response()->json(['success' => 'Data Produk Berhasil ditambahkan ke database']);
        }
    }

    public function edit($id)
    {
        $data = [
            'produk' => product::find($id)
        ];
        return view('BackEnd.Product.edit', $data);
    }
    public function update(Request $request)
    {
        $error = Validator::make($request->all(), [
            'nama_produk' => 'required', 
            'tipe' => 'required', 
            'deskripsi' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);
        if($error->fails()){
            return response()->json(['error' => $error->errors()->all()]);
        }else{
            // dd($request);
            product::where(['id' => $request->id])->update([
                'nama_produk' => $request->nama_produk, 
                'tipe' => $request->tipe, 
                'deskripsi' => $request->deskripsi,
                'tipe' => $request->tipe, 
                'stok' => $request->stok,
                'harga' => $request->harga,
                'slug'=> str::slug($request->nama_produk)
            ]);
            return response()->json(['success' => 'Data Produk Berhasil Diubah ke Database']);
        }
    }
    public function destroy($id)
    {
        product::destroy($id);
        return response()->json(['success' => 'Data Produk Berhasil dihapus dari Database']);
    }
}
