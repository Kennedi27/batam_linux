<div class="container" style="margin-top: 20px;">
	<div class="row" style="padding-bottom: 20px;">
		<div class="col-md-8 kegiatan_bl">
			<?php foreach ($untuk_isi as $detail_kegiatan_post => $row) { ?>
				<h4><b><?= $row->nama; ?></b></h4>
				<img class="dtl_event" src="<?= base_url('assets/images/kegiatan/'.$row->poster); ?>">
				<div class="caption_event">
					<table border="0" cellpadding="5" width="100%">
						<tr>
							<td class="cap_1">Nama Kegiatan</td>
							<td width="5%"> : </td>
							<td><?= $row->nama; ?></td>
						</tr>
						<tr>
							<td class="cap_1">Kategori Kegiatan</td>
							<td width="5%"> : </td>
							<td><?= $row->kategori; ?></td>
						</tr>
						<tr>
							<td class="cap_1">Tanggal Pelaksanaan</td>
							<td width="5%"> : </td>
							<td>
								<?php
									if ($row->tgl_selesai != "") {
										echo $row->tgl_mulai.' - '.$row->tgl_selesai;
									}else{
										echo $row->tgl_mulai;
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="cap_1">Tempat Pelaksanaan</td>
							<td width="5%"> : </td>
							<td><?= $row->tempat; ?></td>
						</tr>
						<tr>
							<td class="cap_1">Jam Pelaksaan</td>
							<td width="5%"> : </td>
							<td><?= $row->jam; ?></td>
						</tr>
					</table>
					<b>Deskripsi : </b>
					<p><?= $row->deskripsi; ?></p>
					
				</div>
			<?php } ?>
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
	.caption_event table {
		margin-bottom: 20px;
	}
	.caption_event {
		margin-top: 20px;
	}
	.caption_event .cap_1 {
		width: 35%;
		font-weight: bold;
	}

	.kegiatan_bl h4 b {
		font-size: 24pt;
	}
	.kegiatan_bl .dtl_event {
		object-fit: all;
		width: 90%;
	}
	.puff {
		color: black;
	}
	.puff:hover{
		background-color: orange;
		cursor: pointer;
	}
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