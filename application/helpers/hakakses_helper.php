<?php
	
	function user_yang_login()
	{
		$blug_ci =& get_instance();
		$session_pengguna = $blug_ci->session->userdata('id_anggota');
		if ($session_pengguna) {
			redirect('admin/a_beranda/beranda');
		}
	}

	function user_tidak_login()
	{
		$blug_ci =& get_instance();
		$session_pengguna = $blug_ci->session->userdata('id_anggota');
		if (!$session_pengguna) {
			redirect('admin/a_login/login');
		}
	}

?>