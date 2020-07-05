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
        <form action="" method="post">
          @csrf
          <label for="name">Nama Produk</label>
          <input type="text" name="" class="form-control" id="">
          <label for="name">Tipe</label>
          <select name="" class="form-control" id="">
            <option value="" class="form-control">- pilih produk -</option>
            <option value="" class="form-control">Baju</option>
            <option value="" class="form-control">Sneakers</option>
          </select>
          <label for="description">Deskripsi Produk</label>
          <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
          <label for="name">Stok</label>
          <input type="number" name="" class="form-control" id="">
          <label for="name">Harga</label>
          <input type="number" name="" class="form-control" id="">
          <input type="submit" value="Simpan" class="btn btn-success mt-2">
        </form>
      </div>
    </div>
    </div>
  </div>
@endsection