<?php

class M_artikel_edit extends CI_Model
{
	function edit_artikel_tanpa_gambar($acuan, $judul, $tanggal, $author, $kategori, $isi){
		$hasil = $this->db->query("UPDATE artikel SET
				judul = '$judul',
				author = '$author',
				tanggal = '$tanggal',
				kategori = '$kategori',
				isi = '$isi' WHERE id_artikel = '$acuan'
	");
		return $hasil;
	}
	function edit_artikel_dengan_gambar($acuan, $judul, $nama_gambar, $tanggal, $author, $kategori, $isi){
		$query = $this->db->query("UPDATE artikel SET judul = '$judul', gambar = '$nama_gambar', author = '$author', tanggal ='$tanggal', kategori = '$kategori', isi = '$isi' WHERE id_artikel = '$acuan'");
		return $query;
	}
}
?>