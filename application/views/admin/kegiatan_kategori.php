<title>BLUG | Kategori Kegiatan</title>
<div class="box">
<section class="content-header">
  <h1>
    Kategori Kegiatan
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
    <li><a href="#">Kegiatan</a></li>
    <li class="active">Kategori</li>
  </ol>
</section>

  <section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

      <div class="box">
        <div class="box-header">
          <a><button data-toggle="modal" data-target="#tambah_kategori" class="btn fa-flat btn-success"><span class="fa fa-plus"></span> Tambah</button></a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <thead>
            <tr>
                <th>#</th>
                <th>Kategori Kegiatan</th>
                <th style="text-align:right;">Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($tampil as $art => $row) { ?>
            <tr>
              <td> <?= $no++; ?> </td>
              <td> <?= $row->jenis_kategori; ?></td>
              <td style="text-align:right;">
                    <a data-toggle="modal" data-target="#edit_kategori<?= $row->id_kategori; ?>"><span class="fa fa-pencil"></span></a>
                    <a data-toggle="modal" data-target="#hapus_kategori<?= $row->id_kategori; ?>"><span class="fa fa-trash"></span></a>
              </td>
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

<!-- Madal Tambah -->
<div id="tambah_kategori" role="dialog" class="modal fade" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Tambah Kategori Kegiatan</h4>        
      </div>
      <?php echo form_open('admin/a_kegiatan/proses_kegiatan_kategori'); ?>
      <div class="modal-body">
          <div class="form-group">
            <label class="col-label-form">Kategori</label>
            <input class="form-control" type="text" name="jenis_kategori" placeholder="Kategori Kegiatan">
          </div>
      </div>

      <div class="modal-footer">
        <button type="submit" name="tambah" class="btn btn-success"> Tambah</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>


<!-- Modal Edit -->
<?php foreach ($tampil as $art => $row) { ?>
<div id="edit_kategori<?= $row->id_kategori; ?>" role="dialog" class="modal fade" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Edit Kategori Kegiatan</h4>        
      </div>
      <?php echo form_open('admin/a_kegiatan/proses_kegiatan_kategori', '',  array('acuan' => $row->id_kategori )); ?>
      <div class="modal-body">
          <div class="form-group">
            <label class="col-label-form">Kategori</label>
            <input class="form-control" type="text" name="jenis_kategori" value="<?= $row->jenis_kategori; ?>">
          </div>
      </div>

      <div class="modal-footer">
        <button type="submit" name="simpan" class="btn btn-success"> Simpan</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php } ?>


<?php foreach ($tampil as $art => $row) { ?>
 <div class="modal fade" id="hapus_kategori<?= $row->id_kategori; ?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Hapus Kategori <?= $row->kategori; ?></h4>
        </div>

        <?php echo form_open('admin/a_kegiatan/proses_kegiatan_kategori', '', array('acuan' => $row->id_kategori )); ?>
        <div class="modal-body">
          <p>Apakah anda yakin untuk menghapus Kategori <?= $row->jenis_kategori ?></p>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary btn-flat" type="button" data-dismiss="modal">Tidak</button>
          <button class="btn btn-default btn-flat" type="submit" name="hapus">Ya</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  <?php
  }
?>
