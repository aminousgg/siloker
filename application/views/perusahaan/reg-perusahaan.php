<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= APP_NAME ?> | </title>
	<link href="<?= base_url() ?>asset_pelamar/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/dist/css/navbar.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/_plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="box-reg">
  <div class="row">
    <div style="background-color:#3786bd;" class="col-md-6 rad-left">
      
    </div>
    <div class="col-md-6">
      <h1 class="h3 mb-3 mt-4 font-weight-normal text-center">
        <img class="mb-2" src="<?= base_url() ?>asset_pelamar/logo/siloker.png" height="45px" width="120px"> <br>
        Daftar Akun Perusahaan
      </h1>
      <form>
        <div class="row mb-2 p-samping">
          <div class="col">
            <label><b>Email Perusahaan</b></label>
            <input type="text" class="form-control" placeholder="Email">
          </div>
        </div>
        <div class="row mb-2 p-samping">
          <div class="col">
            <label><b>Nama Perusahaan</b></label>
            <input type="text" class="form-control" placeholder="First name">
          </div>
        </div>
        <div class="row mb-2 p-samping">
          <div class="col">
            <label><b>New Password</b></label>
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <div class="col">
            <label><b>Konfirmasi Password</b></label>
            <input type="password" class="form-control" placeholder="Confirm Password">
          </div>
        </div>
        <div class="row mb-4 mt-4 p-samping">
          <div class="col text-center">
            <button type="submit" class="btn btn-primary">Daftar</button>
          </div>
        </div>
      </form>
      
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<script src="<?= base_url() ?>asset_pelamar/dist/js/bootstrap.bundle.js"></script>
</body>
</html>