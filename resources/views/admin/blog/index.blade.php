@extends ('admin.layout.main')

@section ('container')
<div class="container-fluid" id="container-wrapper">

@if ($message = Session::get('succes'))
        <div class="alert alert-success alert-dismissible sm" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ $message }}
          </div>
          @endif
          @if(session()->has('TambahPostSuccess'))
        <div class="alert alert-succes alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ session('TambahPostSuccess') }}
          </div>
          @endif
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">NEWS POST</h1>
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
                  <h6 class="m-0 font-weight-bold text-primary">Daftar Berita</h6>
                  <div class="my-2"></div>
                  <a href="create" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-20">
                    <i class="fas fa-newspaper"></i>    
                    </span>
                    <span class="text" data-toggle="modal" data-target="#tambah_member"
                    id="#modalCenter">Tambah Berita</span>
                  </a>
                </div> 
                <div class="table-responsive p-2  col-lg-12">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Excerpt</th>
                        <th>Tgl_post</th>
                        <th>Images</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Id</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Excerpt</th>
                        <th>Tgl_post</th>
                        <th>Images</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    @foreach($news as $berita)
                    @if ($berita->user->id == Auth::user()->id)
                    <tr>
                    <td>{{$berita->id}}</td>
                        <td>{{$berita->judul}}</td>
                        <td>{{$berita->category->category_name}}</td>
                        <td>{{$berita->excerpt}}</td>
                        <td>{{$berita->tgl_post}}</td>
                        <td><img src="{{ asset('storage/' . $berita->image) }}" height="90px" width="90px" /></td>
                        <td>
                        <a href="/admin/blog/edit/{{ $berita->id }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-20"> <i class="fas fa-pen"></i></span></a></li>
                        <a href="/admin/category/destroy/" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-20"> <i class="fas fa-trash-alt"></span></i></a></li>
                        </td>
                      </tr>
                      @endif
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
                </div>
              </div> 
              </div> 
@endsection
