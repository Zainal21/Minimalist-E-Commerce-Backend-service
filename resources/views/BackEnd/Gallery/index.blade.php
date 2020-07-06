@extends('BackEnd.Schema')

@section('title','Data Gallery')
@section('content')
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
      <div class="card-header">
       Data Galeri
      <a href="{{url('admin/gallery/create')}}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Tambah Item</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable"  cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Produk</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
              </thead>
          
              <tbody>
                <tr>
                 @forelse ($galeri as $item)
                     
                 
                 <td>{{$loop->iteration}}</td>
                 <td>{{$item->product->nama_produk}}</td>
                 <td><img src="{{\Storage::url($item->foto)}}" width="150px" alt=""></td>
                 <td><a href="{{url('/admin/gallery/delete/'.$item->id)}}" class="btn btn-sm btn-outline-danger btn-galeri my-2 mx-2" id="{{$item->id}}"><i class="fas fa-trash"></i></a></td>
                 @empty
                 <tr>
                  <td colspan="4" class="text-center"> Data Tidak Tersedia</td>
                </tr>
                 @endforelse
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
    </div>
  </div>
@endsection