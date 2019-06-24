     <div class="isi">
        <?php if(count($post)>2){ ?>
          <div class="row d-flex justify-content-around">
        <?php }else{ ?>
          <div class="row ml-2">
        <?php } ?>
          <?php foreach($post as $row){ ?>
            <div class="card" style="width: 18rem;">
              <?php if(!$row->foto_profile){ ?>
                <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="card-img-top">
              <?php }else{ ?>
                <img src="<?= base_url() ?>upload/foto_pelamar/<?= $row->foto_profile ?>" class="card-img-top">
              <?php } ?>
              <div class="card-body">
                <h5 class="card-title"><?= $row->nama_perusahaan ?></h5>
                <p class="card-text"><?= $row->isi_post ?></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_<?= $row->id ?>">
                  Daftar
                </button>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
<!-- <button type="button" class="btn btn-primary" >Large modal</button> -->
<?php foreach($post as $post){ ?>
  <div id="modal_<?= $post->id ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <?php if(!$row->foto_profile){ ?>
                  <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" width="180px" height="180px">
                <?php }else{ ?>
                  <img src="<?= base_url() ?>upload/foto_pelamar/<?= $post->foto_profile ?>" width="180px" height="180px">
                <?php } ?>
              </div>
              <div class="col-md-8">
                <table class="table table table-striped table-bordered">
                  <tr>
                    <td><b>Nama Perusahaan</b></td>
                    <td><?= $post->nama_perusahaan ?></td>
                  </tr>
                  <tr>
                    <td><b>Alamat</b></td>
                    <td><?= $post->alamat ?></td>
                  </tr>
                  <tr>
                    <td><b>Kota</b></td>
                    <td><?= $post->kota ?></td>
                  </tr>
                  <tr>
                    <td><b>Posisi Yg dibutuhkan</b></td>
                    <td><?= $post->jabatan ?></td>
                  </tr>
                  <tr>
                    <td><b>Estimasi Gaji</b></td>
                    <td><?= $post->gaji ?></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><?= $post->isi_post ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <?= form_open('pelamar/melamar') ?>
          <input type="hidden" name="email_peru" value="<?= $post->email ?>">
          <button type="submit" class="btn btn-primary">Daftar</button>
          <?= form_close() ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>