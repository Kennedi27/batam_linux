<?php
	$tag = $_GET['tag'];
?>
<div class="row">
	<div class="col-md-3">
		 <div class="scroll" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding-top: 25px;">
		    <h4 style="font-size: 12pt;"><b>Tutorial terbaru</b></h4>
		    <hr>
		    <?php foreach ($tutor_pop as $tampil => $row) { ?>
		    	<img width="100px" style="float: left; margin-right: 8px;" src="<?php echo base_url('assets/images/tutorial/'.$row->gambar); ?>">
		    	<span class="apaja"><a style="color: blue;" href="<?php echo site_url('u_tutorial/detail_tutorial?id_tutorial='.$row->id_tutorial); ?>"><?php echo ucfirst($row->judul);  ?></a></span>
		   		<font class="sukaku" style="padding-top: 0;"><p><a class="isil" style="color: grey;" href="<?php echo site_url('u_tutorial/detail_tutorial?id_tutorial='.$row->id_tutorial); ?>"><?php echo substr($row->isi, 0, 120); ?></a></p></font><br>
		    	<hr>
		    <?php } ?>
		  </div>
	</div>

	<div class="col-md-6">
		<div class="row" style="margin-top: 10px;">
			<?php foreach ($isi_kontent as $tampil => $row) { ?>
				<div class="card1" style="min-height: 120px; width: 332px; margin-left: 10px; margin-bottom: 10px; padding: 10px;">
					<h4 style="font-size: 12pt; font-weight: bold;"><a style="color: black;" href="<?php echo site_url('u_tutorial/detail_tutorial?id_tutorial='.$row->id_tutorial); ?>"><?= ucwords(substr($row->judul, 0,60)); ?></a></h4>
					<hr style="padding-bottom: 0; margin-bottom: 2px;">
					<div class="col-md-12 mb-3" style="padding: 0; font-size: 10pt; margin: 0;"><a href="#" style="color: blue;"> Kategori | <?= $row->kategori; ?></a></div>
					<img height="100" width="100" class="img-circe" src="<?= base_url('assets/images/tutorial/'.$row->gambar); ?>">
					<font class="sukaku"><p><a class="isil" style="color: grey;" href="<?php echo site_url('u_tutorial/detail_tutorial?id_tutorial='.$row->id_tutorial); ?>"><?= substr($row->isi, 0, 130); ?></a></p></font><br>
				</div>
			<?php } ?>
	</div>
</div>

	<div class="col-md-3" style="margin-top: 10px; margin-bottom: 10px; ">
		<div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-left :6px; padding-left: 10px; padding-right: 10px; margin-right: 10px; background-color: white; padding-bottom: 20px;">
			<h4 style="padding-top: 25px; padding-bottom: 10px;"><b>Kategori</b></h4>
			<hr>
			<?php foreach ($menu_kategori as $tampil => $row) { ?>
				<a href="<?= site_url('u_tutorial/set_kategori?tag='.$row->jenis_kategori); ?>" class="link_kategori"><b><?php echo ucfirst($row->jenis_kategori); ?></b></a><br><hr>
			<?php } ?>
		</div>
	</div>
</div>


<style type="text/css">
	.header-top_address {
		color: white;
	}
	.sukaku p{
		font-size: 10pt;
	}
	.img-circe {
		float: left;
		border-radius: 50%;
		border: 4px solid lightgrey;
		margin-right: 20px;
		margin-bottom: 20px;
	}
	.card1 {
		background-color: white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		border-bottom: 3px solid lightgrey;
	}
	.link_kategori {
		color: black;
		margin-left: 10px;
	}
	.link_kategori:hover {
		color: chocolate;
	}
	.apaja {
		color: blue;
		text-decoration: none;
		font-size: 10pt;
		font-weight: bold;
	}
	body{
		background-color: white;
	}
	.isil:hover{
		text-decoration: underline;
		color: black;
	}

.scroll{
	margin: 8px;
	background: white;
	padding: 10px;
	overflow: scroll;
	height: 500px;
	
	  /*script tambahan khusus untuk IE */
	scrollbar-face-color: #CE7E00; 
	scrollbar-shadow-color: #FFFFFF; 
	scrollbar-highlight-color: #6F4709; 
	scrollbar-3dlight-color: #11111; 
	scrollbar-darkshadow-color: #6F4709; 
	scrollbar-track-color: #FFE8C1; 
	scrollbar-arrow-color: #6F4709;
}
</style>

