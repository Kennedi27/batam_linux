<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li <?= $this->uri->segment(3) == 'index' || $this->uri->segment(3) == '' ? 'class="active"' : ''?>>
          <a href="<?php echo site_url('admin/a_beranda/index');?>">
            <i class="fa fa-home"></i> <span> Beranda</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <!-- Artikel Menu -->
        <li class="treeview  <?= $this->uri->segment(3) == 'artikel' || $this->uri->segment(3) == 'tambah_artikel' || $this->uri->segment(3) == 'a_kategori' ? 'active' : ''?>">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=  $this->uri->segment(3) == 'artikel' ? 'class="active"' : ''?>><a href="<?php echo site_url('admin/A_artikel/artikel')?>"><i class="fa fa-list"></i> List Artikel</a></li>
            <li <?=  $this->uri->segment(3) == 'tambah_artikel' ? 'class="active"' : '' ?>><a href="<?php echo site_url('admin/A_artikel/tambah_artikel');?>"><i class="fa fa-thumb-tack"></i> Tambah Artikel </a></li>
            <li <?=  $this->uri->segment(3) == 'a_kategori' ? 'class="active"' : '' ?>><a href="<?php echo site_url('admin/A_artikel/a_kategori');?>"><i class="fa fa-wrench"></i> Kategori</a></li>
          </ul>
        </li>

        <!-- Tutorial Menu -->
        <li class="treeview <?= $this->uri->segment(3) == 'tutorial' || $this->uri->segment(3) == 'tambah_tutorial' || $this->uri->segment(3) == 't_kategori' ? 'active' : ''?>">
          <a href="#">
            <i class="fa fa-star-o"></i>
            <span>Tutorial</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=  $this->uri->segment(3) == 'tutorial' ? 'class="active"' : ''?>><a href="<?php echo site_url('admin/A_tutorial/tutorial')?>"><i class="fa fa-list"></i> List Tutorial</a></li>
            <li <?= $this->uri->segment(3) == 'tambah_tutorial' ? 'class="active"' : ''?>><a href="<?php echo site_url('admin/A_tutorial/tambah_tutorial');?>"><i class="fa fa-thumb-tack"></i> Tambah Tutorial </a></li>
            <li <?= $this->uri->segment(3) == 't_kategori' ? 'class="active"' : ''?>><a href="<?php echo site_url('admin/A_tutorial/t_kategori');?>"><i class="fa fa-wrench"></i> Kategori</a></li>
          </ul>
        </li>

        <!-- E-book Menu -->
        <li class="treeview <?= $this->uri->segment(3) == 'ebook' || $this->uri->segment(3) == 'eb_kategori'  ? 'active' : ''?>">
          <a href="#">
            <i class="fa fa-book"></i> <span>E-book</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $this->uri->segment(3) == 'ebook' ? 'class = "active"' : '' ?>><a href="<?php echo site_url('admin/a_ebook/ebook') ?>"><i class="fa fa-list"></i> List E-book</li></a>
            <li <?= $this->uri->segment(3) == 'eb_kategori' ? 'class = "active"' : '' ?>><a href="<?php echo site_url('admin/a_ebook/eb_kategori') ?>"><i class="fa fa-wrench"></i> Kategori</li></a>
          </ul>
        </li>

        <!-- Anggota Menu -->
        <li <?= $this->uri->segment(3) == 'anggota' ? 'class="active"' : '' ?>>
          <a href="<?php echo site_url('admin/A_anggota/anggota');?>">
            <i class="fa fa-users"></i> <span>Anggota</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <!-- Kegiatan Menu -->
        <li class="treeview <?= $this->uri->segment(3) == 'kegiatan' ||  $this->uri->segment(3) == 'k_kategori' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Kegiatan</span>
            <span class="pull-right-container"><i class="fa fa-angle-left  pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= $this->uri->segment(3) == 'kegiatan' ? 'active' : '' ?>"><a href="<?php echo site_url('admin/a_kegiatan/kegiatan');?>"><span class="fa fa-list"></span> List Kegiatan</a></li>
            <li <?= $this->uri->segment(3) == 'k_kategori' ? 'class="active"' : ''?>><a href="<?php echo site_url('admin/a_kegiatan/k_kategori');?>"><i class="fa fa-wrench"></i> Kategori</a></li>
          </ul>
        </li>

        <!-- Rekap Keuangan BLUG -->
        <li class="treeview <?= $this->uri->segment(3) == 'kas_masuk'|| $this->uri->segment(3) == 'rekap_kas' || $this->uri->segment(3) == 'kas_keluaran' ? 'active' : '';?>">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Keuangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $this->uri->segment(3) == 'kas_masuk' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('admin/A_keuangan/kas_masuk'); ?>"><span class="fa fa-money"></span> Kas Masuk</a></li>
            <li <?= $this->uri->segment(3) == 'kas_keluaran' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('admin/A_keuangan/kas_keluaran'); ?>"><span class="fa fa-money"></span> Kas Keluaran</a></li>
            <li <?= $this->uri->segment(3) == 'rekap_kas' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('admin/A_keuangan/rekap_kas'); ?>"><span class="fa fa-money"></span> Rekapitulasi Kas</a></li>
          </ul>
        </li>

        <!-- Absensi Menu -->
        <li class="treeview <?= $this->uri->segment(3) == 'absen'|| $this->uri->segment(3) == 'data_absensi' ? 'active' : '';?>">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Absensi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $this->uri->segment(3) == 'absen' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('admin/A_absensi/absen'); ?>"><span class="fa fa-user"></span> Absen</a></li>
            <li <?= $this->uri->segment(3) == 'data_absensi' ? 'class="active"' : ''; ?>><a href="<?php echo site_url('admin/A_absensi/data_absensi'); ?>"><span class="fa fa-list"></span> Data Absensi</a></li>
          </ul>
        </li>

        <!-- Menu Slide Show -->
        <li <?= $this->uri->segment(3) == 'slideshow' || $this->uri->segment(3) == 'slideshow' ? 'class="active"' : ''?>>
          <a href="<?php echo site_url('admin/A_slideshow/slideshow');?>">
            <i class="fa fa-picture-o"></i> <span>Slide Show</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <!-- Pesan Menu -->
        <li <?= $this->uri->segment(3) == 'pesan' ? 'class="active"' : ''?>>
          <a href="<?php echo site_url('admin/A_pesan/pesan');?>">
            <i class="fa fa-envelope"></i> <span>Pesan</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">90</small>
            </span>
          </a>
        </li>

        <!-- Menu Forum Diskusi -->
        <li <?= $this->uri->segment(3) == 'diskusi' ? 'class="active"' : ''?>>
          <a href="<?php echo site_url('admin/A_diskusi/diskusi');?>">
            <i class="fa fa-comments"></i> <span>Forum</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">77</small>
            </span>
          </a>
        </li>

         <li>
          <a href="<?php echo site_url('admin/a_login/logout');?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>