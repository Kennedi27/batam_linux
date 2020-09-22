<title><?= $jdl; ?></title>
<div class="box">
<section class="content-header">
  <h1>
    Data Anggota BLUG
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
    <li class="active">Anggota</li>
  </ol>
</section>

  <section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

      <div class="box">
        <?php if ($this->cetak_sess->user_masuk()->posisi == "Sekretaris" && $this->cetak_sess->user_masuk()->status == "Pengurus") { ?>
        <div class="box-header">
          <a><button class="btn fa-flat btn-success" data-toggle="modal" data-target="#tambah_anggota"><span class="fa fa-plus"></span> Tambah</button></a>
        </div>
      <?php } ?>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <thead>
            <tr>
                <th>Photo</th>
                <th>Nama</th>
                <th>Divisi</th>
                <th>Posisi</th>
                <th>Angkatan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Status</th>
                <?php if ($this->cetak_sess->user_masuk()->posisi == "Sekretaris" && $this->cetak_sess->user_masuk()->status == "Pengurus" || $this->cetak_sess->user_masuk()->username == "Kennedi27" ) { ?>
                <th style="text-align:right;">Aksi</th>
              <?php } ?>
            </tr>
            </thead>
            <tbody>

               <?php foreach ($tampil as $ag => $row) { ?>
                
            <tr>
              <?php if (empty($row->photo)) { ?>
                <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/default.png';?>"></td>
              <?php }else{ ?>
                <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/anggota/'.$row->photo;?>"></td>
              <?php } ?>
              <td><?= $row->nama; ?></td>
              <td><?= $row->divisi; ?></td>
              <td><?= $row->posisi; ?></td>
              <td><?= $row->angkatan; ?></td>
              <td><?= $row->jenis_kelamin; ?></td>
              <td><?= $row->alamat; ?></td>
              <td><?= $row->status; ?></td>
              <?php if ($this->cetak_sess->user_masuk()->posisi == "Sekretaris" && $this->cetak_sess->user_masuk()->status == "Pengurus" ) { ?>
              <td style="text-align:right;">
                    <a data-toggle="modal" data-target="#edit_anggota<?= $row->id_anggota; ?>"><span class="fa fa-pencil"></span></a>
                    <a data-toggle="modal" data-target="#hapus_anggota<?= $row->id_anggota; ?>"><span class="fa fa-trash"></span></a>
              </td>
            <?php } ?>
            <?php  if($this->cetak_sess->user_masuk()->username == "Kennedi27"){ ?>
              <td style="text-align: center;">
                  <a title="Reset Password" nik="<?= $row->id_anggota; ?>" id="link_reset" onclick="reserpass($(this).attr('nik'))" data-toggle="modal" data-target="#reset_anggota<?= $row->id_anggota; ?>"><span class="fa fa-refresh"></span></a>
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
  </div>
</section>


<!-- Modal Tambah Anggota -->
<div id="tambah_anggota" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Isi Modal -->
    <div class="modal-content">
    <!-- Header Modal -->
      <div class="modal-header">
        <button  type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Tambah Data Anggota</h4>
      </div>
      
      <!-- Body Modal -->
      <div class="modal-body">
        <?php echo form_open_multipart('admin/A_anggota/proses_anggota'); ?>
          <div class="form-group">
            <label class="col-form-label" for="nama_anggota">Nama Anggota</label>
            <input  type="text" name="nama" class="form-control" placeholder="Nama Anggota">
          </div>

          <div class="form-group">
            <label class="col-form-label">Posisi / Jabatan</label>
            <select class="form-control" name="posisi">
              <option> ---- Pilih Posisi ----</option>
              <option value="DPA"> DPA</option>
              <option value="Ketua"> Ketua</option>
              <option value="Wakil Ketua"> Wakil Ketua</option>
              <option value="Bendahara"> Bendahara</option>
              <option value="Sekretaris"> Sekretaris</option>
              <option value="Koordinator"> Koordinator</option>
              <option value="Anggota"> Anggota</option>
            </select>
          </div>

          <div class="form-group">
            <label class="col-form-label">Angkatan</label>
            <input class="form-control"  type="number" name="angkatan" placeholder="Angkatan">
          </div>

          <div class="form-group">
            <label class="col-form-label">Divisi</label>
            <select class="form-control" name="divisi">
              <option> ---- Pilih Divisi ----</option>
              <option value="DPA"> DPA</option>
              <option value="Inti"> Inti</option>
              <option value="Networking"> Networking</option>
              <option value="Programing"> Programing</option>
              <option value="Medinfo"> Medinfo</option>
            </select>
          </div>

          <div class="form-group">
            <label class="col-form-label">Jenis Kelamin</label><br>
            <label><input  type="radio" name="jenis_kelamin" value="Laki - Laki"> Laki Laki</label>
            <label><input  type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
          </div>

          <div class="form-group">
            <label class="col-form-label">Alamat</label>
            <textarea placeholder="Alamat" class="form-control" name="alamat"></textarea>
          </div>

          <div class="form-group">
            <label class="col-form-label">Foto Anggota</label>
            <input class="form-control"  type="file" name="photo">
          </div>

          <div class="form-group">
            <label class="col-form-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">  
          </div>

          <div class="form-group">
            <label class="col-form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="*********">  
          </div>

          <div class="form-group">
            <label class="col-form-label">Status</label>
            <select name="status" class="form-control">
              <option>Pilih Status</option>
              <option value="Pengurus"> Pengurus</option>
              <option value="Alumni"> Alumni</option>
            </select>
          </div>

      </div>

      <!-- Footer Modal -->
      <div class="modal-footer">
        <button  type="submit" name="tambah" class="btn btn-primary">Tambah</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>



<!-- Modal Edit -->
<?php foreach ($tampil as $ag => $row) { ?>
<div id="edit_anggota<?= $row->id_anggota; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Isi Modal -->
    <div class="modal-content">
    <!-- Header Modal -->
      <div class="modal-header">
        <button  type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Edit Data Anggota</h4>
      </div>
      
      <!-- Body Modal -->
      <div class="modal-body">
        <?php echo form_open_multipart('admin/a_anggota/proses_anggota', '', array('rujukan' => $row->id_anggota, 'old_photo' => $row->photo)); ?>
          <div class="form-group">
            <label class="col-form-label" for="nama_anggota">Nama Anggota</label>
            <input  type="text" name="nama" class="form-control" value="<?= $row->nama; ?>">
          </div>

          <div class="form-group">
            <label class="col-form-label">Posisi / Jabatan</label>
            <select name="posisi" class="form-control">
              <?php if ($row->posisi == "Penasehat") {?>
                <option value="Penasehat"> Penasehat</option>
                <option value="Ketua"> Ketua</option>
                <option value="Wakil Ketua"> Wakil Ketua</option>
                <option value="Bendahara"> Bendahara</option>
                <option value="Sekretaris"> Sekretaris</option>
                <option value="Koordinator"> Koordinator</option>
                <option value="Wakil Koordinator"> Wakil Koordinator</option>
                <option value="Anggota"> Anggota</option>
              <?php } else if ($row->posisi == "Ketua") {?>
                <option value="Penasehat"> Penasehat</option>
                <option value="Ketua" selected> Ketua</option>
                <option value="Wakil Ketua"> Wakil Ketua</option>
                <option value="Bendahara"> Bendahara</option>
                <option value="Sekretaris"> Sekretaris</option>
                <option value="Koordinator"> Koordinator</option>
                <option value="Wakil Koordinator"> Wakil Koordinator</option>
                <option value="Anggota"> Anggota</option>
              <?php } else if ($row->posisi == "Wakil Ketua") {?>
                <option value="Penasehat"> Penasehat</option>
                <option value="Ketua"> Ketua</option>
                <option value="Wakil Ketua" selected> Wakil Ketua</option>
                <option value="Bendahara"> Bendahara</option>
                <option value="Sekretaris"> Sekretaris</option>
                <option value="Koordinator"> Koordinator</option>
                <option value="Wakil Koordinator"> Wakil Koordinator</option>
                <option value="Anggota"> Anggota</option>
              <?php } else if ($row->posisi == "Bendahara") {?>
                <option value="Penasehat"> Penasehat</option>
                <option value="Ketua"> Ketua</option>
                <option value="Wakil Ketua"> Wakil Ketua</option>
                <option value="Bendahara" selected> Bendahara</option>
                <option value="Sekretaris"> Sekretaris</option>
                <option value="Koordinator"> Koordinator</option>
                <option value="Wakil Koordinator"> Wakil Koordinator</option>
                <option value="Anggota"> Anggota</option>
              <?php } else if ($row->posisi == "Sekretaris") {?>
                <option value="Penasehat"> Penasehat</option>
                <option value="Ketua"> Ketua</option>
                <option value="Wakil Ketua"> Wakil Ketua</option>
                <option value="Bendahara"> Bendahara</option>
                <option value="Sekretaris" selected> Sekretaris</option>
                <option value="Koordinator"> Koordinator</option>
                <option value="Wakil Koordinator"> Wakil Koordinator</option>
                <option value="Anggota"> Anggota</option>
              <?php } else if ($row->posisi == "Koordinator") {?>
                <option value="Penasehat"> Penasehat</option>
                <option value="Ketua"> Ketua</option>
                <option value="Wakil Ketua"> Wakil Ketua</option>
                <option value="Bendahara"> Bendahara</option>
                <option value="Sekretaris"> Sekretaris</option>
                <option value="Koordinator" selected> Koordinator</option>
                <option value="Wakil Koordinator"> Wakil Koordinator</option>
                <option value="Anggota"> Anggota</option>
              <?php } else if ($row->posisi == "Wakil Koordinator") {?>
                <option value="Penasehat"> Penasehat</option>
                <option value="Ketua"> Ketua</option>
                <option value="Wakil Ketua"> Wakil Ketua</option>
                <option value="Bendahara"> Bendahara</option>
                <option value="Sekretaris"> Sekretaris</option>
                <option value="Koordinator"> Koordinator</option>
                <option value="Wakil Koordinator" selected> Wakil Koordinator</option>
                <option value="Anggota"> Anggota</option>
              <?php } else if ($row->posisi == "Anggota") {?>
                <option value="Penasehat"> Penasehat</option>
                <option value="Ketua"> Ketua</option>
                <option value="Wakil Ketua"> Wakil Ketua</option>
                <option value="Bendahara"> Bendahara</option>
                <option value="Sekretaris"> Sekretaris</option>
                <option value="Koordinator"> Koordinator</option>
                <option value="Wakil Koordinator"> Wakil Koordinator</option>
                <option value="Anggota" selected> Anggota</option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
            <label class="col-form-label">Angkatan</label>
            <input class="form-control"  type="number" name="angkatan" value="<?= $row->angkatan ?>">
          </div>


          <div class="form-group">
            <label class="col-form-label">Divisi</label>
            <select class="form-control" name="divisi">
              <?php if($row->divisi == "DPA"){ ?>
                <option value="DPA" selected> DPA</option>
                <option value="Inti"> Inti</option>
                <option value="Networking"> Networking</option>
                <option value="Programing"> Programing</option>
                <option value="Medinfo"> Medinfo</option>
            <?php }else if($row->divisi == "Inti"){ ?>
                <option value="DPA"> DPA</option>
                <option value="Inti" selected> Inti</option>
                <option value="Networking"> Networking</option>
                <option value="Programing"> Programing</option>
                <option value="Medinfo"> Medinfo</option>
            <?php }else if($row->divisi == "Networking"){ ?>
                <option value="DPA"> DPA</option>
                <option value="Inti"> Inti</option>
                <option value="Networking" selected> Networking</option>
                <option value="Programing"> Programing</option>
                <option value="Medinfo"> Medinfo</option>
            <?php }else if($row->divisi == "Programing"){ ?>
                <option value="DPA"> DPA</option>
                <option value="Inti"> Inti</option>
                <option value="Networking"> Networking</option>
                <option value="Programing" selected> Programing</option>
                <option value="Medinfo"> Medinfo</option>
            <?php }else if($row->divisi == "Medinfo"){ ?>
                <option value="DPA"> DPA</option>
                <option value="Inti"> Inti</option>
                <option value="Networking"> Networking</option>
                <option value="Programing"> Programing</option>
                <option value="Medinfo" selected> Medinfo</option>
            <?php } ?>
            </select>
          </div>


          <div class="form-group">
            <label class="col-form-label">Jenis Kelamin</label><br>
            <?php if ($row->jenis_kelamin == "Laki - Laki") {?>
              <label><input  type="radio" value="Laki - Laki" name="jenis_kelamin" checked> Laki Laki</label>
              <label><input  type="radio" value="Perempuan" name="jenis_kelamin"> Perempuan</label>
            <?php }else if($row->jenis_kelamin == "Perempuan") {?>
              <label><input  type="radio" value="Laki - Laki" name="jenis_kelamin"> Laki Laki</label>
              <label><input  type="radio" value="Perempuan" name="jenis_kelamin" checked> Perempuan</label>
            <?php } ?>
          </div>

          <div class="form-group">
            <label class="col-form-label">Alamat</label>
            <textarea placeholder="Alamat" name="alamat" class="form-control"><?= $row->alamat; ?></textarea>
          </div>

          <div class="form-group">
            <label class="col-form-label">Foto Anggota</label><br>
            <label class="col-form-label"><img height="80"  src="<?php if($row->photo != null){
                echo base_url('assets/images/anggota/'.$row->photo);
              }else{echo base_url('assets/images/default.png'); }; ?>"></label>
            <input class="form-control" type="file" name="photo">
          </div>

          <div class="form-group">
            <label class="col-form-label">Status</label>
            <select name="status" class="form-control">
            <?php if($row->status == "Pengurus"){ ?> 
              <option value="Pengurus" selected> Pengurus</option>
              <option value="Alumni"> Alumni</option>
            <?php } else if ($row->status == "Alumni") { ?>
              <option value="Pengurus"> Pengurus</option>
              <option value="Alumni" selected> Alumni</option>
            <?php } ?>
            </select>
          </div>
      </div>

      <!-- Footer Modal -->
      <div class="modal-footer">
        <button  type="submit" name="simpan" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>
<?php } ?>

<?php 
  foreach ($tampil as $ag => $row) {
?>
<!-- Modal Hapus -->
  <div class="modal fade" id="hapus_anggota<?= $row->id_anggota; ?>">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Hapus <?= $row->nama; ?></h4>
        </div>

        <?php echo form_open_multipart('admin/a_anggota/proses_anggota', '', array('rujukan' => $row->id_anggota, 'old_photo' => $row->photo)); ?>
        <div class="modal-body">
          <p>Apakah anda yakin untuk menghapus data <?= $row->nama ?></p>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary btn-flat" type="button" data-dismiss="modal">Tidak</button>
          <button class="btn btn-default btn-flat" type="submit" name="hapuss">Ya</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>

  <?php
  }
?>

<!-- Reset Password -->
<?php foreach ($tampil as $ag => $row) { ?>
<!-- Modal Hapus -->
  <div class="modal fade" id="reset_anggota<?= $row->id_anggota; ?>">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Password Baru <?= $row->nama; ?></h4>
        </div>
        <?php echo form_open('admin/A_anggota/reset_pass', '', array('id' => $row->id_anggota ,'username' => $row->username)); ?>
        <div class="modal-body">
          <p><label>Username : </label><?= $row->username; ?><br>
            <label>Password : </label><input type="text"  name="passku" style="border: none; background-color: transparent;" disabled>
            <input type="hidden" name="passku2">
          </p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning btn-flat" type="submit" name="simpan_pass">Simpan</button>
        </div>
        <?php echo form_close(); ?>

      </div>
    </div>
  </div>

  <?php
  }
?>
    
<script type="text/javascript">
  function reserpass(rujuk) {
      var rujuk = $('#link_reset').attr('nik');
      var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
      var string_length = 8;
      var randomstring = '';
      for (var i=0; i<string_length; i++) {
          var randomstring = Math.random().toString(36).slice(-8);
      }
      $('input[name=passku]').val(randomstring);
      $('input[name=passku2]').val(randomstring);
  } 
</script>