<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_slideshow extends CI_Model
	{
		public function get($id_artikel = null)
		{
			$this->db->select('*');
			$this->db->from('slideshow');
			if ($id_artikel != null) {
				$this->db->where('id_artikel_kat', $id_artikel);
			}	
			$query = $this->db->get();
			return $query;
		}

		public function tambah($id_proker, $nama_gambar, $author, $nama_lengkap)
		{
			$hasil = $this->db->query("
					INSERT INTO slideshow(
					id_proker, author, gambar, nama_lengkap)
					VALUES
					('$id_proker', '$author', '$nama_gambar', '$nama_lengkap')
			");
			return $hasil;
		}

		public function edit($rujukan, $id_proker, $nama_gambar, $author, $nama_lengkap)
		{
			$hasil = $this->db->query("
					UPDATE slideshow SET
					id_proker = '$id_proker',
					author = '$author',
					gambar = '$nama_gambar',
					nama_lengkap = '$nama_lengkap'
					WHERE id_artikel_kat = '$rujukan'
			");

			return $hasil;
		}

		public function edit_no_image($rujukan, $id_proker, $author, $nama_lengkap)
		{
			$hasil = $this->db->query("
					UPDATE slideshow SET
					id_proker = '$id_proker',
					author = '$author',
					nama_lengkap = '$nama_lengkap'
					WHERE id_artikel_kat = '$rujukan'
			");

			return $hasil;
		}

		public function hapus($rujukan)
		{
			$hasil = $this->db->query("
					DELETE FROM slideshow where id_artikel_kat = '$rujukan'
				");
		}

		public function get_data_proker()
		{
			$hasil = $this->db->query("SELECT * FROM proker");
			return $hasil;
		}

		// FRONT END
		public function get_proker_OSC()
		{
			$hasil = $this->db->query("SELECT * FROM slideshow WHERE id_proker = '3'");
			return $hasil;
		}

		public function get_proker_fossday()
		{
			$hasil = $this->db->query("SELECT * FROM slideshow WHERE id_proker = '1'");
			return $hasil;
		}

		public function get_proker_hacktoberfresh()
		{
			$hasil = $this->db->query("SELECT * FROM slideshow WHERE id_proker = '2'");
			return $hasil;
		}

		public function get_proker_pengkaderan()
		{
			$hasil = $this->db->query("SELECT * FROM slideshow WHERE id_proker = '4'");
			return $hasil;
		}

		public function get_proker_blugsukan()
		{
			$hasil = $this->db->query("SELECT * FROM slideshow WHERE id_proker = '5'");
			return $hasil;
		}

		public function get_proker_baksos()
		{
			$hasil = $this->db->query("SELECT * FROM slideshow WHERE id_proker = '6'");
			return $hasil;
		}
	}
?>