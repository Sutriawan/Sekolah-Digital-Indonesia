<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../img/tdi.jpg" rel="icon">
  <title>TDI - Register</title>
  <link href="../css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="login">
     <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #0b333a">
      <div class="container">
        <a class="navbar-brand" href="/"><b style="color: seashell">Teras Digital</b> <b style="color: red">Indonesia</b> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- End Navbar -->
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="../img/tdi.jpg" alt="Sutriawan" width="100" class="rounded-circle img-thumbnail" />
                    <h1 class="h4 text-gray-900 mb-4 mt-2">Register <i class = "text-color backgrouddanger">TDI</h1>
                  </div>
                  <form action = "register" method="post">
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
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Register with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="login">Already have an account?</a>
                  </div>
                  <div class="text-center">
                  </div>
                  <div class="form-group">
                 <i class="fas fa-arrow-circle-left"><a class = "text" href="/"> Back</a></i>

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="../css/vendor/jquery/jquery.min.js"></script>
  <script src="../css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../css/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../css/js/ruang-admin.min.js"></script>
</body>

</html>