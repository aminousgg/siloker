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
  <h1 class="h3 mb-3 font-weight-normal d-flex justify-content-center">Lengkapi Biodata</h1>
  <?php
     $email=$this->session->userdata('sesi')['username'];
     $nama=$this->session->userdata('sesi')['nama'];
  ?>
  <?= form_open_multipart() ?>
    <div class="row mb-2">
      <div class="col">
        <label><b>Email</b></label>
        <input type="text" class="form-control" value="<?= $email ?>" disabled>
        <input type="hidden" name="email" value="<?= $email ?>">
      </div>
      <div class="col">
        <label><b>Nama Lengkap</b></label>
        <input type="text" name="nama" class="form-control" value="<?= $nama ?>">
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
        <label><b>Tempat Lahir</b></label>
        <input type="text" class="form-control" name="tmp_lahir">
      </div>
      <div class="col">
        <label><b>Tanggal Lahir</b></label>
        <input type="date" name="tgl_lahir" class="form-control">
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label><b>Pendidikan Terakhir</b></label>
        <input type="text" name="pend" class="form-control">
      </div>
      <div class="col">
        <label><b>Tahun Lulus</b></label>
        <input type="text" name="thn_lulus" class="form-control">
      </div>
      <div class="col">
        <label><b>Status</b></label>
        <select name="status" class="form-control">
          <option value="">--Status--</option>
          <option value="0">Belum Menikah</option>
          <option value="1">Menikah</option>
        </select>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label><b>Foto</b></label>
        <input type="file" name="file" id="file">
        <div class="kotakUp" id="gambar"></div>
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
<script>
  function filePreview(input) {
		if(input.files&&input.files[0]){
			var tipefile=/.\.(gif|jpg|png|jpeg)$/i;
			var namafile=input.files[0]['name'];
			var ukuran=input.files[0]['size'];
			if (!tipefile.test(namafile))
				$("#pesaneror").html('Only images are allowed!');
			else if (ukuran > 500000)
                $("#pesaneror").html('Your file is too big! Max allowed size is: 500KB');
            else{
            	var reader = new FileReader();
				reader.onload=function(e){
					$('#uploadForm + img').remove();
					$('#gambar').html('<img src="'+e.target.result+'" width="150px" height="150px" />')
				}
				reader.readAsDataURL(input.files[0]);
            }
		}
	}
	$('#file').change(function(){
		filePreview(this);
	});
</script>
</body>
</html>