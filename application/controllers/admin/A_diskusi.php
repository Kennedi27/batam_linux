<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class A_diskusi extends CI_Controller
	{
		function __construct()
		{
			parent:: __construct();
			$this->load->model("M_diskusi");

		}

		public function diskusi()
		{
			$data['list_forum'] = $this->M_diskusi->list_forum();
			$data['isi'] = "admin/diskusi";
			$this->load->view('admin/index', $data);
		}

		public function index()
		{
			$this->diskusi();
		}

		public function proses_forum()
		{
			if (isset($_POST['simpan'])) {
				$tanggal = date('Y-m-d');
				$topik = strip_tags($this->input->post('topik'));
				$id_forum = strip_tags($this->input->post('id_forum'));
				$proses_edit = $this->M_diskusi->edit_forum($id_forum, $topik, $tanggal);
				if ($proses_edit) {
					echo "<script>alert('Topik Berhasil di Perbaharui');</script>";
					redirect('admin/A_diskusi/diskusi');
				}else{
					echo "<script>alert('Topik Gagal di Perbaharui');window.location.href='/';</script>";
					redirect('admin/A_diskusi/diskusi');
				}
			}else if (isset($_POST['hapus'])) {
				$id_forum = strip_tags($this->input->post('id_forum'));
				$this->M_diskusi->hapus_forum($id_forum);
				redirect('admin/A_diskusi/diskusi');
			}else if (isset($_POST['tambah'])) {
				$topik = strip_tags($this->input->post('topik'));
				$tanggal = date('Y-m-d');
				$this->M_diskusi->tambah_forum($topik, $tanggal);
				redirect('admin/A_diskusi/diskusi');
			}
		}
		public function bahas_forum()
		{
			$data['isi'] = "admin/forum_detail";
			$this->load->view('admin/index', $data);
		}
	}

?>