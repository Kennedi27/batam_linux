<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shorcut icon" href="<?= base_url('template/images/Logo_divisi/Programming.png'); ?>">
	<title>Divisi Programming</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('template/css/font-awesome.min.css'); ?>">
</head>
<body>
	<div class="main_menu">
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
	
	<div class="box">
		<div class="division-name">
			<h1 id="text_3d">Divisi Programing</h1>
		</div>
		<?php
		$no = 0;
		foreach($div_programing->result() as $ang_programing){
		?>
			<div class="img-capt" style="--i:<?= $no++; ?>;">
				<?php
				if ($ang_programing->photo != "" || $ang_programing->photo != NULL) {
					echo "<img src='".base_url('assets/images/anggota/'.$ang_programing->photo)."'>";
				}else{
					echo "<img src='".base_url('assets/images/default.png')."'>";
				}
				?>
				<div class="capt">
					<h3><?= $ang_programing->nama;?><br><span><?= $ang_programing->posisi; ?></span></h3>
				</div>
			</div>

		<?php } ?>
	</div>
</body>
</html>
<script type="text/javascript">
	var text_3d = document.getElementById('text_3d');
	var shadow = '';
	for (var i = 0; i < 10; i++)
	{
		shadow += (shadow? ',':'')+ -i*1+'px '+ i*1+'px 0 grey';
	}
	text_3d.style.textShadow = shadow;
</script>
<style type="text/css">
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
body
{
	font-family: Helvetica Neue, Helvetica, Arial, Sans-serif;
	font-size: 14px;
	display: flex;
	min-height: 100vh;
	background-color: black;
	justify-content: center;
	align-items: center;
}
.division-name h1
{
	color: white;
	position: absolute;
	bottom: 0;
	z-index: 2;
	width: auto;
	font-size: 2em;
	width: 300px;
}
.huff
{
	margin: auto;
	padding: auto;
}
.main_menu
{	
	position: fixed;
	display: flex;
	flex-direction: column;
	left: 0;
	top: 0;
	width: auto;
	background-color: rgba(255, 255, 255, 0.05);
	padding: 10px;
	height: 100%;
}
.main_menu ul
{
	padding: 0;
	margin: 0;
}
.main_menu li
{
	list-style: none;
}
.main_menu li a
{
	position: relative;
	display: grid;
	place-items: center;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	border: 1px solid #fff;
	margin: 10px 0 0;
}
.main_menu li a:hover
{
	background-color: white;
}
.main_menu .active
{
	background-color: white;
}
.main_menu li a img
{
	max-width: 35px;
	filter: invert(1);
	mix-blend-mode: difference;
}
.main_menu li a i
{
	max-width: 50px;
	filter: invert(1);
	color: black;
	mix-blend-mode: difference;
}
.box
{
	position: relative;
	min-height: 200px;
	width: 200px;
	transform-style: preserve-3d;
	animation: animate 50s linear infinite;
}
@keyframes animate
{
	0%
	{
		transform: perspective(1000px) rotateY(0deg);
	}
	100%
	{
		transform: perspective(1000px) rotateY(360deg);
	}

}
.box .img-capt
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	min-height: 200px;
	transform-style: preserve-3d;
	transform-origin: center;
	transform: rotateY(calc(var(--i) * 45deg)) translateZ(400px);
	-webkit-box-reflect: below 0px linear-gradient(transparent, transparent, #0004);
	background: white;
	color: black;
}
.box .capt
{
	background: white;
	z-index: 5;
	position: relative;
	top: 200px;
	padding: 10px;
	align-content: center;
	text-align: center;
	align-items: center;
	display: none;
}
.box .img-capt:hover .capt
{
	display: block;
}
.box .img-capt .capt span
{
	color: #f44336;
}
.box .img-capt .capt h3
{
	margin: 0;
	padding: 0;
	text-align: center;
	font-size: 10pt;

}
.box .img-capt img
{
	position: absolute;
	left: 0;
	top: 0;
	width: 200px;
	height: 200px;
	object-fit: cover;
}
</style>