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
<?php
    $email=$this->session->userdata('sesi')['username'];
    $post=$this->db->get_where('posting',array('email'=>$email));
?>
<?php if($post->num_rows()>0){ $post=$post->row_array(); ?>
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
              <div class="row">
                <!-- kiri -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-9">
                      <input type="hidden" name="id" id="id_post" value="<?= $post['id'] ?>">
                      <input type="text" id="jab" name="jabatan" value="<?= $post['jabatan'] ?>" disabled placeholder="Jabatan yg akan di promosikan" class="form-control m-b">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Gaji</label>
                    <div class="col-sm-9">
                      <input type="text" id="gaji" name="gaji" value="<?= $post['gaji'] ?>" disabled placeholder="Gaji (Rupiah)" class="form-control m-b">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Isi Promosi</label>
                    <div class="col-sm-9">
                      <textarea rows="5" id="isi" name="isi_post" disabled class="form-control"  placeholder="Isi Postingan Tentang perusahaan anda"><?= $post['isi_post'] ?></textarea>
                    </div>
                  </div>
                </div>
                <!--  -->
                <!-- kanan -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label>Foto</label>
                      <input type="file" class="form-control m-b">
                    </div>
                  </div>
                </div>
                <!--  -->
              </div>
              <div class="row m-t">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Status Post</label>
                    <div class="col-sm-9">
                      <?php if($post['status_post']){ ?> 
                        <button id="sts" class="btn btn-success btn-circle" type="button"><i class="fa fa-check"></i></button>
                        <button id="pos" onclick="unpost()" type="button" class="btn btn-primary btn-sm pull-right">Unpost</button>
                      <?php }else{ ?>
                        <button id="sts" class="btn btn-danger btn-circle" type="button"><i class="fa fa-times"></i></button>
                        <button id="pos" onclick="post()" type="button" class="btn btn-success btn-sm pull-right">Post</button>
                      <?php } ?>
                      
                      <button id="edit" onclick="edit_post()" class="btn btn-info btn-sm pull-right m-r" type="button"><i class="fa fa-paste"></i> Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer text-right">
                
            </div>
        </div>
      </form>
    </div>
  </div>
<!-- ===========================================new============================== -->
<?php }else{ ?>
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
              <div class="row">
                <!-- kiri -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jabatan</label>
                    <div class="col-sm-9">
                      <input type="text" name="jabatan" placeholder="Jabatan yg akan di promosikan" class="form-control m-b">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Gaji</label>
                    <div class="col-sm-9">
                      <input type="text" name="gaji" placeholder="Gaji (Rupiah)" class="form-control m-b">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Isi Promosi</label>
                    <div class="col-sm-9">
                      <textarea rows="5" name="isi_post" class="form-control"  placeholder="Isi Postingan Tentang perusahaan anda"></textarea>
                    </div>
                  </div>
                </div>
                <!--  -->
                <!-- kanan -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="col-sm-12">
                      <label>Foto</label>
                      <input type="file" class="form-control m-b">
                    </div>
                  </div>
                </div>
                <!--  -->
              </div>
            </div>
            <div class="panel-footer text-right">
                <button type="submit" class="btn btn-success" name="post" value="1">Post</button>
            </div>
        </div>
      </form>
    </div>
  </div>
<?php } ?>

