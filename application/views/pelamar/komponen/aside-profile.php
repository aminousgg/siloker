  <div class="col-md-3 mr-20">
    <div class="kiri">
      <a href="#" style="text-align:center; margin-top:10px;" class="dropdown-item">
        <?php if($table['foto']==null){ ?>
          <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="img-circle img-thumbnail" width="82px" height="82px">
        <?php }else{ ?>
          <img src="<?= base_url() ?>upload/foto_pelamar/<?= $table['foto'] ?>" class="img-circle img-thumbnail" width="82px" height="82px">
        <?php } ?>
      </a>
      <!-- <div class="sub-bio">
        ceka asd
      </div> -->
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        <?= $table['nama'] ?>
      </div>
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        <?= $table['tempat_lahir'] ?>, <?= $table['tgl_lahir'] ?>
      </div>
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        <?= $table['pendidikan'] ?> (<?= $table['tahun_lulus'] ?>)
      </div>
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        <?= $table['email'] ?>
      </div>
      <div class="dropdown-divider"></div>
      <div class="sub-bio">
        <?= $table['alamat'] ?>
      </div>
      <div class="dropdown-divider"></div>
      <!-- tombol edit -->
      <a href="#" style="margin-right:15px;" class="btn btn-primary btn-sm float-right">Edit</a>
    </div>
  </div>