<?php

class M_tutorial_edit extends CI_Model
{
	function edit_tutorial_tanpa_gambar($acuan, $judul, $tanggal, $author, $kategori, $isi, $link){
		$hasil = $this->db->query("UPDATE tutorial SET
				judul = '$judul',
				author = '$author',
				tanggal = '$tanggal',
				kategori = '$kategori',
				isi = '$isi',
				link = '$link'
				WHERE id_tutorial = '$acuan'
	");
		return $hasil;
	}
	function edit_tutorial_dengan_gambar($acuan, $judul, $nama_gambar, $tanggal, $author, $kategori, $isi, $link){
		$query = $this->db->query("UPDATE tutorial SET judul = '$judul', gambar = '$nama_gambar', author = '$author', tanggal ='$tanggal', kategori = '$kategori', isi = '$isi', link  = '$link' WHERE id_tutorial = '$acuan'");
		return $query;
	}
}
?>