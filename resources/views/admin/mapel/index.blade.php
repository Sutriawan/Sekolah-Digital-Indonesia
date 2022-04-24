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
            <h1 class="h3 mb-0 text-gray-800">TDI - EDUCATION</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Materi</li>
            </ol>
          </div>
<!-- modal user -->

 <!-- Row -->  
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">List Education</h6>
                  <div class="my-2"></div>
                  <a href="/admin/mapel/index" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-20">
                    <i class="fas fa-newspaper"></i>    
                    </span>
                    <span class="text" data-toggle="modal" data-target="#tambah_member"
                    id="#modalCenter">List Mapel</span>
                  </a>
                </div> 
               
                <div class="card-columns">
  @foreach($data as $service)
  <td>
  <div class="card bg bg-primary text-light">
  <!-- <img src="{{ asset('storage/' . $service->cover) }}"> -->
    <div class="card-body text-center">
      <p class="card-text">{{$service->service_name}}</p>
    </div>
  </div>
</td>
    @endforeach 
    

</div>
  
                     
  
              
              
            
    </div>
    </div>
    </div> 
    </div> 
@endsection
