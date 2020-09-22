<title>BLUG : Slideshow</title>
<div class="box">
<section class="content-header">
  <h1>
    SlideShow
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
          <a><button class="btn fa-flat btn-success" data-toggle="modal" data-target="#tambah_ss"><span class="fa fa-plus"></span> Tambah</button></a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <thead>
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Author</th>
              <?php 
              foreach ($tampil as $asek => $row) {
                $author = $row->author;
              } 
              if ($this->cetak_sess->user_masuk()->username == $author) { ?>
                  <th style="text-align:right;">Aksi</th>
              <?php
                }
              ?>
            </tr>
            </thead>
            <tbody>
              <?php $no = 0; ?>
              <?php foreach ($tampil as $ss => $row) {
                $no++;
              ?>
             <tr>
              <td><?php echo $no;?></td>
              <td><img height="50" src="<?php echo base_url('assets/images/slideshow/'.$row->gambar);?>"></td>
              <td><?= $row->id_proker; ?></td>
              <td><?= $row->nama_lengkap; ?></td>
              <?php if ($this->cetak_sess->user_masuk()->username == $row->author) { ?>
                <td style="text-align:right;">
                    <a data-target="#edit_ss<?= $row->id_artikel_kat; ?>" data-toggle="modal"><span class="fa fa-pencil"></span></a>
                    <a data-target="#hapus_ss" data-toggle="modal"><span class="fa fa-trash"></span></a>
                </td>
              <?php } ?>
            </tr>
          <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<!-- Modal Tambah Slideshow -->
<div id="tambah_ss" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Tambah Data Slideshow</h4>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('admin/a_slideshow/proses_slideshow'); ?>
          <div class="form-group">
            <label class="label-col-control" for="gambar">Kategori</label>
            <select name="id_proker" class="form-control">
              <option>-- Pilih Kategori --</option>
              <?php
                foreach($list_proker as $proker_blug => $proker_tahunan){
                  echo "<option value=".$proker_tahunan->id_proker.">".$proker_tahunan->nama_proker."</option>";
                }
              ?>
            </select>
          </div>

          <div>
            <label class="label-col-control" name="gambar">Gambar / Poster</label><br>
            <input required type="file" name="gambar">
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
          </div>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>


<?php foreach ($tampil as $ss => $row) { ?>
<!-- Modal Edit Slideshow -->
<div id="edit_ss<?= $row->id_artikel_kat; ?>" class="modal fade" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Ubah Data Slideshow</h4>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('admin/a_slideshow/proses_slideshow','', array('rujukan' => $row->id_artikel_kat, 'old_photo' => $row->gambar)); ?>
          <div class="form-group">
            <label class="label-col-control" for="gambar">Kategori</label>
            <select name="id_proker" class="form-control">
              <option>-- Pilih Kategori --</option>
              <?php
                foreach($list_proker as $proker_blug => $proker_tahunan){
                  echo "<option value=".$proker_tahunan->nama_proker.">".$proker_tahunan->nama_proker."</option>";
                }
              ?>
            </select>
          </div>

          <div>
            <label class="label-col-control" name="gambar">Gambar / Poster</label><br>
            <img height="120px" src="<?= base_url('assets/images/slideshow/'.$row->gambar); ?>"><p></p>
            <input type="file" name="gambar">
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
          </div>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<!-- Modal Hapus Slideshow -->
<div id="hapus_ss" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <b>Hapus</b>
      </div>

      <div class="modal-body">
        <?php echo form_open_multipart('admin/a_slideshow/proses_slideshow', '', array('rujukan' => $row->id_artikel_kat, 'old_photo' => $row->gambar)); ?>
          <div>
            Apakah Anda Yakin Menghapus Data<p></p>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-flat" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-danger btn-flat" name="hapus_data">Ya</button>
          </div>

        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>