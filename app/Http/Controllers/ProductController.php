<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('BackEnd.Product.index');
    }
    public function create()
    {
        return view('BackEnd.Product.create');
    }

    public function store(Request $request)
    {

    }

    public function edit()
    {
        return view('BackEnd.Product.edit');
    }

}
