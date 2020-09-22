<div class="box">
<section class="content-header">
  <h1>
    Data Pengeluaran Uang Kas
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
        <?php if ($this->cetak_sess->user_masuk()->posisi == "Bendahara" && $this->cetak_sess->user_masuk()->status == "Pengurus" ) { ?>
        <div class="box-header">
          <a><button class="btn fa-flat btn-success" data-toggle="modal" data-target="#tambah_uang"><span class="fa fa-plus"></span> Tambah</button></a>
        </div>
      <?php } ?>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <thead>
            <tr>
                <th>#</th>
                <th>tanggal</th>
                <th>Author</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <?php if ($this->cetak_sess->user_masuk()->posisi == "Bendahara" && $this->cetak_sess->user_masuk()->status == "Pengurus" ) { ?>
                  <th style="text-align:right;">Aksi</th>
                <?php } ?>
            </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($tampil as $kas_keluar => $row) { ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row->tanggal; ?></td>
              <td><?= $row->nama; ?></td>
              <td><?= "Rp. ".$row->jumlah; ?></td>
              <td><?= $row->keterangan; ?></td>
              <?php if ($this->cetak_sess->user_masuk()->posisi == "Bendahara" && $this->cetak_sess->user_masuk()->status == "Pengurus" ) { ?>
              <td style="text-align:right;">
                    <a><button class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $row->id_keuangan; ?>"><span class="fa fa-pencil"></span> Edit</button></a>
                    <a><button class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $row->id_keuangan; ?>"><span class="fa fa-trash"></span> Hapus</button></a>
              </td>
            <?php } ?>
            </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</section>
</div>


<!-- Modal Tambah -->
<div class="modal fade" id="tambah_uang" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Tambah Uang Kas BLUG</h4>
      </div>

      <div class="form-horizontal">
         <?php echo form_open('admin/a_keuangan/proses_pengeluaran'); ?>
        <div class="modal-body">
          <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Pengeluaran</label>
            <div class="col-sm-7">
              <input type="number" name="jumlah" class="form-control" placeholder="Pengeluaran">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Penggunaan Dana</label>
            <div class="col-sm-7">
              <input type="text" name="keterangan" placeholder="Cth : Makan Makan" class="form-control">
            </div>
          </div>

        </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-flat" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info btn-flat" name="tambah"> Tambah</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

<!-- Edit Tambah -->
<?php foreach ($tampil as $kas_keluar => $row): ?>
<div class="modal fade" id="edit<?php echo $row->id_keuangan; ?>" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Edit Uang Kas BLUG</h4>
      </div>

      <div class="form-horizontal">
         <?php echo form_open('admin/a_keuangan/proses_pengeluaran','',array('acuan' => $row->id_keuangan)); ?>
        <div class="modal-body">
          <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Setoran</label>
            <div class="col-sm-7">
              <input type="number" name="jumlah" class="form-control" value="<?php echo $row->jumlah; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Sumber Dana</label>
            <div class="col-sm-7">
              <input type="text" name="keterangan" value="<?php echo $row->keterangan; ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-flat" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info btn-flat" name="simpan"> Simpan</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>

<!-- Hapus Data -->
<?php foreach ($tampil as $kas_keluar => $row): ?>
<div class="modal fade" id="hapus<?php echo $row->id_keuangan; ?>" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Hapus Uang Kas</h4>
      </div>

      <div class="form-horizontal">
         <?php echo form_open('admin/a_keuangan/proses_pengeluaran','',array('acuan' => $row->id_keuangan)); ?>
        <div class="modal-body">
          <p>Apakah Anda yakin Menghapus ini ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-flat" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info btn-flat" name="delete"> Hapus</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>