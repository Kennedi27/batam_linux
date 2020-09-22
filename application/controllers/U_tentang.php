<?php 
	defined('BASEPATH') or exit("No Script Access direct");

	class U_tentang extends CI_Controller
	{
		
		public function index()
		{
			$data['content'] = "user/tentang";
			$this->load->view('user/index', $data);
		}
		public function tentang(){
			$data['judul'] = ucfirst($this->uri->segment(4));
			$data['content'] = "user/tentang";
			$this->load->view('user/index', $data);
		}
	}


?>