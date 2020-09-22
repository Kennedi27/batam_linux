<div class="box">
<section class="content-header">
  <h1>
    Forum Diskusi
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
          <a data-toggle="modal" data-target="#tambah_forum"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Topik</button></a>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-striped" style="font-size:13px;">
            <thead>
              <?php $terlogin_masuk = $this->cetak_sess->user_masuk()->username; ?>
            <tr>
                <th width="20px">#</th>
                <th>Topik</th>
                <th width="80px">Partisipan</th>
                <?php if ($terlogin_masuk == "Kennedi27") { ?>
                 <th style="text-align: center; width: 80px;">Aksi</th>
                <?php } ?>
            </tr>
            </thead>
            <tbody>
             
              <?php
              $no = 0;
              foreach ($list_forum->result() as $row) { 
                $no++;
              ?>

             <tr>
               <td style="padding-bottom: 15px; padding-top: 15px;"><?= $no; ?></td>
               <td style="padding-bottom: 15px; padding-top: 15px;"><a href="<?= site_url('admin/A_diskusi/bahas_forum'); ?>"><b><?= ucfirst($row->topik); ?></b></a><br><i style="font-size: 8pt;"><?= $row->author." | ".$row->tanggal; ?></i></td>
               <td style="padding-bottom: 15px; padding-top: 15px;"><b><?= $row->partisipan; ?></b></td>
               <?php if ($terlogin_masuk == "Kennedi27") { ?>
               <td style="text-align: center; padding-bottom: 15px; padding-top: 15px;">
                  <a data-toggle="modal" data-target="#edit_forum<?= $row->id_forum; ?>" title="Edit" style="margin-right: 5px;"><i class="fa fa-pencil"></i></a>
                  <a data-toggle="modal" data-target="#hapus_forum<?= $row->id_forum; ?>" title="Hapus"><i class="fa fa-trash"></i></a>
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


<!-- modal edit forum -->
<?php
  foreach ($list_forum->result() as $row) {
?>
  <div class="modal fade" role="document" id="edit_forum<?= $row->id_forum; ?>" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Edit Topik Forum</h4>
        </div>
        <div class="modal-body">
          <?php echo  form_open("admin/A_diskusi/proses_forum", "", array('id_forum' => $row->id_forum)); ?>
            <div class="form-group">
              <label class="control-label"> Topik Bahasan</label>
              <textarea name="topik" class="form-control" rows="8"><?= $row->topik; ?></textarea>
            </div>
            <div class="modal-footer">
              <button type="submit" name="simpan" class="btn btn-warning"> Simpan</button>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>

<?php } ?>

<!-- Hapus Forum -->
<?php
  foreach ($list_forum->result() as $row) {
?>
  <div class="modal fade" role="document" id="hapus_forum<?= $row->id_forum; ?>" >
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Confirm Hapus Forum</h4>
        </div>
        <div class="modal-body">
          <?php echo  form_open("admin/A_diskusi/proses_forum", "", array('id_forum' => $row->id_forum)); ?>
            <p>Yakin ingin menghapus topik ini ?</p>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal"> Tidak</button>
              <button type="submit" name="hapus" class="btn btn-danger"> Ya</button>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>

<?php } ?>


<!-- Tambah Forum -->
<div class="modal fade" id="tambah_forum" role="document">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" class="close">&times;</button>
        <h4>Tambah Topik Ke Forum</h4>
     </div>
     <?php echo form_open('admin/A_diskusi/proses_forum'); ?>
       <div class="modal-body">
         <div class="form-group">
          <label class="control-label">Topik Bahasan</label>
           <textarea name="topik" placeholder="Apa yang anda pikirkan ?" rows="8" class="form-control"></textarea>
         </div>
         <div class="modal-footer">
           <button type="submit" name="tambah" class="btn btn-primary">Tambah Topik</button>
         </div>
       </div>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>