<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- End My CSS -->
    <link href="../../img/tdi.jpg" rel="icon">
    <title>TDIndonesia</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #052f3d">
      <div class="container">
        <a class="navbar-brand" href="#"><b style="color: seashell">Teras Digital</b> <b style="color: red">Indonesia</b> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">About Us</a>
        <a class="nav-link" href="#">Projects</a>
        <a class="nav-link disabled">Contact Us</a>
        
        <div class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="img-profile rounded-circle" src="../../../css/img/boy.png" style="max-width: 30px">
                <span class="ml-2 d-none d-lg-inline text-white small">Hi, </span>
              </a>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="admin/logout" method = "post">
            @csrf
            <button type ="submit" class="dropdown-item"  data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout</button>
              </div>
              </form>
              </ul>
            </li>
          </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
    <!-- End Navbar -->
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/tdi.jpg" alt="Sutriawan" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4"><b style="color: ghostwhite">Teras Digital</b> <b style="color: rgb(189, 21, 21)"> Indonesia</b></h1>
      <href href="https://www.tdindonesia.id"></href><p class="lead"><i>www.tdindonesia.id</i></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L30,106.7C60,117,120,139,180,128C240,117,300,75,360,90.7C420,107,480,181,540,197.3C600,213,660,171,720,133.3C780,96,840,64,900,64C960,64,1020,96,1080,101.3C1140,107,1200,85,1260,80C1320,75,1380,85,1410,90.7L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end jumbotron -->
    <!-- about -->
    <section id="about">
      <div class="col">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Tentang TDI</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nemo, iusto alias ex vitae architecto deserunt illo cumque dolore sint.</p>
            </div>
            <div class="col-md-4">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae temporibus, debitis inventore, ex eius velit ipsam eos exercitationem fugit nobis quod ipsum nisi quo corporis?</p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#b4cdd1"
          fill-opacity="1"
          d="M0,128L18.5,138.7C36.9,149,74,171,111,186.7C147.7,203,185,213,222,197.3C258.5,181,295,139,332,133.3C369.2,128,406,160,443,186.7C480,213,517,235,554,234.7C590.8,235,628,213,665,170.7C701.5,128,738,64,775,80C812.3,96,849,192,886,213.3C923.1,235,960,181,997,165.3C1033.8,149,1071,171,1108,160C1144.6,149,1182,107,1218,106.7C1255.4,107,1292,149,1329,192C1366.2,235,1403,277,1422,298.7L1440,320L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end about -->
    <!-- project -->
    <section id="projects">
      <div class="col">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Project Kami</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img src="projects/1.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="projects/2.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <img src="projects/3.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="projects/4.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="projects/5.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="projects/6.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,192L13.3,213.3C26.7,235,53,277,80,277.3C106.7,277,133,235,160,229.3C186.7,224,213,256,240,250.7C266.7,245,293,203,320,181.3C346.7,160,373,160,400,138.7C426.7,117,453,75,480,69.3C506.7,64,533,96,560,117.3C586.7,139,613,149,640,170.7C666.7,192,693,224,720,213.3C746.7,203,773,149,800,144C826.7,139,853,181,880,181.3C906.7,181,933,139,960,106.7C986.7,75,1013,53,1040,37.3C1066.7,21,1093,11,1120,21.3C1146.7,32,1173,64,1200,90.7C1226.7,117,1253,139,1280,160C1306.7,181,1333,203,1360,186.7C1386.7,171,1413,117,1427,90.7L1440,64L1440,320L1426.7,320C1413.3,320,1387,320,1360,320C1333.3,320,1307,320,1280,320C1253.3,320,1227,320,1200,320C1173.3,320,1147,320,1120,320C1093.3,320,1067,320,1040,320C1013.3,320,987,320,960,320C933.3,320,907,320,880,320C853.3,320,827,320,800,320C773.3,320,747,320,720,320C693.3,320,667,320,640,320C613.3,320,587,320,560,320C533.3,320,507,320,480,320C453.3,320,427,320,400,320C373.3,320,347,320,320,320C293.3,320,267,320,240,320C213.3,320,187,320,160,320C133.3,320,107,320,80,320C53.3,320,27,320,13,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end project -->
    <section id="podcast">
      <div class="col">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Vedeo Podcast TDI</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <iframe width="360" height="200" src="https://www.youtube.com/embed/I3138wYdqR0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
              <iframe width="360" height="200" src="https://www.youtube.com/embed/Azglfn4q3I8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <iframe width="360" height="200" src="https://www.youtube.com/embed/3AzH9tGKnO8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <iframe width="360" height="200" src="https://www.youtube.com/embed/L0PBcnAaYwA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <iframe width="360" height="200" src="https://www.youtube.com/embed/bkvGr1dJ2Rw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
              <iframe width="360" height="200" src="https://www.youtube.com/embed/bfG_cufVYjU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
