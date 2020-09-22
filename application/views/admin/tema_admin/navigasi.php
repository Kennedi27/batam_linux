<header class="main-header">
    <a href="<?php site_url(); ?>" class="logo">
      <img class="logo-mini" height="50px" src="<?php echo base_url('template/images/logo.png');?>" alt="User Image">
      <span class="logo-lg"><?= ucfirst($this->cetak_sess->user_masuk()->divisi); ?> BLUG</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Anda memiliki 6 pesan</li>
              <li>
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="<?php echo base_url('admin/inbox');?>">
                      <div class="pull-left">
                        <img src="<?php echo base_url('template/images/logo.png');?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <small><i class="fa fa-clock-o"></i> 14 January 2020</small>
                      </h4>
                      <p>23</p>
                    </a>
                  </li>

                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url().'admin/inbox'?>">Lihat Semua Pesan</a></li>
            </ul>
          </li>

          <!-- Dropdown User -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/images/anggota/'.$this->cetak_sess->user_masuk()->photo);?>" class="user-image" alt="">
              <span class="hidden-xs"><?= ucfirst($this->cetak_sess->user_masuk()->username); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/anggota/'.$this->cetak_sess->user_masuk()->photo);?>" class="img-circle" alt="">
                <p>
                    <small><?= ucfirst($this->cetak_sess->user_masuk()->posisi); ?></small>
                    <small><?= ucfirst($this->cetak_sess->user_masuk()->divisi); ?></small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url('admin/a_login/logout');?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo base_url('/')?>" target="_blank" title="Lihat Website"><i class="fa fa-globe"></i></a>
          </li>
        </ul>
      </div>

    </nav>
</header>
