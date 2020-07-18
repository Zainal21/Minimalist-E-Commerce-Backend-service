<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaction;
use App\product;
class DashboardController extends Controller
{
    public function index()
    {
        $this->vars = [
            '_transaction' => transaction::where(['status' => 'Sukses'])->count(),
            '_product' => product::all()->count(),
            '_pending' => transaction::where(['status' => 'Pending'])->count(),
            // tambah total transaksi
            '_income' => transaction::where(['status' => 'Sukses'])->sum('Total_Bayar'),
            // new transaction
            '_latest' => transaction::with(['product'])->latest()->paginate(6),
        ];
        return view('BackEnd.v_home',$this->vars);
    }
}
