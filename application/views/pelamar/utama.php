<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title><?= APP_NAME ?> | <?= $judul ?></title>
	  <link href="<?= base_url() ?>asset_pelamar/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/dist/css/navbar.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/_plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/toastr/build/toastr.min.css" />
</head>
<body>
<!-- nav bar -->
<?php $this->load->view('pelamar/komponen/header'); ?>
<!--  -->
<?php $this->load->view('pelamar/komponen/menu'); ?>
<!--  -->
<div class="row">
  <?php $this->load->view('pelamar/komponen/aside-profile'); ?>
  <div class="col-md-9">
      <!--  -->
      <?php $this->load->view('pelamar/komponen/banner'); ?>
      <!--  -->
      <?php $this->load->view($file); ?>
  </div>
</div>
<!-- batas  -->
<?php $this->load->view('pelamar/komponen/footer'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<script src="<?= base_url() ?>asset_pelamar/dist/js/bootstrap.bundle.js"></script>
<script src="<?= base_url() ?>asset/vendor/toastr/build/toastr.min.js"></script>
<script>
  <?php if($this->session->flashdata('success')){ ?>
    toastr.success('Success - <?= $this->session->flashdata('success') ?>.');
  <?php } ?>
  <?php if($this->session->flashdata('error')){ ?>
    toastr.error('<?= $this->session->flashdata('error') ?>.');
  <?php } ?>
</script>
</body>
</html>