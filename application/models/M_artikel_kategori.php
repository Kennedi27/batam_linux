<?php
	
	class M_artikel_kategori extends CI_Model 
	{

		function get($id_kategori = null){
			if ($id_kategori != null) {
				$query = $this->db->query("SELECT * FROM kategori WHERE id_kategori = '$id_kategori' ");
			}else{
				$query = $this->db->query("SELECT * FROM kategori WHERE kategori = 'Artikel'");
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
	}

?>