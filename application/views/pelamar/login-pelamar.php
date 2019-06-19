<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title><?= APP_NAME ?> | Login Pelamar</title>
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
<body class="text-center">
<?php //var_dump($this->session->userdata('sesi')); ?>
<div class="sibox">
  <?= form_open() ?>
    <!--  -->
    <img class="mb-4" src="<?= base_url() ?>asset_pelamar/logo/siloker.png" height="45px" width="120px">
    <h1 class="h3 mb-3 font-weight-normal">Sign in Pelamar</h1>
    <!--  -->
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <!--  -->
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="pass" id="inputPassword" class="form-control mt-2" placeholder="Password" required>
    <!--  -->
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" value="1" name="login" type="submit">Sign in</button>
    <p class="text-danger mt-0 mb-0 err"></p>
    <p class="mt-2 mb-3 text-muted">&copy; 2019</p>
  <?= form_close() ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<script src="<?= base_url() ?>asset_pelamar/dist/js/bootstrap.bundle.js"></script>
<?php if($this->session->flashdata('pesan_login')){ ?>
  <script>
    $(document).ready(function(){
      $(".err").html('<?= $this->session->flashdata('pesan_login') ?>');
    });
  </script>
<?php } ?>
</body>
</html>