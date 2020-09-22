<title>BLUG | Absensi Anggota</title>
<div class="box">
<section class="content-header">
  <h1>
    Absensi Blug
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
            <a href=<?= site_url('admin/a_absensi/data_absensi');?>><button type="button" class="btn btn-success btn-flat" style="margin-bottom: 20px;">Data Absensi</button></a>
          <?php echo form_open('admin/a_absensi/proses_absensi'); ?>
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <caption><input type="date" name="tanggal" style="float: right; margin-left: 15px; cursor: pointer;" required>
              <label style="float: right;">Tanggal : </label></caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Divisi</th>
                <th>Absen</th>
                <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
              <?php $no= 0; ?>
              <?php foreach ($tampil as $abs => $row) { ?>
                <?php
                  $no++;
                  $jumlah_baris;
                ?>
            <tr>
                <input type="hidden" name="id_anggota-<?=$no;?>" value="<?= $row->id_anggota; ?>">
                <input type="hidden" name="jumlah_baris" value="<?= $jumlah_baris; ?>">
                  <td><label><?= $no; ?></label></td>
                  <input type="hidden" name="nama-<?=$no?>" value="<?= $row->nama; ?>">
                  <td><label><?= $row->nama; ?></label></td>
                  <td><label><?= $row->divisi; ?></label></td>
                  <td>
                    <select class="form-control" name="kehadiran-<?=$no?>">
                      <option>---Pilih---</option>
                      <option value="H"> Hadir</option>
                      <option value="A"> Alpha</option>
                      <option value="S"> Sakit</option>
                      <option value="I"> Izin</option>
                    </select>
                  </td>
              <td><textarea style="width: 100%;" rows="1" name="keterangan-<?=$no?>" class="form-control" placeholder="Alasan Tidak Masuk"></textarea></td>
            </tr>
            <?php } ?>  
        </div>
            </tbody>
          </table>
              <div class="box-header">
                <?php if ($this->cetak_sess->user_masuk()->posisi == "Sekretaris" && $this->cetak_sess->user_masuk()->status == "Pengurus") { ?>
                  <a><button type="reset" class="btn fa-flat btn-danger"><span class="fa fa-close"></span> Reset</button></a>
                  <a><button type="submit" name="simpan" class="btn fa-flat btn-info"><span class="fa fa-check"></span> Simpan</button></a>
                <?php } ?>
                  
              </div>
              <?php echo form_close(); ?>
            
      </div>
    </div>
  </div>
</section>
</div>