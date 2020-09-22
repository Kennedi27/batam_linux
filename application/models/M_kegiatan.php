<?php
	
	class M_kegiatan extends CI_Model 
	{
		// List Kategori

		function get($id_kegiatan = null)
		{
			if ($id_kegiatan != null) {
				$query = $this->db->query("SELECT * FROM kegiatan WHERE id_kategori = '$id_kategori' ");
			}else{
				$query = $this->db->query("SELECT * FROM kegiatan");
			}

			return $query;
		}

		function tambah_kegiatan($nama, $deskripsi, $tanggal, $tempat, $jam, $tgl_mulai, $tgl_selesai, $nama_gambar, $author, $kategori){
			$query = $this->db->query("INSERT INTO kegiatan (nama, deskripsi, tanggal, tempat, jam, tgl_mulai, tgl_selesai, poster, author, kategori) VALUES('$nama', '$deskripsi', '$tanggal', '$tempat', '$jam', '$tgl_mulai', '$tgl_selesai', '$nama_gambar', '$author', '$kategori')");

			return $query;
		}
		function edit_tanpa_gambar($acuan, $nama, $deskripsi, $tanggal, $tempat, $jam, $tgl_mulai, $tgl_selesai, $author, $kategori){
			$hasil = $this->db->query("
				UPDATE kegiatan SET nama = '$nama', deskripsi = '$deskripsi', tanggal = '$tanggal', tempat = '$tempat', jam = '$jam', tgl_mulai = '$tgl_mulai', tgl_selesai = '$tgl_selesai', author = '$author', kategori = '$kategori' WHERE id_kegiatan = '$acuan';
				");
			return $hasil;
		}

		function edit_dengan_gambar($acuan, $nama, $deskripsi, $tanggal, $tempat, $jam, $tgl_mulai, $tgl_selesai, $nama_gambar, $author, $kategori){
			$query = $this->db->query("UPDATE kegiatan SET nama = '$nama', deskripsi = '$deskripsi', tanggal = '$tanggal', tempat = '$tempat', jam = '$jam', tgl_mulai = '$tgl_mulai', tgl_selesai = '$tgl_selesai', poster = '$nama_gambar', author = '$author', kategori = '$kategori' WHERE id_kegiatan = '$acuan'");

			return $query;
		}
		function hapus_kegiatan($acuan){
			$hasil = $this->db->query("DELETE FROM kegiatan WHERE id_kegiatan = '$acuan'");

			return $hasil;

		}

		// Kategori Kegiatan

		function get_kategori($id_kategori = null){
			if ($id_kategori != null) {
				$query = $this->db->query("SELECT * FROM kategori WHERE id_kategori = '$id_kategori' ");
			}else{
				$query = $this->db->query("SELECT * FROM kategori WHERE kategori = 'Kegiatan'");
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
		function get2(){
			$hasil = $this->db->query("SELECT * FROM kegiatan ORDER BY tanggal desc");
			return $hasil;
		}
		function get3(){
			$hasil = $this->db->query("SELECT * FROM kegiatan ORDER BY tanggal desc limit 12");
			return $hasil;
		}
		function get4($kegiatan_id){
			$hasil = $this->db->query("SELECT * FROM kegiatan where id_kegiatan = '$kegiatan_id'");
			return $hasil;
		}
		function get5($kategori_event){
			$hasil = $this->db->query("SELECT * FROM kegiatan where kategori = '$kategori_event'");
			return $hasil;
		}
		function get6($item_kegiatan){
			$hasil = $this->db->query("SELECT * FROM kegiatan where id_kegiatan = '$item_kegiatan'");
			return $hasil;
		}
		function slide_kegiatan()
		{
			$hasil = $this->db->query("SELECT * FROM kegiatan ORDER BY tanggal DESC limit 5");
			return $hasil;
		}
		function menu_kategori()
		{
			$hasil = $this->db->query("SELECT * FROM kategori WHERE kategori = 'Kegiatan'");
			return $hasil;
		}
	}

?>