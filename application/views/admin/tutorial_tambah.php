
 <section class="content-header">
    <h1>
      Tambah tutorial
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
      <li><a href="#"> tutorial</a></li>
      <li class="active"> Tambah tutorial</li>
    </ol>
  </section>

  <section class="content">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Post tutorial</h3>
      </div>

      <?php echo form_open_multipart('admin/a_tutorial/proses_tambah'); ?>
        <div class="box-body">
          <div class="row">
            <div class="col-md-10">
              <input type="text" name="judul" class="form-control" placeholder="Judul berita atau tutorial" required/>
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
                <h3 class="box-title">Tutorial</h3>
              </div>
              <div class="box-body">
                <textarea id="editor" class="editor" name="isi" required></textarea>
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
                    <option value="">-Pilih-</option>
                    <?php
                      foreach ($list_kategori as $kategori_tutorial => $tunjuk) {
                    ?>
                    <option value="<?= $tunjuk->jenis_kategori ?>"><?= $tunjuk->jenis_kategori ?></option>

                  <?php } ?>
                  </select>
              </div>

              <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" style="width: 100%;" required>
              </div>

              <div class="form-group">
                <label>Link Video</label>
                <textarea class="form-control" style="width: 100%;" name="link"></textarea>
              </div>
            </div>
          </div>
        </div>
      <?php echo form_close(); ?>
  </section>