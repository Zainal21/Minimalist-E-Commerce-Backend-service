@extends('BackEnd.Schema')

@section('title','Data Transaksi Masuk')
@section('content')
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h6 class="text-muted">Data Transaksi Masuk</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  
                  <th>Nama</th>
                 
                  <th>Alamat</th>
                  <th>Nama Produk</th>
                  <th>Jumlah</th>
                  <th>Total bayar</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              
              <tbody>
                @forelse ($transaction as $item)
                <tr>
                  <td>{{$item->Nama_Pemesan}}</td>
                  <td>{{$item->Alamat}}</td>
                  <td>{{$item->product->nama_produk}}</td>
                  <td>{{$item->Jumlah}}</td>
                  <td>{{$item->Total_Bayar}}</td>
                  <td>
                    @if ($item->status == 'Pending' )
                      <a href="" class="btn btn-sm btn-warning mx-2">Pending</a>
                    @elseif($item->status == 'Sukses')
                      <a href="" class="btn btn-sm btn-success mx-2">Sukses</a>
                    @elseif($item->status == 'Gagal')
                      <a href="" class="btn btn-sm btn-danger mx-2">Gagal</a>
                    @endif
                  </td>
                <td><a href="{{url('admin/transaction/edit/'. $item->id)}}" class="btn btn-sm btn-outline-primary mx-2 my-2 rounded-circle"><i class="fas fa-edit"></i></a><a href="" class="btn btn-sm btn-outline-danger rounded-circle btn-transaksi-hapus mx-2 my-2" id="{{$item->id}}"><i class="fas fa-trash"></i></a></td>
                  @empty
                    <tr>
                      <td>Data Transaksi tidak tersedia</td>
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