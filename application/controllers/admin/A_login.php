<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	

	class A_login extends CI_Controller
	{
		function __construct(){
		parent:: __construct();
	}
		
		public function index()
		{
			user_yang_login();
			$this->load->view('admin/login');
		}

		public function login()
		{
			user_yang_login();
			$this->load->view('admin/login');
		}

		public function proses_login()
		{
			$cek = $this->input->post(null, TRUE);
			if (isset($cek['login'])) {
				$this->load->model('M_login');
				$query = $this->M_login->masuk($cek);
				if ($query->num_rows() > 0) {
					$row = $query->row();
					$params = array(
						'id_anggota' => $row->id_anggota,
						'akses' => $row->posisi,
						'upload_image_file_manager' => TRUE
					);
					$this->session->set_userdata($params);
					redirect('admin/a_beranda/');
				}else{
					echo "<script>alert('Upss! Login Gagal check lagi cuy pass dan user anda'); window.location = '".site_url('admin/a_login/login')."';</script>";
				}
			}
		}

		public function logout()
		{
			$params = array('id_anggota', 'akses', 'upload_image_file_manager');
			$this->session->unset_userdata($params);
			redirect('/');
		}

	}

?>