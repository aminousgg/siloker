<nav class="navbar navbar-expand navbar-light bg-light shadow">
    <ul style="margin-left:30px; " class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="#" class="nav-link hitam"><?= APP_NAME ?></a> -->
        <img src="<?= base_url() ?>asset_pelamar/logo/siloker.png" height="40px" width="120px">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
      <li style="margin-left:40px;" class="nav-item d-none d-sm-inline-block">
        <div style="margin-top:5px;" class="input-group input-group-sm mb-2 mr-sm-2">
          <input type="text" class="form-control" placeholder="Cari">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-search"></i></div>
          </div>
        </div>
      </li>
      <li class="nav-item d-none d-sm-inline-block ml-2">
        <div style="margin-top:5px;" class="input-group input-group-sm mb-3">
          <select name="kate" class="form-control">
            <option value="">--Cari Berdasarkan--</option>
            <option value="1">Perusahaan</option>
            <option value="2">Minimal Pendidikan</option>
          </select>
        </div>
      </li>
    </ul>
    <!-- right -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="img-username img-thumbnail" width="44px" height="44px">
          ini username
        </a>
        <div style="text-align:center" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"></span>
          <div class="dropdown-divider"></div>
          <a href="#" style="text-align:center" class="dropdown-item">
            <!-- foto tumnail -->
            <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="img-username img-thumbnail" width="44px" height="44px">
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url() ?>pelamar/logout" class="dropdown-footer btn btn-outline-secondary">Logout</a>
        </div>
      </li>
    </ul>
</nav>