<section class="content-header">
    <h1>
      Rekapitulasi Keuangan BLUG
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
      <li class="active"><?php echo ucfirst($this->uri->segment(3));?></li>
    </ol>
  </section>

<section class="content">
  <div class="row">
      <div class="col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Pemasukan Bulan ini</span>
            <?php foreach ($tampil4 as $bulan_ini => $row){ ?>
              <span class="info-box-number"><?= "Rp. ".number_format($row->pemasukan_bulan_ini, 2); ?></span>
            <?php } ?>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-money"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Pengeluaran Bulan ini</span>
            <?php foreach ($tampil5 as $bulan_ini => $row){ ?>
              <span class="info-box-number"><?= "Rp. ".number_format($row->pengeluaran_bulan_ini, 2); ?></span>
            <?php } ?>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="info-box">
          <span class="info-box-icon bg-black"><i class="fa fa-money"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Uang Kas</span>
            <?php foreach($tampil6 as $total => $row) { ?>
              <span class="info-box-number"><?= "Rp. ".number_format($row->total_kas, 2); ?></span>
          <?php } ?>
          </div>
        </div>
      </div>
  </div>

  <div class="row">
    <div class="box">
      <div class="box-body">
        <form action="<?php echo site_url('admin/a_keuangan/rekap_kas'); ?>" method="post">
          <table border="0" style="margin-bottom: 30px; margin-top: 20px">
            <tr>
              <td width="90px"><b>Start Date : </b></td>
              <td><input type="date" name="dari_tanggal" ></td>
              <td width="30px"></td>
              <td width="90px"><b>End Date : </b></td>
              <td><input type="date" name="ke_tanggal"></td>
              <td style="width: 130px;"><button type="submit" name="laporan"  class="btn btn-primary" style="float: right;"><b>View Report</b></button></td>
            </tr>
          </table>
        </form>
          <div id="laporan_live">
            <center><h2>Rekapitulasi Keuangan BLUG</h2></center>
            <table border="0" style="margin-bottom: 10px;">
              <tr>
                <td width="90px" height="50px"><b>From Date : </b></td>
                <td><?php echo $_POST['dari_tanggal']; ?></td>
              </tr>
              <tr>
                <?php
                  $ketanggal = $_POST['ke_tanggal'];
                  if ($ketanggal == "") {
                    $ketanggal = $_POST['dari_tanggal'];
                  }
                ?>
                <td width="90px"><b>To Date : </b></td>
                <td><?php echo $ketanggal; ?></td>
              </tr>
            </table>
            <div style="margin-bottom: 20px;">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-primary active" onclick="laporan_both()">
                  <input type="radio" name="options" id="option1" autocomplete="off" checked> Both
                </label>
                <label class="btn btn-primary" onclick="laporan_pemasukan()">
                  <input type="radio" name="options" id="option2"  autocomplete="off"> Pemasukan
                </label>
                <label class="btn btn-primary" onclick="laporan_pengeluaran()">
                  <input type="radio" name="options" id="option3" autocomplete="off"> Pengeluaran
                </label>
              </div>
            </div>
            <div id="laporan_both">
              <table id="example4" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($tampil1 as $both => $row) { ?>
                  <tr>
                    <td><?= $row->tanggal; ?></td>
                    <td><?= $row->status; ?></td>
                    <td><?= $row->jumlah; ?></td>
                    <td><?= $row->keterangan; ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>

            <div id="laporan_pengeluaran">
              <table id="example2" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($tampil2 as $both => $row) { ?>
                  <tr>
                    <td><?= $row->tanggal; ?></td>
                    <td><?= $row->status; ?></td>
                    <td><?= $row->jumlah; ?></td>
                    <td><?= $row->keterangan; ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>

            <div id="laporan_pemasukan">
              <table id="example3" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($tampil3 as $both => $row) { ?>
                  <tr>
                    <td><?= $row->tanggal; ?></td>
                    <td><?= $row->status; ?></td>
                    <td><?= $row->jumlah; ?></td>
                    <td><?= $row->keterangan; ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  
<style type="text/css">
  #laporan_pengeluaran {
    display: none;
  }
  #laporan_pemasukan {
    display: none;
  }
</style>
<script type="text/javascript">
  function laporan_pemasukan() {
    $('#laporan_pemasukan').show('slow');
    // document.getElementById('laporan_pemasukan').style.display = "block";
    document.getElementById('laporan_both').style.display = "none";
    document.getElementById('laporan_pengeluaran').style.display = "none";
  }
  function laporan_pengeluaran() {
    document.getElementById('laporan_pemasukan').style.display = "none";
    document.getElementById('laporan_both').style.display = "none";
    $('#laporan_pengeluaran').show('slow');
  }
  function laporan_both() {
    document.getElementById('laporan_pemasukan').style.display = "none";
    $('#laporan_both').show('slow');
    document.getElementById('laporan_pengeluaran').style.display = "none";
  }
</script>
