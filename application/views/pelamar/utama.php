<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title><?= APP_NAME ?> | </title>
	  <link href="<?= base_url() ?>asset_pelamar/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/dist/css/navbar.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/_plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!-- nav bar -->
<nav class="navbar navbar-expand navbar-light bg-light shadow">
    <ul style="margin-left:30px; " class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link hitam"><?= APP_NAME ?></a> -->
        <img src="<?= base_url() ?>asset_pelamar/logo/siloker.png" height="40px" width="120px">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
      <li style="margin-left:40px;" class="nav-item d-none d-sm-inline-block">
        <div style="margin-top:5px;" class="input-group input-group-sm mb-3">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">@</span>
          </div>
        </div>
      </li>
    </ul>
    <!-- right -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="img-username img-thumbnail" width="44px" height="44px">
          ini username
        </a>
        <div style="text-align:center" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"></span>
          <div class="dropdown-divider"></div>
          <a href="#" style="text-align:center" class="dropdown-item">
            <!-- foto tumnail -->
            <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="img-username img-thumbnail" width="44px" height="44px">
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-footer btn btn-outline-secondary">Logout</a>
        </div>
      </li>
    </ul>
</nav>
<!--  -->
<div class="row">
  <div class="col-md-12">
    <div class="atas">
      <table style="width:100%; min-height:10vh;">
        <tr>
          <td valign="middle">
            <p class="tulisan-atas" style="width:50%;">Lengkapi profil Anda untuk menjadi <b>Verified Account</b></p>
          </td>
          <td valign="middle" align="center" class="garis-keras">
            <p class="aksi-atas"><i class="fa fa-lock"></i>   Akun</p>
          </td>
          <td valign="middle" align="center" class="garis-keras">
            <p class="aksi-atas"><i class="fa fa-address-book-o"></i>  Datadiri</p>
          </td>
          <td valign="middle" align="center" class="garis-keras">
            <p class="aksi-atas"><i class="fa fa-envelope-o"></i>  email</p>
          </td>
          <td valign="middle" align="center" style="width:10%;"></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<!--  -->
<div class="row">
  <div class="col-md-3 mr-20">
    <div class="kiri">
      <a href="#" style="text-align:center; margin-top:10px;" class="dropdown-item">
        <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="img-circle img-thumbnail" width="82px" height="82px">
      </a>
      <!-- <div class="sub-bio">
        ceka asd
      </div> -->
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        jasdhgfv
      </div>
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        jasdhgfv
      </div>
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        jasdhgfv
      </div>
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        jasdhgfv
      </div>
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        jasdhgfv
      </div>
      <div class="dropdown-divider"></div>
      <!-- tombol edit -->
      <a href="#" style="margin-right:15px;" class="btn btn-primary btn-sm float-right">Edit</a>
    </div>
  </div>
  <div class="col-md-9">
      <!--  -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="500">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- <img class="d-block w-100" src="..." alt="First slide"> -->
            <div class="kanan">
              <h1>baner1</h1>
            </div>
          </div>
          <div class="carousel-item">
            <!-- <img class="d-block w-100" src="..." alt="First slide"> -->
            <div class="kanan">
              <h1>baner2</h1>
            </div>
          </div>
      </div>
      <!--  -->
      <div class="isi">
        <div class="row d-flex justify-content-around">
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <!--  -->
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <!--  -->
          <div class="card" style="width: 18rem;">
            <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <!--  -->
        </div>
      </div>
  </div>
</div>
<!--  -->
<footer style="background-color:#ccc; width:100%;" class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<script src="<?= base_url() ?>asset_pelamar/dist/js/bootstrap.bundle.js"></script>
</body>
</html>