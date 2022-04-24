@extends('admin.layout.main')

@section('container')
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Category</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Create Category</li>
            </ol>
            </div>
          <div class="row">
            <div class="col-lg-10">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Input Kategori</h6>
                  <div class="my-2"></div>
                  <a href="/admin/category/index" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-20">
                    <i class="fas fa-eye"></i>    
                    </span>
                    <span class="text" data-toggle="modal" data-target="#tambah_member"
                    id="#modalCenter">Lihat Kategori</span>
                  </a>
                </div>
                <form method="POST" action="{{ url('admin/category/update', $edit->id ) }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="category">Nama Kategori</label>
                      <input type="category_name" name = "category_name" value = "{{$edit->category_name}}"class="form-control @error('category_name') is-invalid @enderror" id="create" placeholder="Nama Kategori">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
              </div>
            </div>
        </div>
@endsection