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
       <form action="" method="post" enctype="multipart/form-data" id="Fgaleri">
        @csrf
        <label for="">Nama produk</label>
        <select name="products_id" class="form-control" id="">
       @forelse ($product as $item)
        <option value="{{$item->id}}" class="form-control">{{$item->nama_produk}}</option>
        
        @empty
        <option value="" class="form-control">- Data Produk Tidak Tersedia -</option>
           
       @endforelse
        
        </select>
        <label for="" class="mt-1">Gambar</label>
        <input type="file" name="foto" class="form-control img-preview" id="" required>
        <input type="submit" name="" value="Simpan"  class="btn btn-success mt-2" id="">
       <a href="{{url('admin/gallery')}}" class="btn btn-danger mt-2">Kembali</a>
       </form>
      </div>
    </div>
    </div>
  </div>
@endsection