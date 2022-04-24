@extends('admin.layout.main')

@section('container')
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Mata Pelajaran</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Mata Pelajaran</li>
            </ol>
            </div>
          <div class="row">
            <div class="col-lg-12   ">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Mata Pelajaran</h6>
                  <div class="my-2">
                  <a href="/admin/category/create" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-20">
                    <i class="fas fa-newspaper"></i>    
                    </span>
                    <span class="text" data-toggle="modal" data-target="#tambah_member"
                    id="#modalCenter">Tambah Service</span>
                  </a>
          
                  </div>
                </div>
                
                <form action = "create" method = "POST" enctype = "multipart/form-data">
                  @csrf
                <div class="card-body">
                <div class="form-group">
                      <label for="mapel_name">Judul Materi</label>
                      <input type="mapel_name" name = "mapel_name" class="form-control @error('mapel_name') is-invalid @enderror" id="create" placeholder="Nama Mapel">
                    </div>
                    <div class="form-group">
                    <label for="id_service">Pilih Mapel </label>
                    <select class="select2-single-placeholder form-control" name="id_service">
                    @foreach($data_services as $services) 
                    <option value="">Select</option>
                      <option value="{{$services->id}}">{{$services->service_name}}</option>
                      @endforeach
                    </select>
                   
                  </div>
                      
                <div class="form-group @error('deskripsi_mapel') is-invalid @enderror">
                <label>Deskripsi Mapel</label>
                    <textarea name='deskripsi_mapel' id='news'></textarea>
                      <script type='text/javascript'>
                         var editor = CKEDITOR.replace('news');  
                      </script>
                      </div>
                      <div class="form-group @error('image') is-invalid @enderror">
                    <label for="image" class = "form-label">Upload Materi</label>
                          <div class="md:flex">
                              <div class="w-full p-3">
                                  <div class="relative border-dotted h-48 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                                      <div class="absolute">
                                          <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-4x text-blue-700"></i> <span class="block text-gray-400 font-normal">Attach you files here</span> </div>
                                      </div> <input type="file" class="h-full w-full opacity-0" name="">
                                  </div>
                              </div>
                          </div>
                      </div>
                    <div class="form-group @error('image') is-invalid @enderror">
                    <label for="image" class = "form-label">Sampul Mapel</label>
                      <div class="custom-file">
                        <input type="file" name ="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
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