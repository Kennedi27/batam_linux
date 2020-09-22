<title>BLUG | Data Absensi Anggota</title>
<div class="box">
<section class="content-header">
  <h1>
    Rekap Absensi Anggota BLUG
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
    <li class="active"><?php echo ucfirst($this->uri->segment(3));?></li>
  </ol>
</section>

    <section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Divisi</th>
                <th>H</th>
                <th>A</th>
                <th>I</th>
                <th>S</th>
            </tr>
            </thead>
            <tbody>

              <?php $no=1; ?>
              <?php foreach ($tampil as $d_absen => $row) { ?>
                <?php echo form_open('admin/a_absensi/data_absensi'); ?>

                <!-- Menghitung Alpa Anggota -->
                <?php
                  $query1 = $this->db->query("SELECT * FROM absen WHERE kehadiran = 'A' AND id_anggota = '$row->id_anggota'");
                  $hitung_absen = $query1->num_rows();
                ?>

                <!-- Menghitung Izin  Anggota-->
                <?php
                  $query2 = $this->db->query("SELECT * FROM absen WHERE kehadiran = 'I' AND id_anggota = '$row->id_anggota'");
                  $hitung_ijin = $query2->num_rows();
               ?>

               <!-- Menghitung Hadir anggota -->
               <?php
                  $query3 = $this->db->query("SELECT * FROM absen WHERE kehadiran = 'H' AND id_anggota = '$row->id_anggota'");
                  $hitung_hadir = $query3->num_rows();
               ?>

               <!-- Menghitung Sakit Anggota -->
               <?php
                  $query4 = $this->db->query("SELECT * FROM absen WHERE kehadiran = 'S' AND id_anggota = '$row->id_anggota'");
                  $hitung_sakit = $query4->num_rows();
               ?>
            <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row->nama; ?></td>
                  <td><?= $row->divisi; ?></td>
                  <td><?= number_format($hitung_hadir); ?></td>
                  <td><?= number_format($hitung_absen); ?></td>
                  <td><?= number_format($hitung_ijin); ?></td>
                  <td><?= number_format($hitung_sakit); ?></td>
            </tr>
            <?php echo form_close(); ?>
          <?php } ?>
        </div>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</section>
</div>