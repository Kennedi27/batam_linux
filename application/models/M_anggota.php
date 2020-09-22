<?php

class M_anggota extends CI_Model{

	function get($id_anggota = null)
	{
		if ($id_anggota != null) {
			$query = $this->db->query("SELECT * FROM anggota WHERE id_anggota = '$id_anggota'");
		}else{
			$query = $this->db->query("SELECT * FROM anggota");
		}
		return $query;
	}

	function tambah_dengan_gambar($nama, $posisi, $angkatan, $divisi, $jenis_kelamin, $alamat, $status, $username, $password, $nama_gambar){
		$sqluser = $this->db->query("SELECT username as nameuser FROM  anggota");
		foreach ($sqluser->result() as $row) {
			$user_database = $row->nameuser;
			if ($user_database == $_POST['username']) {
				echo "<script>alert('Username Sudah Digunakan');window.location.href='".site_url('admin/a_anggota/anggota')."';</script>";
			}
		}	

		$query = $this->db->query("INSERT INTO anggota(nama,posisi,angkatan,divisi,jenis_kelamin,alamat,status,username,password,photo) VALUES('$nama','$posisi','$angkatan','$divisi','$jenis_kelamin','$alamat','$status','$username',md5('$password'),'$nama_gambar')");

		return $query;
	}

	function tambah($nama,$username,$password,$posisi,$angkatan,$divisi,$jenis_kelamin,$alamat,$nama_photo,$status)
	{
		// cek username
		$sqluser = $this->db->query("SELECT username as nameuser FROM  anggota");
		//perintah sql untuk menambah data
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => md5($password),
			'posisi' => $posisi,
			'angkatan' => $angkatan,
			'divisi' => $divisi,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'photo' => $nama_photo,
			'status' => $status
		);
		foreach ($sqluser->result() as $row) {
			$user_database = $row->nameuser;
			if ($user_database == $_POST['username']) {
				echo "<script>alert('Username Sudah Digunakan');window.location.href='".site_url('admin/a_anggota/anggota')."';</script>";
			}
		}	
		$hasil = $this->db->insert('anggota', $data);
			
		return $hasil;
	}

	function edit_dengan_gambar($rujukan, $nama, $posisi, $angkatan, $divisi, $jenis_kelamin, $alamat, $status, $nama_gambar)
	{
		$query = $this->db->query("UPDATE anggota SET nama = '$nama', posisi = '$posisi',angkatan = '$angkatan',divisi = '$divisi',jenis_kelamin = '$jenis_kelamin',alamat = '$alamat',status = '$status' ,photo = '$nama_gambar' WHERE id_anggota = '$rujukan'");

		return $query;
	}

	function edit_no_image($rujukan,$nama,$posisi,$angkatan,$divisi,$jenis_kelamin,$alamat,$status)
	{
		$hasil = $this->db->query("
				UPDATE anggota SET
				nama = '$nama',
				posisi = '$posisi',
				angkatan = '$angkatan',
				divisi = '$divisi',
				jenis_kelamin = '$jenis_kelamin',
				alamat = '$alamat',
				status = '$status'
				WHERE id_anggota = '$rujukan'
			");
		return $hasil;
	}

	function hapus_anggota($rujukan)
	{
		$hasil = $this->db->query("
				DELETE FROM anggota WHERE id_anggota = '$rujukan'
			");
		return $hasil;
	}
	public function reset_password($id, $password, $username)
	{
		$hasil = $this->db->query("UPDATE anggota SET password = md5('$password') WHERE username = '$username' AND id_anggota = '$id'");
		return $hasil;
	}
}

?>