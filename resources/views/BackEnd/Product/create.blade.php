@extends('BackEnd.Schema')

@section('title','Data Produk')
@section('content')   
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Produk</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
      <div class="card-header">
          Master Data Produk
      
      </div>
      <div class="card-body">
        <form action="/admin/product/create" method="post" class="form-group" id="FProduk">
          @csrf
          <label for="name">Nama Produk</label>
          <input type="text" name="nama_produk" id="" class="form-control">
          <label for="name">Tipe</label>
          <select name="tipe" class="form-control" id="">
            <option value="" class="form-control">- pilih produk -</option>
            <option value="Baju" class="form-control">Baju</option>
            <option value="Sneakers" class="form-control">Sneakers</option>
          </select>
          <label for="description">Deskripsi Produk</label>
          <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
          <label for="name">Stok</label>
          <input type="number" name="stok" class="form-control" id="">
          <label for="name">Harga</label>
          <input type="number" name="harga" class="form-control" id="">
          <input type="submit" value="Simpan" class="btn btn-success mt-2" id="btn-produk">
        </form>
      </div>
    </div>
    </div>
  </div>
@endsection