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
                    <td><button class="btn btn-primary2 btn-sm">Hubungi</button></td>
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