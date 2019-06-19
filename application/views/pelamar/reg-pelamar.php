<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= APP_NAME ?> | Registrasi Pelamar</title>
	  <link href="<?= base_url() ?>asset_pelamar/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/dist/css/navbar.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/_plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>swal/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
<?php 
  if($this->session->flashdata('error')):
      $link="<script src='".base_url()."swal/sweetalert2.all.min.js'></script>";
      echo $link;
      echo '<script>
              swal({
                  type: "'.'error'.'",
                  title: "'.$this->session->flashdata('error').'",
                  text: "'.'Gagal menambahkan ke database'.'",
                  timer: 10000,
                  customClass: "'.'animated bounceIn'.'",
                  })
            </script>';
  endif;
  if($this->session->flashdata('success')):
      $link="<script src='".base_url()."swal/sweetalert2.all.min.js'></script>";
      echo $link;
      echo '<script>
              swal({
                  type: "'.'success'.'",
                  title: "'.'Berhasil'.'",
                  text: "'.$this->session->flashdata('success').'",
                  customClass: "'.'animated bounceIn'.'",
                  })
            </script>';
  endif;
?>

<div class="box-reg">
  <div class="row">
    <div style="background-color:#3786bd;" class="col-md-6 rad-left">
      
    </div>
    <div class="col-md-6">
      <h1 class="h3 mb-3 mt-4 font-weight-normal text-center">
        <img class="mb-2" src="<?= base_url() ?>asset_pelamar/logo/siloker.png" height="45px" width="120px"> <br>
        Daftar Sebagai Pelamar
      </h1>
      <?= form_open() ?>
        <div class="row mb-2 p-samping">
          <div class="col">
            <label><b>Email</b></label>
            <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
        </div>
        <div class="row mb-2 p-samping">
          <div class="col">
            <label><b>Nama Depan</b></label>
            <input type="text" name="nama1" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <label><b>Nama Belakang</b></label>
            <input type="text" name="nama2" class="form-control" placeholder="Last name">
          </div>
        </div>
        <div class="row mb-2 p-samping">
          <div class="col">
            <label><b>New Password</b></label>
            <input type="password" name="pass" class="form-control" placeholder="Password">
          </div>
          <div class="col">
            <label><b>Konfirmasi Password</b></label>
            <input type="password" name="conf_pass" class="form-control" placeholder="Confirm Password">
          </div>
        </div>
        <div class="row mb-4 mt-4 p-samping">
          <div class="col text-center">
            <button type="submit" value="1" name="daftar" class="btn btn-primary">Daftar</button>
          </div>
        </div>
      <?= form_close() ?>
      
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<script src="<?= base_url() ?>asset_pelamar/dist/js/bootstrap.bundle.js"></script>
</body>
</html>