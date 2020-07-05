@extends('BackEnd.Schema')

@section('title','Data Gallery')
@section('content')
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Galeri</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
      <div class="card-header">
        Tambah Data Galeri
      </div>
      <div class="card-body">
        <label for="">Nama produk</label>
        <select name="" class="form-control" id="">
          <option value="" class="form-control">- Pilih Produk -</option>
        </select>
        <label for="" class="mt-1">Gambar</label>
        <input type="file" name="" class="form-control img-preview" id="">
        <input type="submit" name="" value="Simpan"  class="btn btn-success mt-2" id="">
      <a href="{{url('admin/gallery')}}" class="btn btn-danger mt-2">Kembali</a>
      </div>
    </div>
    </div>
  </div>
@endsection