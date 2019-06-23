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
                Posting Perusahaan
            </div>
            <div class="panel-body">
            <table id="example2" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>TTL</th>
                  <th>Pendidikan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($table as $row){ ?>
                  <tr>
                    <td><?= $row->foto ?></td>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->email ?></td>
                    <td><?= $row->tempat_lahir ?>, <?= $row->tgl_lahir ?></td>
                    <td><?= $row->pendidikan ?> (<?= $row->tahun_lulus ?>)</td>
                    <?php $this->session ?>
                    <td><a href="<?= base_url() ?>perusahaan/hubungi/<?= $row->email ?>/<?= $perusahaan['nama_perusahaan'] ?>" class="btn btn-primary2 btn-sm">
                      Hubungi
                    </a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            </div>
            <div class="panel-footer text-right">
                
            </div>
        </div>
      </form>
    </div>
  </div>