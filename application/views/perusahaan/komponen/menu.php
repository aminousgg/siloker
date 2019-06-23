<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.html">
                <?php
                $mail=$this->session->userdata('sesi')['username'];
                $this->db->select('foto_profile');
                $foto=$this->db->get_where('perusahaan',array('email'=>$mail))->row_array()['foto_profile']; ?>
                <?php if($foto==null){ ?>
                  <img src="<?= base_url() ?>asset_pelamar/logo/warna.jpg" class="m-b" width="82px" height="82px">
                <?php }else{ ?>
                    <img src="<?= base_url() ?>upload/foto_perusahaan/<?= $foto ?>" class="m-b" alt="logo" width="82px" height="82px">
                <?php } ?>
            </a>

            <div class="stats-label text-color">
                <?php
                $nama=$this->db->get_where('perusahaan',array('email'=>$this->session->userdata('sesi')['username']) )->row_array()['nama_perusahaan'];
                ?>
                <span class="font-extra-bold font-uppercase"><?= $nama ?></span>
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li>
                <a href="<?= base_url() ?>perusahaan"> <span class="nav-label">Dashboard</span> </a>
            </li>
            <li>
                <a href="<?= base_url() ?>perusahaan/daftar_pelamar"> <span class="nav-label">Daftar Pelamar</span> </a>
            </li>
            <li>
              <a href="#"><span class="nav-label">Pengaturan</span><span class="fa arrow"></span> </a>
              <ul class="nav nav-second-level">
                  <li><a href="panels.html">Profile</a></li>
              </ul>
            </li>
            <li>
                <a href="<?= base_url() ?>perusahaan/post_lowongan"> <span class="nav-label">Post Lowongan</span></a>
            </li>
        </ul>
    </div>
</aside>