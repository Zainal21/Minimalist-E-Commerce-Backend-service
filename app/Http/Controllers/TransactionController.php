<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaction;
use App\product;
use DB;
use Validator;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->vars = [
            'transaction' => transaction::with(['product'])->get(),
        ];
        // dd($this->vars);
        return view('BackEnd.Transaction.index',$this->vars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->vars = [
            'transaction' => transaction::with(['product'])->find($id),
            'status' => ['Pending', 'Sukses', 'Gagal'],
        ];
        // dd($this->vars);
        return view('BackEnd.Transaction.edit',$this->vars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        transaction::where(['id' => $request->id])->update([
            'status' => $request->status
        ]);
        // dd($request->status);
        // dd($request->status);
        return response()->json(['success' => 'Data Transaksi Berhasil Diubah dari Database']);
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        transaction::destroy($id);
        return response()->json(['success' => 'Data Transaksi Berhasil Dihapus dari Database']);
      
    }
}
