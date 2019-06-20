<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title><?= APP_NAME ?> | Kelengkapan data</title>
	  <link href="<?= base_url() ?>asset_pelamar/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/dist/css/navbar.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/_plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
</head>
<body>
<?php //var_dump($this->session->userdata('sesi')); ?>
<div class="sibox-bio">
  <div style="width:100%" class="text-center">
    <img class="mb-2" src="<?= base_url() ?>asset_pelamar/logo/siloker.png" height="45px" width="120px">
  </div>
  <h1 class="h3 mb-3 font-weight-normal d-flex justify-content-center">Lengkapi identitas Perusahaan</h1>
  <?php
     $email=$this->session->userdata('sesi')['username'];
     $nama=$this->session->userdata('sesi')['nama'];
  ?>
  <?= form_open() ?>
    <div class="row mb-2">
      <div class="col">
        <label><b>Email</b></label>
        <input type="text" class="form-control" value="<?= $email ?>" disabled>
        <input type="hidden" name="email" value="<?= $email ?>">
      </div>
      <div class="col">
        <label><b>Nama Perusahaan</b></label>
        <input type="text" name="nama_per" class="form-control" value="<?= $nama ?>">
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label><b>Alamat</b></label>
        <textarea name="alamat" rows="2" class="form-control"></textarea>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label><b>Provinsi</b></label>
        <input type="text" name="kota" class="form-control">
      </div>
      <div class="col">
        <label><b>Kota</b></label>
        <input type="text" name="kota" class="form-control">
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label><b>Foto Perusahaan</b></label>
        <input type="file" name="foto">
      </div>
      <div class="col">
        
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <button type="submit" class="btn btn-info float-right" name="masuk" value="1">Submit</button>
      </div>
    </div>
  <?= form_close() ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<script src="<?= base_url() ?>asset_pelamar/dist/js/bootstrap.bundle.js"></script>
</body>
</html>