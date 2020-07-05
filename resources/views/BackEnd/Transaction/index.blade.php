@extends('BackEnd.Schema')

@section('title','Data Transaksi Masuk')
@section('content')
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
      <div class="card-header">
          Transaksi Masuk
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>UUID</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Nama Produk</th>
                  <th>Jumlah</th>
                  <th>Total bayar</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>Lorem ipsum dolor sit.</td>
                  <td>Baju</td>
                  <td>Lorem, ipsum.</td>
                  <td>61</td>
                  <td><a href="" class="btn btn-sm btn-warning mx-2">Pending</a></td>
                  <td><a href="" class="btn btn-sm btn-outline-primary mx-2 my-2"><i class="fas fa-edit"></i></a><a href="" class="btn btn-sm btn-outline-info mx-2 my-2"><i class="fas fa-eye"></i></a><a href="" class="btn btn-sm btn-outline-danger mx-2 my-2"><i class="fas fa-trash"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
    </div>
  </div>
@endsection