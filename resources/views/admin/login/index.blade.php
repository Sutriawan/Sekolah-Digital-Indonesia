<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../img/tdi.jpg" rel="icon">
  <title>TDI - Login</title>
  <!-- <link rel="stylesheet" href="../css/style.css"> -->
  <link href="../../../css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../../../css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../../../css/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class=" login">
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
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col">
                <div class="login-form">
                <div class="text-center">
                <img src="../img/tdi.jpg" alt="Sutriawan" width="100" class="rounded-circle img-thumbnail" />
                    <h1 class="h4 text-gray-900 mb-4 mt-3"><b style="color: #0b333a">Login Admin</b> <b style="color: rgb(189, 21, 21)"> TDI</b></h1>
                    @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                  </div>
                  @endif

                  @if(session()->has('loginError'))
                  <div class="alert alert-danger alert-dismissible alert-sm" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                   {{session('loginError')}}
                  </div>
                  @endif
                  </div>                

                  <form action="login" method="post">
                  @csrf
                    
                  <div class="form-group">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Email Address" autofocus required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                    </div>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="register">Create an Account!</a>
                  </div>
                  <div class="text-center">
                  </div>
                  <i class="fas fa-arrow-circle-left"><a class = "text" href="/"> Back</a></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="../../../css/vendor/jquery/jquery.min.js"></script>
  <script src="../../../css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../css/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../../css/js/ruang-admin.min.js"></script>
</body>

</html>