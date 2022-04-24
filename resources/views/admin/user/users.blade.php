@extends ('admin.layout.main')

@section ('container')
<div class="container-fluid" id="container-wrapper">
@if(session()->has('TambahUserBerhasil'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ session('TambahUserBerhasil') }}
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
            <h1 class="h3 mb-0 text-gray-800">Member TDI</h1>
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
                  <h6 class="m-0 font-weight-bold text-primary">Daftar Member</h6>
                  <div class="my-2"></div>
                  <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-20">
                      <i class="fas fa-user-edit"></i>
                    </span>
                    <span class="text" data-toggle="modal" data-target="#tambah_member"
                    id="#modalCenter">Create Member</span>
                  </a>
                </div> 
            <!-- Modal Center -->
          <div class="modal fade" id="tambah_member" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <b h5 class="modal-title" id="close_member">Tambah Member TDI</b>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="container-login">
    
                  <form action = "users" method="post">
                  @csrf
                    <div class="form-group">
                      <label for="name"> Nama Lengkap</label>
                      <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Enter Name" value="{{old('name')}}">
                      @error('name')
                      <div class="invalid-feedback">
                      {{ $message }}
                      </div>
                     @enderror
                    </div>
                    <div class="form-group">
                      <label for="username"> Username</label>
                      <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Enter Username" value="{{old('username')}}">
                      @error('username')
                      <div class="invalid-feedback">
                      {{ $message }}
                      </div>
                     @enderror
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp"
                        placeholder="Enter Email Address" value="{{old('email')}}">
                        @error('name')
                      <div class="invalid-feedback">
                      {{ $message }}
                      </div>
                     @enderror
                      </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" value="{{old('password')}}">
                      @error('name')
                      <div class="invalid-feedback">
                      {{ $message }}
                      </div>
                     @enderror
                    </div>
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input type="password" name="repassword" class="form-control @error('repassword') is-invalid @enderror" id="repassword" placeholder="Repeat Password" value="{{old('repassword')}}">
                      @error('name')
                      <div class="invalid-feedback">
                      {{ $message }}
                      </div>
                     @enderror
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-outline-primary btn-sm">Save</button>
                </div>
              </div>
            </div>
          </div>
                <div class="table-responsive p-3  col-lg-13">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Is_admin</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Is_admin</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    @foreach($data_member as $member)
                    <tr>
                    <td>{{$member->name}}</td>
                        <td>{{$member->username}}</td>
                        <td>{{$member->email}}</td>
                        <td>{{$member->is_admin}}</td>
                        <td><a href="create" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-20"> <i class="fas fa-eye"></i></span></a></li>
                          <a href="create" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-20"> <i class="fas fa-pen"></i></span></a></li>
                        <a href="create" class="btn btn-danger btn-icon-split btn-sm"><span class="icon text-white-20">
                        <i class="fas fa-trash-alt"></span></i></a></li>
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
