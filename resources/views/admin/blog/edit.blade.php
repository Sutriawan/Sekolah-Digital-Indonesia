@extends('admin.layout.main')

@section('container')
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edite Postingan</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Edite postingan</li>
            </ol>
            </div>
          <div class="row">
            <div class="col-lg-12   ">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edite Postingan</h6>
                  <div class="my-2">
                  <a href="/admin/category/create" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-20">
                    <i class="fas fa-newspaper"></i>    
                    </span>
                    <span class="text" data-toggle="modal" data-target="#tambah_member"
                    id="#modalCenter">Tambah Kategori</span>
                  </a>
          
                  </div>
                </div>
                
                <form method="POST" action="{{ url('admin/blog/update', $edit->id ) }}">
                @csrf
                <div class="card-body">
                <div class="form-group">
                      <label for="judul">Judul Berita</label>
                      <input type="judul" name = "judul" value = "{{$edit->judul}}" class="form-control @error('judul') is-invalid @enderror" id="create" placeholder="Judul">
                    </div>
                    <div class="form-group">
                    <label for="category_id">Kategori Berita</label>
                    <select class="select2-single-placeholder form-control" name="category_id">
                     
                    <!-- <option value = "{{$edit->category_id}}">Select</option> -->
                    @foreach($categories as $category) 
                      <option value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                    </select>
                   
                  </div>
                  <div class="form-group">
                      <label for="excerpt">Excerpt</label>
                      <input type="judul" name = "excerpt" value = "{{$edit->excerpt}}" class="form-control @error('excerpt') is-invalid @enderror" id="create" placeholder="excerpt">
                    </div>
                  <div class="form-group">
                  <div class="form-group @error('tgl_post') is-invalid @enderror" value = "{{$edit->tgl_post}}" id="simple-date1">
                    <label for="simpleDataInput">Tanggal Posting</label>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" name ="tgl_post" class="form-control"  value = "{{$edit->tgl_post}}" id="simpleDataInput">
                      </div>
                      
                <div class="form-group @error('body') is-invalid @enderror">
                <label>Isi Berita</label>
                    <textarea name='body' class="form-control @error('body') is-invalid @enderror"  value = "{{$edit->body}}" id='news'></textarea>
                      <script type='text/javascript'>
                         var editor = CKEDITOR.replace('news');  
                      </script>
                      </div>
                    <div class="form-group @error('image') is-invalid @enderror">
                    <label for="image" class = "form-label">Input Gambar</label>
                      <div class="custom-file">
                        <input type="file" name ="image"class="custom-file-input" id="image">
                        <label class="custom-file-label" for="customFile" >Choose file</label>
                      </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
@endsection