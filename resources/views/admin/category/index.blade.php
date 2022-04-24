@extends ('admin.layout.main')

@section ('container')
<div class="container-fluid" id="container-wrapper">

@if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible sm" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ $message }}
          </div>
          @endif
          @if(session()->has('TambahUserGagal'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ session('TambahUserGagal') }}
          </div>
          @endif
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">CATEGORY</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Member TDI</li>
            </ol>
          </div>
<!-- modal user -->

 <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
                  <div class="my-2"></div>
                  <a href="create" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-20">
                    <i class="fas fa-newspaper"></i>    
                    </span>
                    <span class="text" data-toggle="modal" data-target="#tambah_member"
                    id="#modalCenter">Tambah Kategori</span>
                  </a>
                </div> 
          <div class="table-responsive p-3  col-lg-13">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Action</th>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Id</th>
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                    <td>{{$category->id}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>
                        <a href="/admin/category/edite/{{ $category->id }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-20"> <i class="fas fa-pen"></i></span></a></li>
                        <a href="/admin/category/destroy/{{$category->id}}" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-20"> <i class="fas fa-trash-alt"></span></i></a></li>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
                </div>
              </div> 
              </div> 
@endsection
