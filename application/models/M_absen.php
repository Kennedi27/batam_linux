<?php

defined('BASEPATH') OR exit('NO direct script access allowed');

class M_absen extends CI_Model{

	function get()
	{
		$query = $this->db->query("SELECT * FROM anggota WHERE status = 'Pengurus' ");
		return $query;
	}


	function simpan_absen($tanggal, $kehadiran, $keterangan, $nama_anggota, $id_anggota)
	{
		$hasil = $this->db->query("INSERT INTO absen(tanggal, kehadiran, keterangan, nama_anggota, id_anggota) VALUES('$tanggal', '$kehadiran', '$keterangan', '$nama_anggota', '$id_anggota')");
		return $hasil;
	}

	
}
?>