<?php
  $id_tutorial = $_GET['id_tutorial'];
?>
<section class="blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-img_block isi_tutor">
                	<?php
                		foreach ($isi_kontent as $tampil => $row) { 
                      $vid_link = $row->link;
                      if ($row->link == "") {
                  ?><img src="<?php echo base_url().'assets/images/tutorial/'.$row->gambar;?>" class="img-fluid" alt="blog-img"><?php
                  }else{ ?>
                    <iframe class="control_tutor" src="<?= str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $vid_link) ?>"></iframe>
                  <?php } ?>
						          
	                    <div class="blog-date">
	                        <span><?php echo $row->tanggal;?></span>
	                    </div>
                </div>
                <div class="blog-tiltle_block">
                    <h4 class="jdl"><a href="#"><?php echo $row->judul;?></a></h4>
                    <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $row->author;?></span> </a>  |   <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $row->kategori;?></span></a></h6>
                    <span class="des_tutor"><?php echo $row->isi;?></span>
                </div>
                <?php } ?>
            </div>	

            <div class="col-md-4">
              <form action="<?php echo site_url('');?>" method="">
                  <input type="text" name="keyword" placeholder="Search" class="blog-search" required>
                  <button type="submit" class="btn btn-warning btn-blogsearch">SEARCH</button>
              </form>
                <div class="blog-category_block">
                    <h3>Kategori</h3>
                    <ul>
                      <?php foreach ($menu_kategori as $row) : ?>
                        <li><a href="<?php echo site_url('u_tutorial/set_kategori?tag='.$row->jenis_kategori);?>"><?php echo $row->jenis_kategori;?><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                      <?php endforeach;?>
                    </ul>
                </div>
                <div class="blog-featured_post">
                    <h3>Populer</h3>
                  <?php foreach ($tutor_pop as $row) :?>
                    <div class="blog-featured-img_block">
                        <a href="<?php echo site_url('u_tutorial/detail_tutorial?id_tutorial='.$row->id_tutorial);?>"><img src="<?php echo base_url().'assets/images/tutorial/'.$row->gambar;?>" class="img-fluid" alt="blog-featured-img"></a>
                        <h6><a href="<?php echo site_url('u_tutorial/detail_tutorial?id_tutorial='.$row->id_tutorial);?>"><?php echo substr($row->judul,0,40);?></a></h6>
                        <span><a href="<?php echo site_url('u_tutorial/detail_tutorial?id_tutorial='.$row->id_tutorial);?>"><?php echo substr($row->isi,0,85);?></a></span>
                    </div>
                    <hr>
                  <?php endforeach;?>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
                <div class="blog-tiltle_block">
                    <div class="blog-icons">
                        <div class="blog-share_block">
                          <div class="pull-left"><h5>Bagikan Ke:</h5></div>
                          <div class="sharePopup">
                            <div class="share-post">
                               <?php
                                  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                                  $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                ?>
                              <a href="http://facebook.com/share.php/u=<?php echo $url; ?>" target="_blank"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a>
                              <a href="https://www.instagram.com/share.php/u=<?php echo $url; ?>" target="_blank"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a>
                              <a href="http://twitter.com/share?url=<?php echo $url; ?>" target="_blank"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs blogpost-tab-wrap" role="tablist">
                        <li class="nav-item blogpost-nav-tab">
                            <a class="nav-link active" data-toggle="tab" href="#comments" role="tab">Komentar</a>
                        </li>
                        <li class="nav-item blogpost-nav-tab">
                            <a class="nav-link" data-toggle="tab" href="#write-comment" role="tab">Tinggalkan Komentar</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                   
                    <?php echo $this->session->flashdata('msg');?>
                    <div class="blogpost-tabs">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="comments" role="tabpanel">
                              <?php
                                  $colors = array(
                                      '#ff9e67',
                                      '#10bdff',
                                      '#14b5c7',
                                      '#f98182',
                                      '#8f9ce2',
                                      '#ee2b33',
                                      '#d4ec15',
                                      '#613021',
                                  );
                                  foreach ($show_komentar as $row) :
                                  shuffle($colors);
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="blodpost-tab-img" style="background-color:<?php echo reset($colors);?>;width: 65px;height: 65px;border-radius:50px 50px 50px 50px;">
                                                    <center><h2 style="padding-top:20%;color:#fff;"><?php echo substr($row->komentar_nama,0,1);?></h2></center>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="blogpost-tab-description">
                                                    <h6><?php echo $row->komentar_nama;?></h6><small><em><?php echo date("d M Y H:i", strtotime($row->komentar_tanggal));?></em></small>
                                                    <p><?php echo $row->komentar_isi;?></p>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $komen_id = $row->komentar_id;
                                $komentar_lev2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status = '$komen_id' AND komentar_tulisan_id = '$id_tutorial' AND kategori_komentar_post = 'Tutorial' AND komentar_parent = '1'");
                                foreach ($komentar_lev2->result() as $res) :
                                    shuffle($colors);
                                    if($komen_id == $res->komentar_status){
                                  ?>
                                  <div class="row">
                                      <div class="col-md-12 offset-md-1">
                                          <div class="row">
                                              <div class="col-md-2">
                                                <div class="blodpost-tab-img" style="background-color:<?php echo reset($colors);?>;width: 65px;height: 65px;border-radius:50px 50px 50px 50px;">
                                                    <center><h2 style="padding-top:20%;color:#fff;"><?php echo substr($res->komentar_nama,0,1);?></h2></center>
                                                </div>
                                              </div>
                                              <div class="col-md-9">
                                                  <div class="blogpost-tab-description">
                                                      <h6><?php echo $res->komentar_nama;?></h6><small><em><?php echo date("d M Y H:i", strtotime($res->komentar_tanggal));?></em></small>
                                                      <p><?php echo $res->komentar_isi;?></p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                <?php } ?>
                                  <?php endforeach;?>
                                <?php endforeach;?>
                            </div>
                            <div class="tab-pane" id="write-comment" role="tabpanel">
                            <form action="<?php echo site_url('u_tutorial/tambah_komentar_tutorial') ?>" method="post">
                              <div class="row">
                                <div class="col-6">
                                  <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="komentar_nama" placeholder="Nama Lengkap" required>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="komentar_email" placeholder="Email" required>
                                  </div>
                                </div>

                                <div class="col-12">
                                  <div class="form-group">
                                    <label>Komentar Anda</label>
                                    <textarea class="form-control" name="komentar_isi" rows="6" required> </textarea>
                                  </div>
                                </div>

                                <div class="col-12">
                                  <input type="hidden" name="komentar_tulisan_id" value="<?= $id_tutorial; ?>" required>
                                  <button type="submit" name="tambah_koment" class="btn btn-warning">Kirim Komentar</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>

</section>
<style type="text/css">
  .share-post {
    margin-right: 70%;
  }
  .share-post i {
    color: white;
  }
  .header-top_address {
    color: white;
  }
  .isi_tutor .img-fluid {
    width: 100%;
  }
  .control_tutor {
    width: 100%;
    height: 500px;
  }
  .blog-tiltle_block {
    margin-left: 0;
    padding-left: 0;
  }
  .blog-featured_post h6 {
    font-weight: bold;
  }
  .blog-featured_post span {
    word-break: break-all;
  }
  .blog-featured_post img {
    object-fit: cover;
    width: 35%;
    height: 95px;
  }
  .blog-tiltle_block .des_tutor {
    text-indent: 25px;
    text-align: justify;
    word-wrap: break-word;
  }
  .blog-tiltle_block .jdl {
    font-size: 20pt;
  }

</style>