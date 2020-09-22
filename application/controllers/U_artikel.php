<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class U_artikel extends CI_Controller
	{
		public function index()
		{
			$this->load->model('M_artikel');
			$query1 = $this->M_artikel->populer_menu();
			$query2 = $this->M_artikel->kategori_menu();
			$query3 = $this->M_artikel->isi_artikel();
			$data['b_artikel'] = $query3->result();
			$data['menu_kategori'] = $query2->result();
			$data['artikel_pop'] = $query1->result();
			$data['content'] = "user/artikel.php";
			$this->load->view('user/index', $data);
		}
		public function artikel()
		{
			$this->load->model('M_artikel');
			$cek_kategori = $this->input->get('set_kategori');
			$query1 = $this->M_artikel->populer_menu();
			$query2 = $this->M_artikel->kategori_menu();
			$query3 = $this->M_artikel->tampil_artikel($cek_kategori);
			$data['b_artikel'] = $query3->result();
			$data['menu_kategori'] = $query2->result();
			$data['artikel_pop'] = $query1->result();
			$data['content'] = "user/artikel.php";
			$this->load->view('user/index', $data);
		}
	}
?>