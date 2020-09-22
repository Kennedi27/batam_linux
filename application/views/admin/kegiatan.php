<div class="box">
<section class="content-header">
  <h1>
    Kegiatan BLUG
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
        <?php if ($this->cetak_sess->user_masuk()->divisi == "Inti" || $this->cetak_sess->user_masuk()->divisi == "Programing" ) { ?>
        <div class="box-header">
          <a data-toggle="modal" data-target="#tambah_kegiatan"><button type="submit" class="btn fa-flat btn-success"><span class="fa fa-plus"></span> Tambah</button></a>
        </div>
      <?php } ?>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <thead>
            <tr>
                <th>#</th>
                <th>Kegiatan</th>
                <th>Poster</th>
                <th>Kategori</th>
                <th>Tempat</th>
                <th>Waktu</th>
                <th>Tanggal Pelaksanaan</th>
                <th>Author</th>
                <th>Isi</th>
                <?php if ($this->cetak_sess->user_masuk()->divisi == "Inti" || $this->cetak_sess->user_masuk()->divisi == "Programing" ) { ?>
                <th style="text-align:right;">Aksi</th>
              <?php } ?>
            </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($tampil as $keg => $row) { ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row->nama; ?></td>
              <td><img height="50px" src="<?= base_url('assets/images/kegiatan/'.$row->poster);?>"></td>
              <td><?= $row->kategori; ?></td>
              <td><?= $row->tempat; ?></td>
              <td><?= $row->jam; ?></td>
              <td><?= $row->tgl_mulai." - ".$row->tgl_selesai; ?></td>
              <td><?= $row->author; ?></td>
              <td><?= substr($row->deskripsi, 0,40); ?></td>
              <?php if ($this->cetak_sess->user_masuk()->divisi == "Inti" || $this->cetak_sess->user_masuk()->divisi == "Programing" ) { ?>
              <td style="text-align:right;">
                    <a data-toggle="modal" data-target="#edit_kegiatan<?= $row->id_kegiatan; ?>"><span class="fa fa-pencil"></span></a>
                    <a data-toggle="modal" data-target="#hapus_kegiatan<?= $row->id_kegiatan; ?>"><span class="fa fa-trash"></span></a>
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

<!-- Modal Tambah Kegiatan -->
<div class="modal fade" role="dialog" id="tambah_kegiatan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4> Tambah Kegiatan</h4>
      </div>

      <div class="modal-body">
        <div class="form-horizontal">

          <?php echo form_open_multipart('admin/a_kegiatan/proses_kegiatan'); ?>
          <div class="modal-body">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nama Kegiatan</label>
                <div class="col-sm-7">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Kegiatan" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Kategori</label>
                <div class="col-sm-7">
                  <select class="form-control" name="kategori">
                    <?php foreach ($list_kategori as $kategori_kegiatan => $tunjuk) { ?>
                      <option value="<?= $tunjuk->jenis_kategori ?>"><?= $tunjuk->jenis_kategori ?></option>
                   <?php } ?>
                  </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Deskripsi</label>
                <div class="col-sm-7">
                  <textarea class="form-control" rows="3" name="deskripsi" placeholder="Deskripsi ..." required></textarea>
                </div>
            </div>

              <div class="form-group">
                <label class="col-sm-4 control-label">Mulai</label>
                <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="tgl_mulai" class="form-control pull-right" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
               <label class="col-sm-4 control-label">Selesai</label>
                <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="tgl_selesai" class="form-control pull-right" required>
                  </div>
                </div>
              </div>
                  
            <div class="form-group">
                <label class="col-sm-4 control-label">Tempat</label>
                <div class="col-sm-7">
                  <input type="text" name="tempat" class="form-control" placeholder="Tempat" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Waktu</label>
                <div class="col-sm-7">
                    <input type="text" placeholder="Contoh : 10 : 00 - 14 : 00 Or 10 : 00 - Selesai" name="jam" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Poster</label>
                <div class="col-sm-7">
                  <input type="file" name="poster" required>
                </div>
            </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="tambah">Tambah</button>
          </div>

          <?php echo form_close(); ?> 
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<?php foreach ($tampil as $keg => $row) { ?>
<div class="modal fade" role="dialog" id="edit_kegiatan<?= $row->id_kegiatan; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4> Edit Kegiatan</h4>
      </div>

      <div class="modal-body">
        <div class="form-horizontal">

          <?php echo form_open_multipart('admin/a_kegiatan/proses_kegiatan', '', array('acuan' => $row->id_kegiatan, 'poster_lama' => $row->poster)); ?>
          <div class="modal-body">
            <div class="form-group">
                <label class="col-sm-4 control-label">Nama Kegiatan</label>
                <div class="col-sm-7">
                  <input type="text" name="nama" class="form-control" value="<?= $row->nama; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Kategori</label>
                <div class="col-sm-7">
                  <select class="form-control" name="kategori">
                    <?php foreach ($list_kategori as $kategori_kegiatan => $tunjuk) { ?>
                      <?php if ($row->kategori == $tunjuk->jenis_kategori) { ?>
                      <option value="<?= $tunjuk->jenis_kategori ?>" selected><?= $tunjuk->jenis_kategori ?></option>
                   <?php }else{ ?>
                      <option value="<?= $tunjuk->jenis_kategori ?>"><?= $tunjuk->jenis_kategori ?></option>
                   <?php
                     } 
                    }
                    ?>

                  </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-4 control-label">Deskripsi</label>
                <div class="col-sm-7">
                  <textarea class="form-control" rows="3" name="deskripsi" required><?= $row->deskripsi; ?></textarea>
                </div>
            </div>

              <div class="form-group">
                <label class="col-sm-4 control-label">Mulai</label>
                <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="tgl_mulai" value="<?= $row->tgl_mulai; ?>" class="form-control pull-right" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
               <label class="col-sm-4 control-label">Selesai</label>
                <div class="col-sm-7">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="tgl_selesai" value="<?= $row->tgl_selesai; ?>" class="form-control pull-right" required>
                  </div>
                </div>
              </div>
                  
            <div class="form-group">
                <label class="col-sm-4 control-label">Tempat</label>
                <div class="col-sm-7">
                  <input type="text" name="tempat" value="<?= $row->tempat; ?>" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Waktu</label>
                <div class="col-sm-7">
                    <input type="text" value="<?= $row->jam; ?>" name="jam" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Poster</label>
                <div class="col-sm-7">
                  <img height="80px" src="<?= base_url('assets/images/kegiatan/'.$row->poster);?>"><p></p>
                  <input type="file" name="poster">
                </div>
            </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="simpan">Simpan</button>
          </div>

          <?php echo form_close(); ?> 
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>


<!-- Hapus Modal -->
<?php foreach ($tampil as $keg => $row) { ?>
<div id="hapus_kegiatan<?= $row->id_kegiatan; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <?php echo form_open_multipart('admin/a_kegiatan/proses_kegiatan', '', array('acuan' => $row->id_kegiatan, 'poster_lama' => $row->poster)); ?>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Hapus Kegiatan <?= $row->nama; ?></h4>
      </div>

      <div class="modal-body">
        <p>Yakin Anda Menghapus <?= $row->nama; ?></p>
      </div>

      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-info btn-flat"> Tidak</button>
        <button type="submit" name="hapus" class="btn btn-default btn-flat"> Ya</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php } ?>