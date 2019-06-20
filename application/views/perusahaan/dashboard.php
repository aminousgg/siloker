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
  <!-- kotak 1 -->
  <div class="col-lg-3">
    <div class="hpanel">
      <div class="panel-body text-center h-200">
          <i class="pe-7s-graph1 fa-4x"></i>
          <h1 class="m-xs">$1 206,90</h1>
          <h3 class="font-extra-bold no-margins text-success">
              All Income
          </h3>
          <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
      </div>
      <div class="panel-footer">
        This is standard panel footer
      </div>
    </div>
  </div>
  <!--  -->
  <!-- kotak 2 -->
  <div class="col-lg-3">
    <div class="hpanel">
      <div class="panel-body text-center h-200">
          <i class="pe-7s-graph1 fa-4x"></i>
          <h1 class="m-xs">$1 206,90</h1>
          <h3 class="font-extra-bold no-margins text-success">
              All Income
          </h3>
          <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
      </div>
      <div class="panel-footer">
        This is standard panel footer
      </div>
    </div>
  </div>
  <!--  -->
  <!-- kotak 3 -->
  <div class="col-lg-3">
    <div class="hpanel">
      <div class="panel-body text-center h-200">
          <i class="pe-7s-graph1 fa-4x"></i>
          <h1 class="m-xs">$1 206,90</h1>
          <h3 class="font-extra-bold no-margins text-success">
              All Income
          </h3>
          <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
      </div>
      <div class="panel-footer">
        This is standard panel footer
      </div>
    </div>
  </div>
  <!--  -->
  <!-- kotak 4 -->
  <div class="col-lg-3">
    <div class="hpanel">
      <div class="panel-body text-center h-200">
          <i class="pe-7s-graph1 fa-4x"></i>
          <h1 class="m-xs">$1 206,90</h1>
          <h3 class="font-extra-bold no-margins text-success">
              All Income
          </h3>
          <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
      </div>
      <div class="panel-footer">
        This is standard panel footer
      </div>
    </div>
  </div>
</div>