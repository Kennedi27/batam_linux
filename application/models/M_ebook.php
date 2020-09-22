<?php
	
	class M_ebook extends CI_Model
	{
		function tampil_data($author)
		{
			$hasil = $this->db->query("SELECT * FROM ebook WHERE author = '$author'");
			return $hasil;
		}

		function update_tanpa_gambar($acuan, $judul, $deskripsi, $link, $kategori, $waktu)
		{
			$hasil = $this->db->query("
					UPDATE ebook SET
					judul = '$judul',
					deskripsi = '$deskripsi',
					link = '$link',
					kategori = '$kategori',
					waktu = '$waktu'
					WHERE id_book = '$acuan'
				");
			return $hasil;
		}

		function hapus_data($acuan)
		{
			$hasil = $this->db->query("
					DELETE FROM ebook WHERE id_book = '$acuan'
				");
			return $hasil;
		}

		function tambah_data_ebook($judul, $nama_gambar, $deskripsi, $kategori, $link, $waktu){
			$query = $this->db->query("INSERT INTO ebook(judul, gambar, deskripsi, kategori, link, waktu) VALUES('$judul', '$nama_gambar', '$deskripsi', '$kategori', '$link', '$waktu')");
			return $query;
		}

		function update_with_photo($acuan, $judul, $nama_gambar, $deskripsi, $kategori, $link, $waktu){
			$query = $this->db->query("UPDATE ebook SET judul = '$judul', gambar = '$nama_gambar', deskripsi = '$deskripsi', kategori ='$kategori', link = '$link', waktu = '$waktu' WHERE id_book = '$acuan'");
			return $query;
		}

		// E-book Kategori

		function get_kategori($id_kategori = null){
			if ($id_kategori != null) {
				$query = $this->db->query("SELECT * FROM kategori WHERE id_kategori = '$id_kategori' ");
			}else{
				$query = $this->db->query("SELECT * FROM kategori WHERE kategori = 'Ebook'");
			}

			return $query;
		}

		function tambah_kategori($jenis_kategori, $kategori){
			$hasil = $this->db->query("INSERT INTO kategori(jenis_kategori, kategori) VALUES('$jenis_kategori','$kategori')");
			
			return $hasil;
		}

		function edit_kategori($jenis_kategori, $kategori, $acuan){
			$hasil = $this->db->query("UPDATE kategori SET jenis_kategori = '$jenis_kategori', kategori = '$kategori' WHERE id_kategori = '$acuan'");

			return $hasil;
		}

		function hapus_kategori($acuan){
			$hasil = $this->db->query("DELETE FROM kategori WHERE id_kategori = '$acuan'");

			return $hasil;

		}

		// Front End
		public function getbuku()
		{
			$hasil = $this->db->query("SELECT * FROM ebook ORDER BY waktu DESC");
			return $hasil;
		}
		public function getbuku1()
		{
			$hasil = $this->db->query("SELECT * FROM ebook ORDER BY waktu DESC");
			return $hasil;
		}
		public function menu_kategori()
		{
			$hasil = $this->db->query("SELECT * FROM kategori WHERE kategori = 'ebook'");
			return $hasil;
		}
		public function get_isi_by_jenis_kategori($jenis_kategori)
		{
		
			$hasil = $this->db->query("SELECT * FROM ebook as book WHERE book.kategori = '$jenis_kategori'");
			return $hasil;
		}
	}

?>