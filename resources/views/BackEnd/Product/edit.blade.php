@extends('BackEnd.Schema')

@section('title','Edit Data Produk')
@section('content')   
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Produk</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
      <div class="card-header">
          Edit Data Produk
      
      </div>
      <div class="card-body">
        <form action="" method="post" id="FProduk">
          @csrf
          <label for="name">Nama Produk</label>
        <input type="hidden" name="id" id="" class="form-control" value="{{$produk->id}}">
        <input type="text" name="nama_produk" id="" class="form-control" value="{{$produk->nama_produk}}">
          <label for="name">Tipe</label>
        <input type="text" name="tipe" class="form-control" id="" value="{{$produk->tipe}}">
          <label for="description">Deskripsi Produk</label>
        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10">{{$produk->deskripsi}}</textarea>
          <label for="name">Stok</label>
        <input type="number" name="stok" class="form-control" id="" value="{{$produk->stok}}">
          <label for="name">Harga</label>
        <input type="number" name="harga" class="form-control" id="" value="{{$produk->harga}}">
        <input type="submit" value="Ubah" class="btn btn-success btn-produk mt-2" id="{{$produk->id}}">
        </form>
      </div>
    </div>
    </div>
  </div>
@endsection