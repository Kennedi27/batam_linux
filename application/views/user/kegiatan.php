<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="col-md-8">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			 	<div class="carousel-inner">
			    	<div class="carousel-item active">
			     		<img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSjifG6SU2eXRz12cifEPrU9LYrPmiCcjIrm-4VTtpWcA4rW4R4&usqp=CAU" alt="First slide">
			    	</div>

			    	<?php foreach ($s_event as $tampil => $row) { ?>
			    	<div class="carousel-item">
				    	<img class="d-block w-100" src="<?php echo base_url('assets/images/kegiatan/'.$row->poster); ?>" alt="">
				    </div>
			    	<?php } ?>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div>
		</div>
		<div class="col-md-4" style="background-color: white;">
			<div class="row" style="padding-bottom: 20px; border: 1px solid grey;">
				<div class="p-3 mb-2 w-100 text-white" style="background-color: #424242; border-left :border-right: 3px solid white;"><h4><b>Kategori</b></h4></div>
				<?php foreach ($menu_k as $kegiatan => $row) { ?>
					<a href="<?= site_url('u_kegiatan/detail_event?kategori_event='.$row->jenis_kategori); ?>" class="p-3 puff mb-2 bg-white w-100"><?= ucfirst($row->jenis_kategori); ?></a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.puff {
		color: black;
	}
	.puff:hover{
		background-color: orange;
		cursor: pointer;
	}
</style>

<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row p-3">
		<h3><b>Event</b></h3>
	</div>
	
	<div class="row">
		<div class="col-md-12">
		<?php foreach ($untuk_isi as $tampil => $row):
			$tgl = $row->tanggal;
			$nm_hari = date('l', strtotime($tgl));
		?>
			<div class="card">
				<a href="<?= site_url('u_kegiatan/detail_event2?item_kegiatan='.$row->id_kegiatan); ?>"><img class="card-img-top" height="180px" src="<?php echo base_url("assets/images/kegiatan/".$row->poster); ?>" alt="Card image cap"></a>
				<div class="card-body">
				    <p class="card-text"><a style="color: black;" href="<?= site_url('u_kegiatan/detail_event2?item_kegiatan='.$row->id_kegiatan); ?>"><?= substr($row->deskripsi, 0,60); ?></a></p>
				    <b style="font-size: 10pt;"><?php echo $nm_hari.", ".$tgl; ?></b>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<style type="text/css">
	.header-top_address {
		color: white;
	}
	.card {
		float: left;
		width: 24%;
		margin-left: 1%;
		margin-bottom: 20px;
	}
	.card img {
		object-fit: cover;
		width: 100%;
	}
</style>