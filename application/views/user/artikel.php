<section class="blog-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php foreach ($b_artikel as $tampil => $row) { ?>
          <div class="artpost">
              <a href="<?php echo site_url("welcome/artikel_detail?judul=".$row->id_artikel); ?>" style="color: black;"><img class="newpostindex rounded" src="<?php echo base_url("assets/images/artikel/".$row->gambar); ?>"></a>
              <div class="card-body">
                  <h5 class="card-title"><a href="<?php echo site_url("welcome/artikel_detail?judul=".$row->id_artikel); ?>" style="color: black;"><b><?php echo substr($row->judul, 0, 20); ?></b></a></h5>
                  <font class="card-text"><a href="<?php echo site_url("welcome/artikel_detail?judul=".$row->id_artikel); ?>" style="color: black; text-align: justify;"><?php echo substr($row->isi, 0,80); ?></a></font>
             </div>
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
              <li><a href="<?php echo site_url('u_artikel/artikel?set_kategori='.$row->jenis_kategori);?>"><?php echo $row->jenis_kategori;?><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
            <?php endforeach;?>
          </ul>
        </div>

        <div id="post-new-art">
          <h3>Terbaru</h3>
          <?php foreach ($artikel_pop as $row) { ?>
            <div class="item-post-art">
              <img src="<?php echo base_url().'assets/images/artikel/'.$row->gambar;?>" class="img-fluid art-pop" alt="blog-featured-img">
              <a style="font: Roboto; color: black; font-size: 14px; font-weight: bold;" href="<?php echo site_url('welcome/artikel_detail?judul='.$row->id_artikel); ?>"><?php echo substr($row->judul,0,40);?></a>
              <a style="font: Roboto; color: black; font-size: 12px; word-break: break-all; font-style: normal;" href="<?php echo site_url('welcome/artikel_detail?judul='.$row->id_artikel); ?>"><?php echo substr($row->isi,0,100);?><a>
            </div>
          <?php } ?>
        </div>
      </div>

    </div>
  </div>
</section>
<style type="text/css">
  .share-post {
    margin-right: 60%;
  }
  .share-post i {
    color: white;
  }
  .header-top_list {
    color: white;
  }
  #post-new-art {
    font-style: normal;
  }
  .item-post-art {
    margin-bottom: 5px;
    width: 100%;
    height: 100px; 
    display: block;
    float: left;
  }
  .post-new-art a:hover {
    color: blue;
  }
  .art-pop {
    object-fit: cover;
    width: 80px;
    height: 90px;
    float: left;
    margin-right: 10px;
  }
  .newpostindex {
    object-fit: cover;
    width: 150px;
    height: 150px;
  }
  .artpost {
    float: left;
    width: 150px;
    min-height: 300px;
    background-color: white;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 3px;
  }

  .artpost img:hover {
    background-color: black;
    opacity: 0.70;
  }
  .artpost .card-title {
    margin-top: 5px;
    font: 12pt Roboto black;
    margin-bottom: 0;
    padding-bottom: 0;
  }
  .artpost .card-text a{
    text-align: justify;
    word-wrap: break-word;
  }
  .artpost font {
    font-family: Roboto;
    font-size: 11pt;
    color: green;
    margin-top: 0;
    padding-top: 0;
    text-align: justify;
  } 
</style>