<div class="box">
<section class="content-header">
  <h1>
    Daftar E-book
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
        <div class="box-header">
          <a data-toggle="modal" data-target="#tambah"><button class="btn fa-flat btn-success"><span class="fa fa-plus"></span> Tambah</button></a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <thead>
            <tr>
                <th>#</th>
                <th>Cover / Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Link Download</th>
                <th style="text-align:right;">Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($tampil as $eb => $row) { ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><img height="50" src="<?php echo base_url('assets/images/ebook/'.$row->gambar);?>"></td>
              <td><?= $row->judul; ?></td>
              <td><?= substr($row->deskripsi, 0, 100)."..."; ?></td>
              <td><?= $row->kategori; ?></td>
              <td><?= $row->link; ?></td>
              <td style="text-align:right;">
                    <a data-toggle="modal" data-target="#ubah_ebook<?= $row->id_book; ?>"><span class="fa fa-pencil"></span></a>
                    <a data-toggle="modal" data-target="#hapus_ebook<?= $row->id_book; ?>"><span class="fa fa-trash"></span></a>
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

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambah" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Tambah Data E-book</h4>
      </div>
      <?php echo form_open_multipart('admin/a_ebook/proses_ebook'); ?>
      <div class="modal-body">
          <div class="form-group">
            <label class="label-col-modal">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul E-book">
          </div>

          <div class="form-group">
            <label class="label-col-modal">Kategori</label>
            <select name="kategori" class="form-control">
              <option>---Pilih Kategori---</option>
              <?php foreach ($list_kategori as $ls_kat => $rujuk) { ?>
                <option value="<?= $rujuk->jenis_kategori; ?>"><?= ucfirst($rujuk->jenis_kategori); ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label class="label-col-modal">Link E-book Valid</label>
            <input type="link" name="link" class="form-control" placeholder="http://">
          </div>

          <div class="form-group">
            <label class="label-col-modal">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label class="label-col-modal">Gambar / Cover</label>
            <input type="file" name="gambar">
          </div>

          <div class="modal-footer">
            <button type="submit" name="tambah_ebook" class="btn btn-success">Tambah</button>
          </div>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<!-- Modal Edit Data -->
<?php foreach ($tampil as $eb => $row) { ?>
<div class="modal fade" id="ubah_ebook<?= $row->id_book; ?>" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Edit Data E-book</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/a_ebook/proses_ebook', '', array('acuan' => $row->id_book, 'old_photo' => $row->gambar )); ?>
        <div class="modal-body">
          <div class="form-group">
            <label class="label-col-modal">Judul</label>
            <input type="text" class="form-control" name="judul" value="<?= $row->judul; ?>">
          </div>

          <div class="form-group">
            <label class="label-col-modal">Kategori</label>
            <select name="kategori" class="form-control">
              <?php foreach ($list_kategori as $ls_kat => $rujuk) { ?>
                <?php 
                if ($row->kategori == $rujuk->jenis_kategori) { ?>
                  <option value="<?= $rujuk->jenis_kategori; ?>" selected><?= ucfirst($rujuk->jenis_kategori); ?></option>
                <?php }else{ ?>
                  <option value="<?= $rujuk->jenis_kategori; ?>"><?= ucfirst($rujuk->jenis_kategori); ?></option>
                <?php } ?>
            <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label class="label-col-modal">Link E-book Valid</label>
            <input type="link" name="link" class="form-control" value="<?= $row->link; ?>">
          </div>

          <div class="form-group">
            <label class="label-col-modal">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"><?= $row->deskripsi ?></textarea>
          </div>

          <div class="form-group">
            <label class="label-col-modal">Gambar / Cover</label><br>
            <img src="<?php echo base_url('assets/images/ebook/'.$row->gambar); ?>" width="100px"><p></p>
            <input type="file" name="gambar">
          </div>

          <div class="modal-footer">
            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
          </div>
      </div>
      <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<!-- Modal Hapus Data -->
<?php foreach ($tampil as $eb => $row) { ?>

<div class="modal fade" id="hapus_ebook<?= $row->id_book; ?>" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Hapus Data!</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/a_ebook/proses_ebook', '', array('acuan' => $row->id_book, 'old_photo' => $row->gambar )); ?>
            <p>Yakin Ingin Menghapus <?= $row->judul; ?></p>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="close">Tidak</button>
            <button type="submit" class="btn" name="hapus">Ya</button>
          </div>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>