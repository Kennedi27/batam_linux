<!DOCTYPE html>
<html>
<head>
	<title>Dewan Penasihat Agung (DPA)</title>
	<link rel="shorcut icon" href="<?= base_url('template/images/Logo_divisi/DPA.png'); ?>">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('template/css/style4.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('template/css/font-awesome.min.css'); ?>">
</head>
<body>
	<div class="nav">
		<div class="huff">
			<ul>
				<li><a href="<?= site_url('/'); ?>"><i class="fa fa-home white"></i></a></li>
				<li><a class="<?php if($this->uri->segment(2) == "dpa"){ echo "active"; } ?>" href="<?= site_url('welcome/dpa'); ?>"><img src="<?= base_url('template/images/Logo_divisi/DPA.png'); ?>" alt="Divisi Inti"></a></li>
				<li><a class="<?php if($this->uri->segment(2) == "inti"){ echo "active"; } ?>" href="<?= site_url('welcome/inti'); ?>"><img src="<?= base_url('template/images/Logo_divisi/Inti.png'); ?>" alt="Divisi Inti"></a></li>
				<li><a class="<?php if($this->uri->segment(2) == "medinfo"){ echo "active"; } ?>" href="<?= site_url('welcome/medinfo'); ?>"><img src="<?= base_url('template/images/Logo_divisi/Medinfo.png'); ?>"></a></li>
				<li><a class="<?php if($this->uri->segment(2) == "networking"){ echo "active"; } ?>" href="<?= site_url('welcome/networking'); ?>"><img src="<?= base_url('template/images/Logo_divisi/Networking.png'); ?>"></a></li>
				<li><a class="<?php if($this->uri->segment(2) == "programing"){ echo "active"; } ?>" href="<?= site_url('welcome/programing'); ?>"><img src="<?= base_url('template/images/Logo_divisi/Programming.png'); ?>"></a></li>
			</ul>
		</div>
	</div>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php foreach($div_dpa->result() as $ang_dpa){ ?>
				<div class="swiper-slide">
					<div class="img_box">
						<?php
							if ($ang_dpa->photo != "" || $ang_dpa->photo != NULL) {
								echo "<img src='".base_url('assets/images/anggota/'.$ang_dpa->photo)."'>";
							}else{
								echo "<img src='".base_url('assets/images/default.png')."'>";
							}
						?>
					</div>
					<div class="img_details">
						<h3><?= $ang_dpa->nama;?><br><span><?= $ang_dpa->posisi;?></span></h3>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
	var swiper = new Swiper('.swiper-container',{
		effect: 'coverflow',
		grabCursor: true,
		centeredSlides: true,
		slidesPerView: 'auto',
		coverflowEffect: {
			rotate: 20,
			stretch: 0,
			depth: 200,
			modifier: 1,
			slideShadows: true,
		},
		loop: true,
		autoplay: {
	        delay: 1500,
	        disableOnInteraction: false,
     	},
	});
</script>
</body>
</html>