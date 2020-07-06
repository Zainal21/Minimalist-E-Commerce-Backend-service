<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product_gallery;
use Validator;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galeri'] = product_gallery::with(['product'])->get();
        return view('BackEnd.Gallery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['product'] = \App\product::all();
        return view('BackEnd.Gallery.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('foto')->store('uploads/galeri', 'public');
        product_gallery::create([
            'products_id' => $request->products_id,
            'foto' => $file 
        ]);
        return response()->json(['success' => 'Data Galeri Berhasil Ditambahkan ke Database']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product_gallery::destroy($id);
        return response()->json(['success' => 'Data Galeri Berhasil dihapus dari Database']);
    }
}
