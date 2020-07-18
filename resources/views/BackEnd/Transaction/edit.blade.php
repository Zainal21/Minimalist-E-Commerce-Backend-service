
@extends('BackEnd.Schema')

@section('title','Data Detail Transaksi Masuk')
@section('content')   
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Detail Transaksi</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
      <div class="card-header">
          Master Data Transaksi
      
      </div>
      <div class="card-body">
        <form action="/admin/transaction/update/{{$transaction->id}}" method="post" class="form-group" id="FdetailProduk">
          @csrf
          <label for="name">Nama Pemesan</label>
          <input type="hidden" name="id" id="" class="form-control" value="{{$transaction->id}}"  readonly>
            <input type="text" name="Nama_Pemesan" id="" class="form-control" value="{{$transaction->Nama_Pemesan}}"  readonly>
            <label for="name">Alamat</label>
            <input type="text" name="Alamat" id="" class="form-control" value="{{$transaction->Alamat}}"  readonly>

            <label for="Nama Produk">Nama Produk</label>
            <input type="text" name="produk_id" id="" class="form-control" value="{{$transaction->product->nama_produk}}" readonly>
            <label for="name">Jumlah</label>
            <input type="number" name="Jumlah" class="form-control" id="" value="{{$transaction->Jumlah}}" readonly>
            <label for="name">Total Bayar</label>
            <input type="number" name="Total_Bayar" class="form-control" id="" value="{{$transaction->Total_Bayar}}" readonly>
            <label for="name">Status</label>
            <select name="status" class="form-control" id="">
              {{-- <option value="Sukses">Sukses</option> --}}
              @foreach ($status as $s)     
                @if ($s == $transaction->status)
                <option value="{{$s}}" class="form-control" selected>{{$s}}</option>
                @else
                <option value="{{$s}}" class="form-control">{{$s}}</option>
                @endif
              @endforeach
            </select>
          <input type="submit" value="Simpan" class="btn btn-success  btn-produk-edit mt-2" id="{{$transaction->id}}">
        </form>
      </div>
    </div>
    </div>
  </div>
@endsection
