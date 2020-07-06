@extends('BackEnd.Schema')

@section('title','Data Produk')
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
         Data Produk
      <a href="{{url('admin/product/create')}}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Tambah Item</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Tipe</th>
                  <th>Stok</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($product as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->nama_produk}}</td>
                  <td>{{$item->tipe}}</td>
                  <td>{{$item->stok}}</td>
                  <td>{{$item->harga}}</td>
                <td><a href="{{url('/admin/product/edit/'. $item->id)}}" class="btn btn-sm btn-outline-primary mx-2 my-2 rounded-circle"><i class="fas fa-edit"></i></a><a href="{{url('/admin/product/delete/'. $item->id)}}" id="{{$item->id}}" class="btn btn-sm btn-outline-danger btn-produk-hapus my-2 mx-2 rounded-circle"><i class="fas fa-trash"></i></a></td>
                </tr>
                @empty
                <tr>
                  <td colspan="6" class="text-center"> Data Tidak Tersedia</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
      </div>
    </div>
    </div>
  </div>
@endsection