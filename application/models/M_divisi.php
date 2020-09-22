<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_divisi extends CI_Model
	{
		public function get_user_dpa()
		{
			$this->db->select('*');
			$this->db->from('anggota');
			$this->db->where('status', 'Pengurus');
			$this->db->where('divisi', 'DPA');
			$result = $this->db->get();
			return $result;
		}
		public function get_user_programing()
		{
			$this->db->select('*');
			$this->db->from('anggota');
			$this->db->where('status', 'Pengurus');
			$this->db->where('divisi', 'Programing');
			$result = $this->db->get();
			return $result;
		}
	}
?>