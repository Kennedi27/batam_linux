<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_diskusi extends CI_Model
	{

		public function list_forum(){
			$hasil = $this->db->query("SELECT * FROM forum ORDER BY tanggal DESC");

			return $hasil;
		}

		public function tambah_forum($topik, $tanggal)
		{
			$hasil = $this->db->query("INSERT INTO forum (author, topik, tanggal) VALUES('$author', '$topik', '$tanggal')");

			return $hasil;	
		}

		public function edit_forum($id_forum, $topik, $tanggal)
		{
			$hasil = $this->db->query("UPDATE forum SET topik = '$topik', tanggal = '$tanggal' WHERE id_forum = '$id_forum'");

			return $hasil;
		}

		public function hapus_forum($id_forum)
		{
			$hasil = $this->db->query("DELETE FROM forum WHERE id_forum = '$id_forum'");

			return $hasil;
		}

	}


?>