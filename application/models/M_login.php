<?php

defined('BASEPATH') OR exit('NO direct script access allowed');

class M_login extends CI_Model{

	public function masuk($cek)
	{
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->where('username', $cek['username']);
		$this->db->where('password', md5($cek['password']));
		$query = $this->db->get();
		return $query;
	}

	function get($id_anggota = null)
	{
		if ($id_anggota != null) {
			$query = $this->db->query("SELECT * FROM anggota WHERE id_anggota = '$id_anggota'");
		}else{
			$query = $this->db->query("SELECT * FROM anggota");
		}
		return $query;
	}
}
?>