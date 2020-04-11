<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Aplikasi Pengaduan Masyarakat
  </title>
  <!-- Asset -->
  <!-- Favicon -->
  <link href="{{asset('template/assets/img/brand/favicon.png')}}" 
  rel="icon" 
  type="image/png">
  <!-- Fonts -->
  <link href="{{asset('template/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('template/assets/js/plugins/nucleo/css/nucleo.css')}}" 
  rel="stylesheet" />
  <link href="{{ asset('template/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}"
  rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('template/assets/css/argon-dashboard.css?v=1.1.0') }}" rel="stylesheet" />
<!-- Asset -->
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-2">
        <a class="navbar-brand">
          <img src="{{asset('template/assets/img/brand/logosip4.png') }}"/> SISTEM PENGADUAN
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="../assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
            Daftar
            </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Masukan Data Diri</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
        <div class="modal-body">
          <form action="/register" method="POST" role="form">
          {{csrf_field()}}
            <div class="form-group mb-3">
              <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"></span>
                  </div>
                  <input class="form-control" name="nik" placeholder="NIK" type="number" autocomplete="off">
                </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" name="nama" placeholder="Nama" type="text" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" name="username" placeholder="Username" type="text" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Password" type="text" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" name="telp" placeholder="No. Telp" type="text" autocomplete="off">
                  </div>
                </div>
                 </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
             </div>
            </div>
          </div>
          </form>
        <!-- End Modal -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(template/assets/img/theme/shared.png); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-5"></span>
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white text-uppercase" style="font-family: 'Raleway', sans-serif;">Selamat Datang</h1>
              <p class="text-lead text-light" style="font-family: 'Raleway', sans-serif;">Membantu menyampaikan laporan Anda kepada instansi berwenang dengan efektif</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
            <i class="ni ni-check-bold"></i>Anda berhasil mendaftarkan diri
            </div>
            @endif
              <form class="form" action="/postlogin" method="POST">
              {{csrf_field()}}
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input name="username" class="form-control" placeholder="Username" type="text" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="password" class="form-control" placeholder="Password" type="password" autocomplete="off">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small></small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small></small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core   -->
  <script src="{{asset('template/assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{asset('template/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="{{asset('template/assets/js/argon-dashboard.min.js?v=1.1.0') }}"></script>
  <script src="{{asset('template/https://cdn.trackjs.com/agent/v3/latest/t.js') }}"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>