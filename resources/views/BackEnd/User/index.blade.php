@extends('BackEnd.Schema')

@section('title','Dashboard')
@section('content')
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Data</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
      <div class="card-header">Data User  
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </thead>
              
              <tbody>
                @forelse ($user as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->role}}</td>
                <td><a href="{{url('/admin/user/delete/'. $item->id)}}" class="btn btn-sm btn-outline-danger rounded-circle btn-user mx-2 my-2" id="{{$item->id}}"><i class="fas fa-trash"></i></a></td>
                </tr>
                @empty
                <tr>
                  <td colspan="4" class="text-center"> Data Tidak Tersedia</td>
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