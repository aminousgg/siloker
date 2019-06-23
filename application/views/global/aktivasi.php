<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= APP_NAME ?> | <?= $judul ?></title>
	  <link href="<?= base_url() ?>asset_pelamar/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/dist/css/navbar.css" rel="stylesheet">
    <link href="<?= base_url() ?>swal/sweetalert2.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset_pelamar/_plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
                  }).then((result) => {
                    if (result.value) {
                        window.location.href = "'.base_url().'auth/login'.$this->session->flashdata('link').'";
                    }
                  });
            </script>';
  endif;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<script src="<?= base_url() ?>asset_pelamar/dist/js/bootstrap.bundle.js"></script>
</body>
</html>