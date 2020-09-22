<!-- Breadcrumb -->
	<section class="content-header">
		<h1>
			Beranda
			<small></small>
		</h1>
		<ol class="breadcrumb">
	  		<li><a href="#"><i class="fa fa-dashboard"></i>Administrator</a></li>
	  		<li class="active"><?php echo ucfirst($this->uri->segment(3));?></li>
		</ol>
	</section>

<!-- End Breadscrumb -->

 <section class="content">
      <!-- Box Info Penginjung -->
      <div class="row">
      	<!-- Pengunjung dengan menggunakan Chrome -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-chrome"></i></span>
            <div class="info-box-content">
            	<?php
            		$query = $this->db->query("SELECT * FROM pengunjung where perangkat = 'chrome'");
            		$jml = $query->num_rows();
            	?>
              <span class="info-box-text">Chrome</span>
              <span class="info-box-number"><?php echo number_format($jml); ?></span>
            </div>
          </div>
        </div>
        
        <!-- Pengunjung dengan menggunakan Firefox -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-firefox"></i></span>
            <div class="info-box-content">
            	<?php
            		$query = $this->db->query("SELECT * FROM pengunjung where perangkat = 'chrome'");
            		$jml = $query->num_rows();
            	?>
              <span class="info-box-text">Mozilla Firefox</span>
              <span class="info-box-number">232</span>
            </div>
          </div>
        </div>

        
        <!-- <div class="clearfix visible-sm-block"></div> -->
        <!-- Pengunjung dengan Safari -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-safari"></i></span>
            
            <div class="info-box-content">
              <span class="info-box-text">Safari</span>
              <span class="info-box-number">3434</span>
            </div>
          </div>
        </div>
        
        <!-- Pengunjung Dengan Menggunakan Opera -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-opera"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Opera</span>
              <span class="info-box-number">121</span>
            </div>
          </div>
        </div>
      </div>
      <!-- /info box Pengunjung -->

      <!-- Grafik data pengunjung setiap bulannya -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
          	<div class="box-header with-border">
              <h3 class="box-title">Pengunjung bulan ini</h3>
           </div>
 
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">

                  <div class="col-md-12">
                          <canvas id="canvas" width="1000" height="280"></canvas>
                  </div>
  	            </div>
              </div>
            </div>
          </div>
          </div>
      </div>
      <!-- /Untuk Baris Grafik -->

      <!-- Bagian Postingan Populer -->
      	<div class="row">
        <!-- Layout agar berada di sebelah kiri -->
	        <div class="col-md-8">
	          <div class="box box-success">
	            <div class="box-header with-border">
	              <h3 class="box-title">Postingan Populer</h3>
	              <table class="table">
	                  <tr>
	                    <th>Judul</th>
	                    <th>Pembaca</th>
	                  </tr>
	                  <tr>
	                    <td>hjjkj</td>
	                    <td>hj</td>
	                  </tr>
	              </table>
	            </div>
	          </div>


          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pengeluaran BLUG</h3>
              <table class="table">
                  <tr>
                    <th>Hal</th>
                    <th>Tanggal</th>
                    <th>Jumlah Pengeluaran</th>
                  </tr>
                  <?php foreach ($tampi_uang4 as $ack_terakhir => $row) { ?>
                  <tr>
                    <td><?= ucfirst($row->keterangan); ?></td>
                    <td><?= $row->tanggal; ?></td>
                    <td>Rp. <?= number_format($row->jumlah); ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        <!-- Penutup Bagian pengeluaran blug -->
      		

	    </div>
        <!-- Penutup row -->


        	<div class="col-md-4">
	          <!-- Box Pengunjung dengan Browser lain -->
	          <div class="info-box bg-green">
	            <span class="info-box-icon"><i class="fa fa-globe"></i></span>
	            <div class="info-box-content">
	              <span class="info-box-text">Lainnya</span>
	              <span class="info-box-number">77</span>
	              <div class="progress">
	                <div class="progress-bar" style="width: 100%"></div>
	              </div>
	                  <span class="progress-description">
	                    Pengunjung
	                  </span>
	            </div>
	          </div>


	          <!--  Box Pengunjung Bulan Lalu -->
	          <div class="info-box bg-red">
	            <span class="info-box-icon"><i class="fa fa-users"></i></span>
	            <div class="info-box-content">
	              <span class="info-box-text">Pengunjung Bulan Lalu</span>
	              <span class="info-box-number">89</span>
	              <div class="progress">
	                <div class="progress-bar" style="width: 100%"></div>
	              </div>
	                  <span class="progress-description">
	                    Pengunjung
	                  </span>
	            </div>
	          </div>


	          <!-- Pengunjung Bulan Ini -->
	          <div class="info-box bg-aqua">
	            <span class="info-box-icon"><i class="fa fa-users"></i></span>
	            <div class="info-box-content">
	              <span class="info-box-text">Pengunjung Bulan Ini</span>
	              <span class="info-box-number">90</span>

	              <div class="progress">
	                <div class="progress-bar" style="width: 100%"></div>
	              </div>
	                  <span class="progress-description">
	                    Pengunjung
	                  </span>
	            </div>
	          </div>

            <!-- Pengeluaran Uang Kas BLUG -->
            <div class="info-box bg-red">
              <span class="info-box-icon"><i class="fa fa-money"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Pengeluaran Bulan <?php echo date('M'); ?></span>
              <?php foreach ($tampi_uang2 as $pengeluaran => $row) { ?>
                  <span class="info-box-number"><?= "Rp.".number_format($row->pengeluaran_bulan_ini, 2); ?></span>
              <?php } ?>
              </div>
            </div>

	          <!-- Pemasukan Uang Kas BLUG -->
	          <div class="info-box bg-green">
	            <span class="info-box-icon"><i class="fa fa-money"></i></span>
	            <div class="info-box-content">
	              <span class="info-box-text">Pemasukan Bulan <?php echo date('M'); ?></span>
                <?php foreach ($tampi_uang1 as $Pemasukan => $row) { ?>
	               <span class="info-box-number"><?= "Rp.".number_format($row->pemasukan_bulan_ini, 2); ?></span>
               <?php } ?>

	              <div class="progress">
	                <div class="progress-bar" style="width: 100%"></div>
	              </div>
	                  <span class="progress-description">
	                 <?php foreach ($tampi_uang3 as $total_kas => $row) { 
                      echo "Total : Rp. ".number_format($row->total_kas);
                    } ?>
	                  </span>
	            </div>
	          </div>


        	</div>
		</div>
    </section>