
 <section class="content-header">
    <h1>
      Tambah Artikel
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
      <li><a href="#"> Artikel</a></li>
      <li class="active"> Tambah Artikel</li>
    </ol>
  </section>

  <section class="content">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Post Artikel</h3>
      </div>

      <?php echo form_open_multipart('admin/a_artikel/proses_tambah'); ?>
        <div class="box-body">
          <div class="row">
            <div class="col-md-10">
              <input type="text" name="judul" class="form-control" placeholder="Judul berita atau artikel" required/>
            </div>
            <div class="col-md-2">
            <div class="form-group">
              <button type="submit" name="kirim" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Kirim</button>
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
                <textarea id="editor" class="editor" name="isi" required></textarea>
                  <script>
                    window.onload = function () {
                CKEDITOR.replace('editor', {
                    filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder/browse.php');?>',
                    height: '400px'             
                });
            };
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
                    <option value="">-Pilih-</option>
                    <?php
                      foreach ($list_kategori as $kategori_artikel => $tunjuk) {
                    ?>
                    <option value="<?= $tunjuk->jenis_kategori ?>"><?= $tunjuk->jenis_kategori ?></option>

                  <?php } ?>
                  </select>
              </div>

              <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" style="width: 100%;" required>
              </div>
            </div>
          </div>
        </div>
      <?php echo form_close(); ?>
  </section>