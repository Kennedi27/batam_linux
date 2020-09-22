<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class A_pesan extends CI_Controller
	{
		
		public function pesan()
		{
			$data['isi'] = "admin/pesan";
			$this->load->view('admin/index', $data);
		}

	}

?>