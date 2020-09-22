<?php
    $this->load->view('template/slideshow');
?>
<section class="clearfix" style="margin-top: 5%;">
<div class="container">
    <div class="row">
        <div class="col-md-5">
          <div style="position: relative;">
              <div id="bingkailogokiri"></div>
              <img class="logobody1" src="<?= base_url('template/images/logo.png'); ?>">
              <div id="bingkailogokanan"></div>
          </div>
          
        </div>

        <div class="col-md-7">
            <div id="apablug">
              <font>Apa itu Batam Linux User Group (BLUG)</font>
              <p></p>
              <p>Batam Linux User Group (BLUG) adalah Organisasi pengguna Linux terbesar di Kota Batam dengan kegiatan rutin Belajar dan Berbagi (BnB).</p>
              <p>BLUG aktif dalam mengadakan berbagai kegiatan diantaranya Belajar dan Berbagi (BnB) mingguan secara rutin, mengadakan event perlombaaan seperti OSC (Open Source Competition), mengadakan acara Seminar Nasional, menggelar acara FossDay, melakukan Bakti Sosial kepada masyarakat, mengadakan kegiatan yang membuat BLUG lebih dikenal masyarakat melalui BlugSukan, dan selalu mengadakan Pengkaderan Anggota setiap setahun sekali dan kami juga aktif dalam mengangkat berbagai macam permasalahan yang menyangkut dunia IT.</p>
              <p>Organisasi BLUG terbuka untuk umum tidak hanya pengurus dan anggota BLUG saja, namun untuk setiap orang yang ingin belajar dan berbagi bersama BLUG.</p>
            <font>Apa saja misi dari batam linux user group ?</font>
            </div>
              <ol id="misiblug">
                  <li>Menciptakan kreasi Open Source dan mengembangkan kreativitas para pengguna Open Source.</li>
                  <li>Memperkenalkan dan mensosialisasikan penggunaan Linux dan Open Source kepada masyarakat melalui kegiatan rutin yang diadakan.</li>
                  <li>Secara rutin mengadakan kegiatan belajar dan berbagi ilmu pengetahuan IT khususnya Linux dan Open Source guna meningkatkan kualitas SDM antar anggota maupun masyarakat umum.</li>
                  <li>Menjalin komunikasi serta mempererat hubungan antar komunitas Linux dan Open Source di Indonesia khususnya di kota Batam.</li>
                  <li>Mendukung  sepenuhnya gerakan Indonesian Go Open Source di Indonesia dan ikut serta dalam mengembangkan dan mengimplementasikan Linux dan Open Source di berbagai bidang.</li>
                  <li>Melakukan eksplorasi terhadap Open Source terutama di sistem operasi.</li>
              </ol>
        </div>
    </div>
</div>
</section>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v6.0"></script>

<!-- Artikel -->
<section class="our_courses" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row" style="background-color: transparent;">
            <div class="col-md-9" style="padding-top: 15px; background-color: white; padding-bottom: 5px; box-shadow: 3px 1px 3px 3px lightgrey;">
                <center style="font-weight: bold; color: #797DF3; margin-bottom: 20px;">NEW POST</center>
                <h4 style="font-weight: bold; color: #1EAAD7; margin-left: 10px; margin-bottom: 10px;">Article</h4>
                  <div class="row">
                    <?php foreach ($b_artikel as $tampil => $row) { ?>
                      <div class="col-md-3">
                        <div class="artpost">
                            <a href="<?php echo site_url("welcome/artikel_detail?judul=".$row->id_artikel); ?>" style="color: black;"><img class="newpostindex rounded" src="<?php echo base_url("assets/images/artikel/".$row->gambar); ?>"></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php echo site_url("welcome/artikel_detail?judul=".$row->id_artikel); ?>" style="color: black;"><b><?php echo substr($row->judul, 0, 20); ?></b></a></h5>
                                <font class="card-text"><a href="<?php echo site_url("welcome/artikel_detail?judul=".$row->id_artikel); ?>" style="color: black; text-align: justify;"><?php echo substr($row->isi, 0,80); ?></a></font>
                           </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>

                  <h4 style="font-weight: bold; color: #1EAAD7; margin-left: 15px; margin-bottom: 10px;">Event</h4>
                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner kartu row w-100 mx-auto">
                      <div class="carousel-item items_s col-md-3 active">
                        <div class="card">
                          <img class="card-img-top img-fluid slide-event-item" src="https://ctftime.org/media/team/Screenshot_2020-02-11-01-14-42-52.png" alt="BLUG">
                          <div class="card-body">
                            <h4 class="card-title">Event - Event Yang Akan Berlangsung</h4>
                            <b class="card-text">Jangan Sampai Ketinggalan. Update terus disini</b>
                            <p class="card-text"><small class="text-muted">By BLUG</small></p>
                          </div>
                        </div>
                      </div>

                    <?php foreach ($event as $tampil => $row) { ?>
                      <div class="carousel-item items_s col-md-3">
                        <div class="card">
                          <a href="<?= site_url('u_kegiatan/detail_event2?item_kegiatan='.$row->id_kegiatan) ?>"><img class="card-img-top img-fluid slide-event-item" src="<?= base_url('assets/images/kegiatan/'.$row->poster); ?>" alt="<?= $row->nama; ?>"></a>
                          <div class="card-body">
                            <h4 class="card-title"><?= ucfirst($row->nama); ?></h4>
                            <b class="card-text"><?= substr($row->deskripsi, 0, 100) ?></b>
                            <?php
                              if ($row->tgl_selesai == "") {
                                $terlaksana = $row->tgl_mulai;
                              }else{
                                $terlaksana = $row->tgl_mulai ." - ". $row->tgl_selesai;
                              }
                            ?>
                            <p class="card-text"><small class="text-muted"><?= $row->tempat." ".$terlaksana ?></small></p>
                          </div>
                        </div>
                      </div>
                    <?php } ?>

                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>

                  </div>
                </div>

            </div>
            <div class="col-md-3">
               <div style="padding: 0; margin: 0; box-shadow: 3px 1px 3px 3px lightgrey;" class="fb-page" data-href="https://id-id.facebook.com/batamlinux" data-tabs="timeline" data-width="280" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://id-id.facebook.com/batamlinux" class="fb-xfbml-parse-ignore"><a href="https://id-id.facebook.com/batamlinux">Batam Linux User Group</a></blockquote></div>
               <div id="populer-menu" style="box-shadow: 3px 1px 3px 3px lightgrey;">
                   <h4>Post Populer</h4>
                   <hr>
                    <?php
                    $no = 1;
                    foreach ($menu_pops as $tampil => $row) { 
                    ?>
                      <div class="container-popular-beranda">
                        <div class="box-populer-menu"><b><?= $no++; ?></b></div>
                        <font><a href="<?php echo site_url("welcome/artikel_detail?judul=".$row->judul); ?>" style="color: black;"><?php echo substr($row->judul, 0, 55); ?></a></font>
                    </div>
                    <?php } ?>
                  
               </div>
           </div>
       </div>
    </div>  
</section>


<!-- Proker Blug -->
<section class="clearfix about about-style2" style="background-color: #F0C415;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center;">Kerja Tahunan BLUG</h2>
                <center>Click And Find Out</center>
            </div>
                    <div class="col-md-2" style="margin-top: 50px;">
                        <img height="50px" id="pengkaderan" src="<?php echo base_url('template/images/pengkaderan.png')?>" class="img-fluid tunjuk prok">
                        <div id="pengkaderan2" class="segitiga"></div>
                    </div>
                    <div class="col-md-2" style="margin-top: 50px;">
                        <img height="50px" id="osc" src="<?php echo base_url('template/images/osc.png')?>" class="img-fluid tunjuk bray">
                        <div id="osc2" class="segitiga"></div>
                    </div>
                     <div class="col-md-2" style="margin-top: 50px;">
                        <img height="50px" id="blugsukan" src="<?php echo base_url('template/images/blugsukan.png')?>" class="img-fluid tunjuk prok">
                        <div id="blugsukan2" class="segitiga"></div>
                    </div>
                     <div class="col-md-2" style="margin-top: 50px;">
                        <img height="50px" id="fossday" src="<?php echo base_url('template/images/fossday.png')?>" class="img-fluid tunjuk prok">
                        <div id="fossday2" class="segitiga"></div>
                    </div>
                     <div class="col-md-2" style="margin-top: 50px;">
                        <img height="50px" id="baksos" src="<?php echo base_url('template/images/baksos.png')?>" class="img-fluid tunjuk prok">
                        <div id="baksos2" class="segitiga"></div>
                    </div>
                     <div class="col-md-2" style="margin-top: 50px;">
                        <img height="50px" id="hbf" src="<?php echo base_url('template/images/hbf.png')?>" class="img-fluid tunjuk prok">
                        <div id="hbf2" class="segitiga"></div>
                    </div>
            </div>
    </div>
</section>
<div id="osc1" >
    <section class="clearfix desk-event" style="box-shadow:  1px 3px lightgrey;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <h2>OSC</h2>
                   <div class="row" style="border: 2px solid yellowgreen; width: 20%;"></div>
                   <p style="text-align: justify;">Adalah program kerja tahunan yang dilaksanakan oleh seluruh pengurus BLUG 2018 yang bertujuan untuk memberikan kesempatan dan mengajak kepada mahasiswa untuk menunjukkan keahliannya dalam menggunakan aplikasi open source dan sistem operasi Linux. OSC tahun 2018 ini merupakan kompetis  yang diadakan untuk yang ke-4 kalinya setelah OSC ketiga yang diadakan tahun 2017 yang bertemakan “Hack Main System”. Berbeda dengan tahun sebelumnya, OSC pada tahun 2018 ini akan bertaraf Internasional dengan target peserta adalah mahasiswa Perguruan Tinggi. Tujuan diadakan kompetisi ini agar peserta dapat menguji seberapa jauh keahlian yang telah mereka pelajari dan mengetahui software/program alternatif dari produk berbayar yang digunakan secara illegal.</p>
                </div>

                <div class="col-md-6">
                  <div id="proker-blug-OSC" class="carousel slide carousel-fade" data-ride="carousel" style="float: right;">
                    <div class="carousel-inner full-slide-event">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="http://localhost/batam_linux/assets/images/kegiatan/Capture001.png" alt="First slide">
                      </div>

                     <!-- comot gambar dari db -->
                      <div class="carousel-item">
                     <?php foreach ($slide_OSC->result() as $kegiatan_osc) {
                        echo "<img class='d-block w-100' src='".base_url('assets/images/slideshow/'.$kegiatan_osc->gambar)."''>"; 
                     } ?>
                     </div>
                    </div>
                    <a class="carousel-control-prev" href="#proker-blug-OSC" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#proker-blug-OSC" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>

            </div>
        </div>
    </section>
</div>

<div id="fossday1">
    <section class="clearfix desk-event" style="box-shadow:  1px 3px lightgrey;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <h2>Fossday</h2><div class="row" style="border: 2px solid yellowgreen; width: 35%;"></div>
                   <p style="text-align: justify;">Adalah program kerja tahunan yang dilaksanakan oleh seluruh pengurus dimana BLUG mengadakan pameran aplikasi open source dan sistem operasi Linux. Manfaat dari FOSS day yaitu untuk mengenalkan kepada masyarakat bahwa aplikasi open source dan sistem operasi Linux tidak kalah dalam hal kualitas dibanding dengan aplikasi dan sistem operasi berbayar.</p>
                </div>

                 <div class="col-md-6">
                  <div id="carouselExampleFade-1" class="carousel slide carousel-fade" data-ride="carousel" style="float: right;">
                    <div class="carousel-inner full-slide-event">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="http://localhost/batam_linux/assets/images/kegiatan/Capture001.png" alt="First slide">
                      </div>

                      <!-- Comot Gambar dari DB -->
                      <div class="carousel-item">
                     <?php foreach ($slide_fossday->result() as $kegiatan_fossday) {
                        echo "<img class='d-block w-100' src='".base_url('assets/images/slideshow/'.$kegiatan_fossday->gambar)."''>"; 
                     } ?>
                     </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade-1" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade-1" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="baksos1">
    <section class="clearfix desk-event" style="box-shadow:  1px 3px lightgrey;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <h2>Bakti Sosial</h2><div class="row" style="border: 2px solid yellowgreen; width: 45%;"></div>
                   <p style="text-align: justify;">Bakti Sosial merupakan program kerja yang dilaksanakan sekali setahun yang bertujuan untuk mempererat hubungan kekeluargaan antara mahasiswa dengan masyarakat dan mengaplikasikan ilmu pengetahuan dan keterampilan mahasiswa untuk membantu sesama.</p>
                </div>

                 <div class="col-md-6">
                  <div id="carouselExampleFade-2" class="carousel slide carousel-fade" data-ride="carousel" style="float: right;">
                    <div class="carousel-inner full-slide-event">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="http://localhost/batam_linux/assets/images/kegiatan/Capture001.png" alt="First slide">
                      </div>
                        <!-- Comot Gambar dari DB -->
                        <div class="carousel-item">
                       <?php foreach ($slide_baksos->result() as $kegiatan_baksos) {
                          echo "<img class='d-block w-100' src='".base_url('assets/images/slideshow/'.$kegiatan_baksos->gambar)."''>"; 
                       } ?>
                       </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade-2" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade-2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>

            </div>
        </div>
    </section>
</div>

<div id="pengkaderan1">
    <section class="clearfix desk-event" style="box-shadow:  1px 3px lightgrey;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <h2>Pengkaderan</h2>
                   <div class="row" style="border: 2px solid yellowgreen; width: 45%;"></div>
                   <p style="text-align: justify;">Merupakan program kerja yang dilaksanakan setiap tahun, tepatnya sesaat setelah open recruitment Ormawa Politeknik Negeri Batam oleh seluruh pengurus BLUG dengan tujuan untuk menciptakan generasi kepengurusan BLUG selanjutnya yang benar-benar memiliki minat, pengetahuan serta pemahaman tentang sistem organisasi BLUG itu sendiri dan juga GNU/Linux dan Open Source software tentunya. Sehingga diharapkan dengan adanya program kerja kaderisasi ini, dapat dihasilkan regenerasi kepengurusan baru yang benar-benar siap melanjutkan estafet kepengurusan di periode selanjutnya. </p>
                </div>

                 <div class="col-md-6">
                  <div id="carouselExampleFade-3" class="carousel slide carousel-fade" data-ride="carousel" style="float: right;">
                    <div class="carousel-inner full-slide-event">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="http://localhost/batam_linux/assets/images/kegiatan/Capture001.png" alt="First slide">
                      </div>
                        <!-- Comot Gambar dari DB -->
                      <div class="carousel-item">
                     <?php foreach ($slide_pengkaderan->result() as $kegiatan_pengkaderan) {
                        echo "<img class='d-block w-100' src='".base_url('assets/images/slideshow/'.$kegiatan_pengkaderan->gambar)."''>"; 
                     } ?>
                     </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade-3" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade-3" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>

            </div>
        </div>
    </section>
</div>

<div id="hbf1">
    <section class="clearfix desk-event" style="box-shadow:  1px 3px lightgrey;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <h2>Hacktober Fest</h2>
                   <div class="row" style="border: 2px solid yellowgreen; width: 70%;"></div>
                   <p style="text-align: justify;">Hacktoberfest adalah sebuah gerakan untuk berkontribusi pada proyek open source. Gerakan yang mengajak siapa saja yang peduli dan mau berkontribusi pada proyek open source di Github. Acara ini berlangsung selama bulan oktober di seluruh dunia. Di mana pun Anda berada, Anda bisa mengikuti Kegiatan ini.</p>

                </div>
                 <div class="col-md-6">
                  <div id="carouselExampleFade-4" class="carousel slide carousel-fade" data-ride="carousel" style="float: right;">
                    <div class="carousel-inner full-slide-event">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="http://localhost/batam_linux/assets/images/kegiatan/Capture001.png" alt="First slide">
                      </div>
                      <!-- Comot Gambar dari DB -->
                      <div class="carousel-item">
                     <?php foreach ($slide_hacktoberfresh->result() as $kegiatan_hacktoberfresh) {
                        echo "<img class='d-block w-100' src='".base_url('assets/images/slideshow/'.$kegiatan_hacktoberfresh->gambar)."''>"; 
                     } ?>
                     </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade-4" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade-4" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="blugsukan1">
    <section class="clearfix desk-event" style="box-shadow:  1px 3px lightgrey;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <h2>Blugsukan</h2><div class="row" style="border: 2px solid yellowgreen; width: 45%;"></div>
                   <p style="text-align: justify;">Merupakan program kerja tahunan devisi education yg dilaksanakan 2 kali setahun, diprogram kerja ini kami mensosialisasikan kepada masyarakat tentang manfaat,kelebihan,dan kekurangan penggunaan IT terhadap masyarakat. sehingga penggunaan IT berdampak positif kedalam kehidupan sehari – hari.</p>

                </div>

                 <div class="col-md-6">
                  <div id="carouselExampleFade-5" class="carousel slide carousel-fade" data-ride="carousel" style="float: right;">
                    <div class="carousel-inner full-slide-event">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="http://localhost/batam_linux/assets/images/kegiatan/Capture001.png" alt="First slide">
                      </div>
                      <!-- Comot Gambar dari DB -->
                      <div class="carousel-item">
                     <?php foreach ($slide_blugsukan->result() as $kegiatan_blugsukan) {
                        echo "<img class='d-block w-100' src='".base_url('assets/images/slideshow/'.$kegiatan_blugsukan->gambar)."''>"; 
                     } ?>
                     </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade-5" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade-5" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript"> 
    $(document).ready(function() {
    $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".items_s").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".items_s")
            .eq(i)
            .appendTo(".kartu");
        } else {
          $(".items_s")
            .eq(0)
            .appendTo($(this).find(".kartu"));
            }
          }
        }
      });
    });
</script>
<script type="text/javascript">
    function osc(){
        // document.getElementById("osc1").style.display = "block";
        $('#osc1').show(2000);
        document.getElementById("blugsukan1").style.display = "none";
        document.getElementById("baksos1").style.display = "none";
        document.getElementById("fossday1").style.display = "none";
        document.getElementById("pengkaderan1").style.display = "none";
        document.getElementById("hbf1").style.display = "none";

        // document.getElementById("osc2").style.display = "block";
        $('#osc2').show(2000);
        document.getElementById("blugsukan2").style.display = "none";
        document.getElementById("baksos2").style.display = "none";
        document.getElementById("fossday2").style.display = "none";
        document.getElementById("pengkaderan2").style.display = "none";
        document.getElementById("hbf2").style.display = "none";
    }

    function blugsukan(){
        document.getElementById("osc1").style.display = "none";
        // document.getElementById("blugsukan1").style.display = "block";
        $('#blugsukan1').show(2000);
        document.getElementById("baksos1").style.display = "none";
        document.getElementById("fossday1").style.display = "none";
        document.getElementById("pengkaderan1").style.display = "none";
        document.getElementById("hbf1").style.display = "none";

        document.getElementById("osc2").style.display = "none";
        // document.getElementById("blugsukan2").style.display = "block";
        $('#blugsukan2').show(2000);
        document.getElementById("baksos2").style.display = "none";
        document.getElementById("fossday2").style.display = "none";
        document.getElementById("pengkaderan2").style.display = "none";
        document.getElementById("hbf2").style.display = "none";
    }

    function baksos(){
        document.getElementById("osc1").style.display = "none";
        document.getElementById("blugsukan1").style.display = "none";
        // document.getElementById("baksos1").style.display = "block";
        $('#baksos1').show(2000);
        document.getElementById("fossday1").style.display = "none";
        document.getElementById("pengkaderan1").style.display = "none";
        document.getElementById("hbf1").style.display = "none";

        document.getElementById("osc2").style.display = "none";
        document.getElementById("blugsukan2").style.display = "none";
        // document.getElementById("baksos2").style.display = "block";
        $('#baksos2').show(2000);
        document.getElementById("fossday2").style.display = "none";
        document.getElementById("pengkaderan2").style.display = "none";
        document.getElementById("hbf2").style.display = "none";
    }

    function fossday(){
        document.getElementById("osc1").style.display = "none";
        document.getElementById("blugsukan1").style.display = "none";
        document.getElementById("baksos1").style.display = "none";
        // document.getElementById("fossday1").style.display = "block";
        $('#fossday1').show(2000);
        document.getElementById("pengkaderan1").style.display = "none";
        document.getElementById("hbf1").style.display = "none";

        document.getElementById("osc2").style.display = "none";
        document.getElementById("blugsukan2").style.display = "none";
        document.getElementById("baksos2").style.display = "none";
        // document.getElementById("fossday2").style.display = "block";
        $('#fossday2').show(2000);
        document.getElementById("pengkaderan2").style.display = "none";
        document.getElementById("hbf2").style.display = "none";
    }

    function pengkaderan(){
        document.getElementById("osc1").style.display = "none";
        document.getElementById("blugsukan1").style.display = "none";
        document.getElementById("baksos1").style.display = "none";
        document.getElementById("fossday1").style.display = "none";
        // document.getElementById("pengkaderan1").style.display = "block";
        $('#pengkaderan1').show(2000);
        document.getElementById("hbf1").style.display = "none";

        document.getElementById("osc2").style.display = "none";
        document.getElementById("blugsukan2").style.display = "none";
        document.getElementById("baksos2").style.display = "none";
        document.getElementById("fossday2").style.display = "none";
        // document.getElementById("pengkaderan2").style.display = "block";
        $('#pengkaderan2').show(2000);
        document.getElementById("hbf2").style.display = "none";
    }

    function hbf(){
        document.getElementById("osc1").style.display = "none";
        document.getElementById("blugsukan1").style.display = "none";
        document.getElementById("baksos1").style.display = "none";
        document.getElementById("fossday1").style.display = "none";
        document.getElementById("pengkaderan1").style.display = "none";
        // document.getElementById("hbf1").style.display = "block";
        $('#hbf1').show(2000);

        document.getElementById("osc2").style.display = "none";
        document.getElementById("blugsukan2").style.display = "none";
        document.getElementById("baksos2").style.display = "none";
        document.getElementById("fossday2").style.display = "none";
        document.getElementById("pengkaderan2").style.display = "none";
        // document.getElementById("hbf2").style.display = "block";
        $('#hbf2').show(2000);
    }
    window.onload = function() {fossday();}
    document.getElementById("osc").onclick = function() {osc();}
    document.getElementById("blugsukan").onclick = function() {blugsukan();}
    document.getElementById("baksos").onclick = function() {baksos();}
    document.getElementById("fossday").onclick = function() {fossday();}
    document.getElementById("pengkaderan").onclick = function() {pengkaderan();}
    document.getElementById("hbf").onclick = function() {hbf();}

</script>

<style type="text/css">
    #navbaru1 {
      z-index: 1;
      position: absolute;
      width: 100%;
    }
    .transparan-nav {
      background: rgba(255, 255, 255, 0.15);
    }
    .transparan-nav .header-top_address span{
      color: black;
      font-weight: bold;
      }
    .transparan-nav .header-top_address font{
      color: black;
    }
    .transparan-nav .header-top_login2 font {
       color: black;
    }
    .transparan-nav .header-top_login font {
       color: black;
    }
    .transparan-nav a:hover {
      font-weight: bold;
      color: black;
    }
</style>

<style type="text/css">
  .full-slide-event img{
    object-fit: all;
    width: 100%;
    margin-top: 10%;
  }
  .desk-event {
    margin-top: 20px;
    padding-top: 20px;
    margin-bottom: 20px;
    padding-bottom: 20px;
  }
  .slide-event-item {
    object-fit: all;
    height: 200px;
    width: 200px;
  }
  #populer-menu {
    background-color: white;
    margin-top: 20px;
    min-height: 120px
  }
  .container-popular-beranda {
    padding-bottom: 10px;
    height: 70px;
    width: 100%;
    padding-right: 8px;
    margin-bottom: 5px;
  }
  #populer-menu h4 {
    color: #1EAAD7;
    font-weight: bold;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 0;
    margin-bottom: 0;
  }
  #populer-menu hr {
    height: 6px;
    background-color: #797DF3;
    width: 138px;
    padding-top: 0;
    margin-top: 2px ;
  }
  .container-popular-beranda .box-populer-menu {
    width: 50px;
    float: left;
    height: 70px;
    background: rgba(121, 125, 243, 0.8);
    text-align: center;
    line-height: 70px;
    margin-right: 5px;
  }
  .container-popular-beranda .box-populer-menu b {
    color: white;
    font-size: 36px;
  }
  #populer-menu font {
    font: Roboto;
    font-weight: bold;
    font-size: 14px;
    word-wrap: break-word;
  }
  .artpost {
    float: left;
    min-height: 350px;
    background-color: white;
    margin-bottom: 3px;
    width: 100%;
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
  #misiblug {
    list-style: none;
    padding: 0;
  }
  #misiblug li {
  padding-left: 1.3em;
  font-family: Roboto;
  font-size: 12px;
  text-align: justify;
  }
  #misiblug li:before {
    content: "\f00c"; /* FontAwesome Unicode */
    font-family: FontAwesome;
    display: inline-block;
    margin-left: -1.3em; /* same as padding-left set on li */
    width: 1.3em; /* same as padding-left set on li */
    color: #18EB21;
  }
  #apablug p{
    text-align: justify;
    font-size: 12px;
    font-family: roboto;
    text-indent: 10px;
  }
  #apablug font{
    font-size: 13px;
    font-family: Roboto;
    color: #4C52EF;
    font-weight: bold;
  }
  #bingkailogokiri {
    width: 26px;
    height: 230px;
    background-color: #2179CA;
    position: absolute;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
  }
  #bingkailogokanan {
    width: 26px;
    height: 275px;
    background-color: #1EAAD7;
    position: absolute;
    margin-left: 94%;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    margin-top: 45%;
  }
  .logobody1 {
    width: 90%;
    position: absolute;
    margin-top: 7%;
    margin-left: 4%;
  }
  .newpostindex {
    object-fit: cover;
    width: 100% ;
    height: 200px;
  }
  #osc1 {
      display: none;
  }
  #osc2 {
    display: none;
  }
  #blugsukan1{
    display: none;
  }
  #blugsukan2{
    display: none;
  }
  #baksos1{
    display: none;
  }
  #baksos2{
    display: none;
  }
  #pengkaderan1{
    display: none;
  }
  #pengkaderan2{
    display: none;
  }
  #hbf1{
    display: none;
  }
  #hbf2{
    display: none;
  }
  .segitiga {
       width:0;
       height:0;
       border-bottom:80px solid white;
       border-left:40px solid transparent;
       border-right:40px solid transparent;
       margin-left: 20%;
       position: absolute;
       margin-top: 5px;
  }

  .tunjuk {
      cursor: pointer;
  }
  .prok {
        opacity: 0.25;
        filter: alpha(opacity=25);
  }
  .prok:hover{
      opacity: 0.5;
      filter: alpha(opacity=25);
  }
  .bray {
      opacity: 0.7;
      filter: alpha(opacity=70);
  }
 .bray:hover {
      opacity: 0.85;
      filter: alpha(opacity=85);
  }

  .kartu .card-title {
      text-align: justify;
      padding-top: 15px;
      font: Roboto;
      font-size: 14px;
      font-weight: bold;
      padding-bottom: 0;
      margin-top: 0;
  }
  .kartu .card-text {
      text-align: justify;
      padding-top: 15px;
      font: Roboto;
      font-weight: lighter;
      font-size: 12px;
      padding-top: 0;
      margin-top: 0;
  }
/*Slide Card*/
  @media (min-width: 768px) {
  /* show 4 items */
  .kartu .active,
  .kartu .active + .items_s,
  .kartu .active + .items_s + .items_s,
  .kartu .active + .items_s + .items_s + .items_s {
    display: block;
  }

  .kartu .items_s.active:not(.carousel-item-right):not(.carousel-item-left),
  .kartu .items_s.active:not(.carousel-item-right):not(.carousel-item-left) + .items_s,
  .kartu .items_s.active:not(.carousel-item-right):not(.carousel-item-left) + .items_s + .items_s,
  .kartu .items_s.active:not(.carousel-item-right):not(.carousel-item-left) + .items_s + .items_s + .items_s {
    transition: none;
  }

  .kartu .carousel-item-next,
  .kartu .carousel-item-prev {
    position: relative;
    transform: translate3d(0, 0, 0);
  }

  .kartu .active.items_s + .items_s + .items_s + .items_s + .items_s {
    position: absolute;
    top: 0;
    right: -33.3333%;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* left or forward direction */
  .kartu .active.carousel-item-left + .carousel-item-next.carousel-item-left,
  .kartu .carousel-item-next.carousel-item-left + .items_s,
  .kartu .carousel-item-next.carousel-item-left + .items_s + .items_s,
  .kartu .carousel-item-next.carousel-item-left + .items_s + .items_s + .items_s,
  .kartu .carousel-item-next.carousel-item-left + .items_s + .items_s + .items_s + .items_s {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  /* farthest right hidden item must be abso position for animations */
  .kartu .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
  }

  /* right or prev direction */
  .kartu .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
  .kartu .carousel-item-prev.carousel-item-right + .items_s,
  .kartu .carousel-item-prev.carousel-item-right + .items_s + .items_s,
  .kartu .carousel-item-prev.carousel-item-right + .items_s + .items_s + .items_s,
  .kartu .carousel-item-prev.carousel-item-right + .items_s + .items_s + .items_s + .items_s {
    position: relative;
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }
}

</style>