<?php
	
	class Cetak_sess {
		protected $blug_ci;

		function __construct()
		{
			$this->blug_ci =& get_instance();
		}

		function user_masuk()
		{
			$this->blug_ci->load->model('M_login');
			$id_anggota = $this->blug_ci->session->userdata('id_anggota');
			$data_anggota = $this->blug_ci->M_login->get($id_anggota)->row();
			return $data_anggota;
		}
	}

?>