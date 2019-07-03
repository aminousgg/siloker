<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Page title -->
    <title><?= APP_NAME ?> | <?= $judul ?></title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->
    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/bootstrap/dist/css/bootstrap.css" />
    <!-- App styles -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/styles/style.css">
    <link href="<?= base_url() ?>swal/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/toastr/build/toastr.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>asset/vendor/datatables_plugins/integration/bootstrap/3/dataTables.bootstrap.css" />
</head>
<body>
<!-- Simple splash screen-->
<?php $this->load->view('perusahaan/komponen/loading'); ?>
<!--[if lt IE 7]>
<![endif]-->

<!-- Header -->
<?php $this->load->view('perusahaan/komponen/header'); ?>

<!-- Navigation -->
<?php $this->load->view('perusahaan/komponen/menu'); ?>

<!-- Main Wrapper -->
<div id="wrapper">
  <!-- pannel -->
  <?php $this->load->view('perusahaan/komponen/panel'); ?>
  <!--  -->
  <div class="content animate-panel">
    <?php $this->load->view($file); ?>
  </div>
  <!--  -->
  <?php $this->load->view('perusahaan/komponen/footer'); ?>

</div>

<!-- Vendor scripts -->
<script src="<?= base_url() ?>asset/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/iCheck/icheck.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/peity/jquery.peity.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="<?= base_url() ?>asset/scripts/homer.js"></script>
<script src="<?= base_url() ?>asset/scripts/charts.js"></script>
<script src="<?= base_url() ?>asset/vendor/toastr/build/toastr.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>asset/vendor/datatables_plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script>
    $('#example2').dataTable({
      "ordering": false
    });

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
            $('#gambar').html('<img src="'+e.target.result+'" width="92px" height="92px" />')
          }
          reader.readAsDataURL(input.files[0]);
              }
      }
    }
    $('#file').change(function(){
      filePreview(this);
    });

</script>
<script>
  $(document).ready(function(){
    $(".ubah_foto").click(function(){
      $("#file").show();
      $(".ubah_foto").hide();
      $(".update").show();
    });
  });
  function edit_post(){
      $("#jab").removeAttr("disabled");
      $("#gaji").removeAttr("disabled");
      $("#isi").removeAttr("disabled");
      $("#edit").html('<i class="fa fa-paste"></i> simpan');
      $("#edit").removeAttr("onclick");
      $("#edit").attr("onclick","simpan()");
  }

  function simpan(){
    var id=$("#id_post").val();
    var jab = $("#jab").val();
    var gaji = $("#gaji").val();
    var isi = $("#isi").val();
    var datas = new FormData();
    datas.append("jabatan", jab);
    datas.append("gaji", gaji);
    datas.append("isi", isi);
    datas.append("id", id);
    // console.log(jab);
    $.ajax({
       type: "POST",
       url: "<?= base_url() ?>perusahaan/edit_post",
       data: datas,
       processData: false,
       contentType: false,
       success: function(data) {
        var json = data,
        obj = JSON.parse(json);
        if(obj.cek){
            toastr.success('Success - Postingan berhasil disimpan.');
        }else{
            toastr.error('Error - Postingan gagal disimpan');
        }
       },
       error: function(data) {

       }
    });
    $("#jab").attr("disabled","");
    $("#gaji").attr("disabled","");
    $("#isi").attr("disabled","");
    $(".btn-info").html('<i class="fa fa-paste"></i> Edit');
    $("#edit").removeAttr("onclick");
    $("#edit").attr("onclick","edit_post()");
  }
  function unpost(){
    var id=$("#id_post").val();
    var datas = new FormData();
    datas.append("id", id);
    $.ajax({
       type: "POST",
       url: "<?= base_url() ?>perusahaan/set_status_pos/unpost",
       data: datas,
       processData: false,
       contentType: false,
       success: function(data) {
        var json = data,
        obj = JSON.parse(json);
        if(obj.cek){
            toastr.success('Success - Postingan berhasil di nonaktifkan.');
        }else{
            toastr.error('Error - Postingan gagal disimpan');
        }
       },
       error: function(data) {

       }
    });
    $("#sts").removeAttr("class");
    $("#sts").attr('class','btn btn-danger btn-circle');
    $("#sts").html('<i class="fa fa-times"></i>');
    $("#pos").removeAttr("class");
    $("#pos").attr('class','btn btn-success btn-sm pull-right');
    $("#pos").html("Post");
    $("#pos").removeAttr("onclick");
    $("#pos").attr("onclick","post()");
  }
  function post(){
    var id=$("#id_post").val();
    var datas = new FormData();
    datas.append("id", id);
    $.ajax({
       type: "POST",
       url: "<?= base_url() ?>perusahaan/set_status_pos/post",
       data: datas,
       processData: false,
       contentType: false,
       success: function(data) {
        var json = data,
        obj = JSON.parse(json);
        if(obj.cek){
            toastr.success('Success - Postingan berhasil diaktifkan.');
        }else{
            toastr.error('Error - Postingan gagal disimpan');
        }
       },
       error: function(data) {

       }
    });
    $("#sts").removeAttr("class");
    $("#sts").attr('class','btn btn-success btn-circle');
    $("#sts").html('<i class="fa fa-check"></i>');
    $("#pos").removeAttr("class");
    $("#pos").attr('class','btn btn-primary btn-sm pull-right');
    $("#pos").html("Unpost");
    $("#pos").removeAttr("onclick");
    $("#pos").attr("onclick","unpost()");
  }

  $(document).ready(function(){
    $(".edit_pro").click(function(){
      $("#nama_per").removeAttr('disabled');
      $("#alamat").removeAttr('disabled');
      $("#email").removeAttr('disabled');
      $(".edit_pro").hide();
      $(".ubah").show();
    });

    $(".ubah").click(function(){
      var datas = new FormData();
      datas.append("id", $("#id_post").val() );
      datas.append("nama", $("#nama_per").val() );
      datas.append("email", $("#email").val() );
      datas.append("alamat", $("#alamat").val() );
      $.ajax({
       type: "POST",
       url: "<?= base_url() ?>perusahaan/profile",
       data: datas,
       processData: false,
       contentType: false,
       success: function(data) {
        var json = data,
        obj = JSON.parse(json);
        console.log(obj);
        if(obj.cek){
            $("#nama_per").val(obj.nama_perusahaan);
            $("#email").val(obj.email);
            $("#alamat").val(obj.alamat);
            // 
            $("#nama_per").prop('disabled', true);
            $("#alamat").prop('disabled', true);
            $("#email").prop('disabled', true);
            // 
            $(".edit_pro").show();
            $(".ubah").hide();
            toastr.success('Success - Berhasil disimpan.');
        }else{
            toastr.error('Error - Gagal menyimpan');
        }
       },
       error: function(data) {
        console.log("ksadfkb");
       }
      });
    });

  });
</script>

</body>
</html>