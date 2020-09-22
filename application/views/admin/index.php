<?php
  error_reporting(0);

  $this->load->view('admin/tema_admin/header');

  $this->load->view('admin/tema_admin/navigasi');

  $this->load->view('admin/tema_admin/sidebar');

?>


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <!-- Bagian Isi -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
                <!-- Page Content -->
                <?php
                  $this->load->view($isi);
                ?>
            </div>
          </div>
      </section>
      <!-- Penutup Isi-->
    </div>
    <!-- content-wrapper -->
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Goo Open Source</b>
    </div>
    <strong>Copyright &copy; 2020 <a href="">Batam Linux</a>.</strong> All rights reserved.
  </footer>
  </div>
  <?php
        $this->load->view('admin/tema_admin/footer');
  ?>