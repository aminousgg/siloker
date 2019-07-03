<?php
  $email=$this->session->userdata('sesi')['username'];
  $perusahaan=$this->db->get_where('perusahaan',array('email'=>$email))->row_array();
?>

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
<div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="hpanel">
            <div class="panel-heading hbuilt">
                <div class="pull-right">
                    
                </div>
                Manage Profile
            </div>
            <div class="panel-body">
              <div class="row">
                <!-- kiri -->
                <div class="col-sm-8">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Perusahaan</label>
                    <div class="col-sm-9">
                      <input type="hidden" name="id" value="<?= $table['id'] ?>" id="id_post">
                      <input type="text" id="nama_per" name="nama" value="<?= $table['nama_perusahaan'] ?>" disabled class="form-control m-b">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" id="email" name="email" value="<?= $table['email'] ?>" class="form-control m-b" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-9">
                      <textarea rows="5" id="alamat" name="alamat" disabled class="form-control"><?= $table['alamat'] ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12 tombol">
                      <button style="display : none;" type='button' class='btn btn-success pull-right m-t ubah'>Simpan</button>
                      <button type="button" class="btn btn-info pull-right m-t edit_pro">Edit</button>
                    </div>
                  </div>
                </div>
                <!--  -->
                <!-- kanan -->
                <div class="col-sm-4">
                  ini post foto
                </div>
                <!--  -->
              </div>
            </div>
            <div class="panel-footer text-right">
                
            </div>
        </div>
      </form>
    </div>
  </div>