<style>
.pointer{
  cursor : pointer;
}
</style>
<div class="row">
  <div class="col-md-12">
    <div class="atas">
      <table style="width:100%; min-height:10vh;">
        <tr>
          <td valign="middle">
            <p class="tulisan-atas" style="width:50%;">Lengkapi profil Anda untuk menjadi <b>Verified Account</b></p>
          </td>
          <td valign="middle" align="center" class="garis-keras">
            <p class="aksi-atas pointer" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-lock"></i>   Akun
            </p>
          </td>
          <td valign="middle" align="center" class="garis-keras">
            <p class="aksi-atas pointer" data-toggle="modal" data-target=".bd-example-modal-lg">
              <i class="fa fa-address-book-o"></i>  Datadiri
            </p>
          </td>
          <td valign="middle" align="center" class="garis-keras">
            <p class="aksi-atas pointer text-secondary">
              <i class="fa fa-envelope-o"></i>  Email <i class="fa fa-check-circle-o text-success"></i>
            </p>
          </td>
          <td valign="middle" align="center" style="width:10%;"></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<!-- Data diri -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datadiri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php //var_dump($table['id']); ?>
      <?= form_open_multipart('pelamar/edit_datadiri') ?>
        <input type="hidden" name="id" value="<?= $table['id'] ?>">
        <input type="hidden" name="foto" id="foto" value="0">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-md-4 text-center">
                <div class="kotakUp" id="gambar">
                  <?php if(!$table['foto']){ ?>
                    <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="img-thumbnail mt-3" width="160px" height="160px"><br>
                  <?php }else{ ?>
                    <img src="<?= base_url() ?>upload/foto_pelamar/<?= $table['foto'] ?>" class="img-thumbnail mt-3" width="160px" height="160px"><br>
                  <?php } ?>
                </div>
                <input style="display: none;" type="file" id="file" class="form-control" name="file">
                <button type="button" id="ubah_foto" onclick="u_fot()" class="btn btn-success btn-sm">Ubah</button>
              </div>
              <div class="col-md-8">
                <div class="row">
                  <div class="col">
                    <label><b>Nama Lengkap</b></label>
                    <input type="text" class="form-control" value="<?= $table['nama'] ?>" name="nama">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label><b>Tempat Lahir</b></label>
                    <input type="text" class="form-control" name="tmp_lahir" value="<?= $table['tempat_lahir'] ?>">
                  </div>
                  <div class="col">
                    <label><b>Tgl Lahir</b></label>
                    <input type="date" class="form-control" name="tgl_lahir" value="<?= $table['tgl_lahir'] ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label><b>Email</b></label>
                    <input type="text" class="form-control" name="email" value="<?= $table['email'] ?>" disabled>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label><b>Alamat</b></label>
                <textarea name="alamat"  rows="3" name="alamat" class="form-control"><?= $table['alamat'] ?></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<!-- Akun -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengaturan Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-4">
            <div class="col">
              <label><b>Email</b></label>
              <input type="text" class="form-control" value="<?= $table['email'] ?>" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label><b>Ubah Password</b></label>
              <input type="password" class="form-control" placeholder="Password Lama">
            </div>
            <div class="col">
              <label><b>Password baru</b></label>
              <input type="password" class="form-control" placeholder="Password Baru">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm">Ubah</button>
      </div>
    </div>
  </div>
</div>