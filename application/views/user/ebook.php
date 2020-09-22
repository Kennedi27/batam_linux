	<div class="row">
		<div class="col-md-3">
			 <div class="scroll" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding-top: 25px;">
			    <h4 style="font-size: 12pt;"><b>More E-book</b></h4>
			    <hr>
			    <?php foreach ($more_book as $tampil => $row) { ?>
			    	<img width="120px" style="float: left; margin-right: 8px;" src="<?php echo base_url('assets/images/ebook/'.$row->gambar); ?>">
			    	<font class="apaja"><a href="<?php echo site_url('u_ebook/detail_buku?blank='.$row->id_book); ?>" style="color: blue;"><?php echo ucfirst($row->judul);  ?></a></font>
			    <div style="font-size: 11pt; color: grey;"><?php echo substr($row->deskripsi, 0, 120); ?></div><br>
			    	<hr>
			    <?php } ?>
			  </div>
		</div>
 
		<div class="col-md-6" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: white; margin-top: 10px; margin-bottom: 10px;">
			<div class="row" style="margin-top: 10px;">
				<h4 style="padding-left: 20px; font-weight: bold;">E-book Terbaru</h4>
				<hr><br>
			</div>
			<div class="row">
				<?php foreach ($semua_buku as $tampil => $row) { ?>
					<div class="col-md-3">
						<img width="180" class="kartu" src="<?= base_url('assets/images/ebook/'.$row->gambar); ?>">
					</div>
					<div class="col-md-9">
						<h4 style="font-size: 12pt; padding-top: 20px;"><b><a href="<?php echo site_url('u_ebook/detail_buku?blank='.$row->id_book); ?>" style="color: black;"><?= ucfirst($row->judul); ?></a></b></h4>
						<font size="1"><?= "Kategori : ".$row->kategori; ?></font><br>
						<font class="suka_suka"><a href="<?php echo site_url('u_ebook/detail_buku?blank='.$row->id_book); ?>"><?= substr($row->deskripsi, 0, 120) ?></a></font><br>
						<a href="<?= $row->link; ?>" class="download">Download</a>
					</div>
					<div class="row w-100" style="height: 1px; margin-left: 20px; margin-top: 10px; margin-right: 20px; background-color: lightgrey;"></div>
				<?php } ?>
			</div>	
		</div>

		<div class="col-md-3" style="margin-top: 10px; margin-bottom: 10px; ">
			<div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-left :6px; padding-left:  10px; padding-right: 10px; margin-right: 10px; background-color: white; padding-bottom: 20px;">
				<h4 style="padding-top: 25px; padding-bottom: 10px;"><b>Kategori E-Book</b></h4>
				<hr>
				<?php foreach ($menu_kategori as $tampil => $row) { ?>
					<a href="<?= site_url('u_ebook/link_kategori?jenis_kategori='.$row->jenis_kategori); ?>" class="link_kategori"><b><?php echo $row->jenis_kategori; ?></b></a><br>
					<hr>
				<?php } ?>
			</div>
		</div>
	</div>
<style type="text/css">
	.download {
		background-color: green;
		border-radius: 5px;
		color: white;
		font-weight: bold;
		padding: 5px;
		cursor: pointer;
		font-size: 8pt;
		margin-top: 20px;
	}
	.suka_suka a{
		color: grey;
		font-size: 12pt;
		word-break: break-all;
		text-align: justify;
	}
	.kartu {
		padding-top: 20px;
		float: left;
		padding-right: 20px;
	}
	.link_kategori {
		color: black;
	}
	.link_kategori:hover {
		color: chocolate;
	}
	.apaja {
		color: blue;
		text-decoration: none;
		font-size: 11pt;
		font-weight: bold;
	}
	body{
		background-color: white;
	}
	.header-top_address {
		color: white;
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

