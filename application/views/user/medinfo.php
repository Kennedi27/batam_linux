<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Divisi Media dan Informasi</title>
	<link rel="stylesheet" href="<?= base_url('template/swiper/swiper-bundle.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('template/css/style5.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('template/css/font-awesome.min.css'); ?>">
</head>
<body>
	<div id="container-body">
		<div class="nav-menu">
			<div class="turn_back"><a href="<?= base_url('/'); ?>"><i class="fa fa-reply" aria-hidden="true"></i></a>
			</div>
			<div class="active_division">
				<div class="photo_div">
					<img src="<?= base_url('template/images/Logo_divisi/Medinfo.png'); ?>" alt="Divisi Medinfo">
				</div>
				<div class="capt_photo_div">
					<p>Example Nama<br><span>Posisi Sekarang</span></p>
				</div>
			</div>
			<div class="other_info">
				<ul>
					<li class="icon-left"><a href=""><i class="fa fa fa-envelope"></i></a></li>
					<li class="icon-left"><a href=""><i class="fa fa-group"></i> <span>50</span></a></li>		
					<li class="icon-left"><a href=""><i class="fa fa-phone"></i> <span>+62 xxxx xxxx xxx</span></a></li>
					<li class="social-right" style="margin-right: 10px;"><a href=""><i class="fa fa-facebook"></i></a></li>
					<li class="social-right"><a href=""><i class="fa fa-twitter"></i></a></li>
					<li class="social-right"><a href=""><i class="fa fa-instagram"></i></a></li>
					<li class="social-right"><a href=""><i class="fa fa-youtube-play"></i></a></li>
				</ul>
			</div>
		</div>
		<div id="box-content">
			<div class="side-left">
				<div class="logo1">
					<img src="<?= base_url('template/images/Logo_divisi/Medinfo.png'); ?>">
					<div class="caption-logo">
						<h5>Media dan Informasi</h5>
					</div>
				</div>
				<div class="posisi_anggota"><h3>Posisi</h3></div>
				<p>Posisi Sekarang</p>
				<div class="spesialis"><h3>Deskripsi</h3></div>
				<div class="spesialis_desk">
					<p>Laki - Laki</p>
				</div>
				<div class="skill">
					<span class="ket">Softskill</span>
					<div class="persentase">
						<div class="progres" style="width: 90%;"></div>
					</div>
				</div>
				<div class="skill">
					<span class="ket">Design</span>
					<div class="persentase">
						<div class="progres" style="width: 80%;"></div>
					</div>
				</div>
				<div class="skill">
					<span class="ket">Inkscape</span>
					<div class="persentase">
						<div class="progres" style="width: 90%;"></div>
					</div>
				</div>
				<div class="skill">
					<span class="ket">Blender</span>
					<div class="persentase">
						<div class="progres" style="width: 70%;"></div>
					</div>
				</div>
				<div class="brand_logo">
					<ol>
						<li class="cnv"><img src="<?= base_url('template/images/logo.png'); ?>"></li>
						<li class="cnv"><img src="<?= base_url('template/images/Logo_divisi/opensource.png'); ?>"></li>
						<li class="cnv"><img src="<?= base_url('template/images/Logo_divisi/linux.png'); ?>"></li>
						<li class="cnv"><img src="<?= base_url('template/images/Logo_divisi/batam.png'); ?>"></li>
					</ol>
				</div>
				<div class="capts"><span>Divisi BLUG</span></div>
				<div class="all_division">
					<a class="<?php if($this->uri->segment(2) == "Home"){ echo "active"; } ?>" href="<?= site_url('/'); ?>"><i class="fa fa-home"></i></a>
					<a class="<?php if($this->uri->segment(2) == "DPA"){ echo "active"; } ?>" href="<?= site_url('welcome/DPA'); ?>"><img src="<?= base_url('template/images/Logo_divisi/DPA.png'); ?>" alt="Divisi DPA"></a>
					<a class="<?php if($this->uri->segment(2) == "inti"){ echo "active"; } ?>" href="<?= site_url('welcome/inti'); ?>"><img src="<?= base_url('template/images/Logo_divisi/Inti.png'); ?>" alt="Divisi Inti"></a>
					<a class="<?php if($this->uri->segment(2) == "medinfo"){ echo "active"; } ?>" href="<?= site_url('welcome/medinfo'); ?>"><img src="<?= base_url('template/images/Logo_divisi/Medinfo.png'); ?>" alt="Divisi Medinfo"></a>
					<a class="<?php if($this->uri->segment(2) == "networking"){ echo "active"; } ?>" href="<?= site_url('welcome/networking'); ?>"><img src="<?= base_url('template/images/Logo_divisi/Networking.png'); ?>" alt="Divisi Networking"></a>
					<a class="<?php if($this->uri->segment(2) == "programing"){ echo "active"; } ?>" href="<?= site_url('welcome/programing'); ?>"><img src="<?= base_url('template/images/Logo_divisi/Programming.png'); ?>" alt="Divisi Programing"></a>
				</div>
			</div>
			<div class="main-content">
				<div class="box-circle">
					<div class="circle-1">
						<div class="circle-2">
							<div class="circle-3">
								<div class="circle-4">
								</div>
							</div>
						</div>
					</div>
					<img src="<?= base_url('template/images/Logo_divisi/contoh.png'); ?>">
				</div>
			</div>
			<div class="side-right">
				<div class="swiper-container">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<div class="foto-anggota">
								<img src="<?= base_url('assets/images/default.png'); ?>">
							</div>
							<div class="img-details">
								<h6>Example Nama</h6>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="foto-anggota">
								<img src="<?= base_url('assets/images/default.png'); ?>">
							</div>
							<div class="img-details">
								<h6>Example Nama</h6>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="foto-anggota">
								<img src="<?= base_url('assets/images/default.png'); ?>">
							</div>
							<div class="img-details">
								<h6>Example Nama</h6>
							</div>
						</div>
						
					</div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="medsos-anggota">
					<ul>
						<li><i class="fa fa-facebook-official" aria-hidden="true"></i><a href=""> Facebook</a></li>
						<li><i class="fa fa-twitter-square"></i><a href=""> Twitter</a></li>
						<li><i class="fa fa-instagram"></i><a href=""> Instagram</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<script src="<?= base_url('template/swiper/swiper-bundle.min.js'); ?>"></script>
<script type="text/javascript">
	var swiper = new Swiper('.swiper-container',{
		effect: 'coverflow',
		grabCursor: true,
		centeredSlides: true,
		slidesPerView: 'auto',
		coverflow: {
			rotate: 25,
			stretch: 0,
			depth: 10,
			modifier: 1,
			slideShadows : true
		},
		pagination: {
        	el: '.swiper-pagination',
		},
});
</script>

</body>
</html>