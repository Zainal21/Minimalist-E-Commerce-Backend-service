@extends('BackEnd.Schema')

@section('title','Data Produk')
@section('content')
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Produk</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
      <div class="card-header">
          Master Data Produk
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
                <tr>
                  <th>1</th>
                  <th>Baju Gucci</th>
                  <th>Baju</th>
                  <th>21</th>
                  <th>21000000</th>
                  <td><a href="" class="btn btn-sm btn-outline-primary mx-2 my-2"><i class="fas fa-edit"></i></a><a href="" class="btn btn-sm btn-outline-danger my-2 mx-2"><i class="fas fa-trash"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
    </div>
  </div>
@endsection