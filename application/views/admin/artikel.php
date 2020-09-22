<div class="box">
<section class="content-header">
  <h1>
    Artikel
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
          <a href="<?php echo site_url('admin/a_artikel/tambah_artikel'); ?>"><button class="btn fa-flat btn-success"><span class="fa fa-plus"></span> Tambah</button></a>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Author</th>
                <th>Pembaca</th>
                <th>Kategori</th>
                <th>Isi</th>
                <th style="text-align:right;">Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($tampil as $art => $row) { ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row->judul;  ?></td>
              <td><img src="<?= base_url('assets/images/artikel/'.$row->gambar); ?>" height="50px;"></td>
              <td><?= $row->author; ?></td>
              <td><?= $row->pembaca; ?></td>
              <td><?= $row->kategori; ?></td>
              <td><?= substr($row->isi, 0, 120)."..."; ?></td>
              <td style="text-align:right;">
                    <a href="<?php echo site_url('admin/a_artikel/artikel_edit/'.$row->id_artikel) ?>"><span class="fa fa-pencil"></span></a>
                    <a data-toggle="modal" data-target="#hapus_artikelku<?= $row->id_artikel ?>"><span class="fa fa-trash"></span></a>
              </td>
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

<?php foreach ($tampil as $art => $row) { ?>
    <div class="modal fade" id="hapus_artikelku<?= $row->id_artikel ?>" role="dialog">
      <div class="modal-dialog modal-sm">
        <?php echo form_open_multipart('admin/a_artikel/hapus_artikel','',array('acuan' => $row->id_artikel, 'old_photo' => $row->gambar)); ?>
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4>Hapus Artikel</h4>
          </div>
          <div class="modal-body">
            <p>Apakah Anda Yakin Menghapus Artikel <?= $row->judul; ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> Tidak</button>
            <button type="submit" name="hapus" class="btn btn-flag"> Ya</button>
          </div>
        </div>
        <?php echo form_close(); ?> 
      </div>
    </div>
<?php } ?>