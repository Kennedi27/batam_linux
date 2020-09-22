<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_tutorial extends CI_Controller
	{
		function __construct(){
			parent:: __construct();
			$this->load->model("M_tutorial");
		}
		public function index()
		{
			$query = $this->M_tutorial->isi_tutor();
			$query2 = $this->M_tutorial->kategori_menu();
			$query1 = $this->M_tutorial->populer_menu();
			$data['isi_kontent'] = $query->result();
			$data['menu_kategori'] = $query2->result();
			$data['tutor_pop'] = $query1->result();
			$data['content'] = "user/tutorial";
			$this->load->view('user/index', $data);
		}
		public function tutorial()
		{
			$query = $this->M_tutorial->isi_tutor();
			$query2 = $this->M_tutorial->kategori_menu();
			$query1 = $this->M_tutorial->populer_menu();
			$data['isi_kontent'] = $query->result();
			$data['menu_kategori'] = $query2->result();
			$data['tutor_pop'] = $query1->result();
			$data['content'] = "user/tutorial";
			$this->load->view('user/index', $data);
		}

		public function detail_tutorial()
		{
			$komentar_tulisan_id = $this->input->get('id_tutorial');
			$id_tutorial = $this->input->get('id_tutorial');
			$query = $this->M_tutorial->detail_tutor($id_tutorial);
			$query2 = $this->M_tutorial->kategori_menu();
			$query1 = $this->M_tutorial->populer_menu();
			$query3 = $this->M_tutorial->komentar($komentar_tulisan_id);
			$data['show_komentar'] = $query3->result();
			$data['isi_kontent'] = $query->result();
			$data['menu_kategori'] = $query2->result();
			$data['tutor_pop'] = $query1->result();
			$data['content'] = "user/tutorial_detail";
			$this->load->view('user/index', $data);
		}

		public function set_kategori()
		{
			$tag = $this->input->get('tag');
			$query = $this->M_tutorial->set_by_kategori($tag);
			$query2 = $this->M_tutorial->kategori_menu();
			$query1 = $this->M_tutorial->populer_menu();
			$data['isi_kontent'] = $query->result();
			$data['menu_kategori'] = $query2->result();
			$data['tutor_pop'] = $query1->result();
			$data['content'] = "user/tutorial_kategori";
			$this->load->view('user/index', $data);
		}
		public function tambah_komentar_tutorial()
		{
			$this->load->model('M_tutorial');
			$komentar_nama = strip_tags($this->input->post('komentar_nama'));
			$komentar_email = strip_tags($this->input->post('komentar_email'));
			$komentar_isi = strip_tags($this->input->post('komentar_isi'));
			$komentar_tulisan_id = strip_tags($this->input->post('komentar_tulisan_id'));
			$komentar_parent = 0;
			if (isset($_POST['tambah_koment'])) {
				$masuk_db = $this->M_tutorial->tambah_komentar($komentar_nama, $komentar_email, $komentar_isi, $komentar_tulisan_id, $komentar_parent);
				if ($masuk_db) {
					echo "<script>alert('Terima Kasih Telah Berkomentar');</script>";
					header('location: detail_tutorial?id_tutorial='.$komentar_tulisan_id);
				}else{
					header('location: detail_tutorial?id_tutorial='.$komentar_tulisan_id);
				}
			}	
		}
}
?>