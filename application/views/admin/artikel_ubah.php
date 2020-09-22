<title>BLUG | Edit Artikel</title>
 <section class="content-header">
    <h1>
      Edit Artikel
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
      <li><a href="#"></i> Artikel</a></li>
      <li class="active"> Edit Artikel</li>
    </ol>
  </section>

  <section class="content">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Post Artikel</h3>
      </div>
      <?php foreach ($tampil as $art => $row) { ?>
      <?php echo form_open_multipart('admin/a_artikel/proses_edit', '', array('acuan' => $row->id_artikel, 'old_photo' => $row->gambar)); ?>
        <div class="box-body">
          <div class="row">
            <div class="col-md-10">
              <input type="text" name="judul" class="form-control" value="<?= $row->judul; ?>" required/>
            </div>
            <div class="col-md-2">
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-flat pull-right" name="publish"><span class="fa fa-pencil"></span> Kirim</button>
            </div>
            </div>
          </div>
        </div>
    </div>

        <div class="row">
          <div class="col-md-8">
            <div class="box box-danger">
              <div class="box-header">
                <h3 class="box-title">Artikel</h3>
              </div>
              <div class="box-body">
                <textarea id="editor" class="editor" name="isi" required><?= $row->isi; ?></textarea>
                  <script>
                    window.onload = function () {                
                    CKEDITOR.replace('editor');
                    }
                  </script>
              </div>
            </div>
          </div>

        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Pengaturan Lainnya</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Kategori</label>
                  <select class="form-control select2" name="kategori" style="width: 100%;" required>
                    <?php
                      foreach ($list_kategori as $kategori_artikel => $tunjuk) {
                        if ($row->kategori == $tunjuk->jenis_kategori) {
                    ?>
                    <option value="<?= $tunjuk->jenis_kategori ?>" selected><?= $tunjuk->jenis_kategori ?></option>
                  <?php
                  }else{
                    ?><option value="<?= $tunjuk->jenis_kategori ?>"><?= $tunjuk->jenis_kategori ?></option><?php
                  } 
                }
                ?>
                  </select>
              </div>

              <div class="form-group">
                <label>Gambar</label><br>
                <img src="<?php echo base_url('assets/images/artikel/'.$row->gambar) ?>" height = "100">
                <input type="file" name="gambar" style="width: 100%;">
              </div>
            </div>
          </div>
        </div>
      <?php echo form_close(); ?>
    <?php } ?>
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

  </section>