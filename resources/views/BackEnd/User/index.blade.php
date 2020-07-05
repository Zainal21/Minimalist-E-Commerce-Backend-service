@extends('BackEnd.Schema')

@section('title','Dashboard')
@section('content')
    
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data User</h1>
  </div>
  <!-- Content Row -->
  <div class="row">
    <div class="col">
      <div class="card">
      <div class="card-header">Master Data User  
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
                <tr>
                  <td>1</td>
                  <td>Muhamad Zainal Arifin</td>
                  <td>Zainalarifin080718@gmail.com</td>
                  <td>User</td>
                  <td><a href="" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-sm btn-outline-danger mx-2"><i class="fas fa-trash"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
    </div>
  </div>
@endsection