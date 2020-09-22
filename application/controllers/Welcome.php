<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
	{
	public function index()
		{
			$this->load->model('M_slideshow');
			$this->load->model('M_artikel');
			$this->load->model('M_kegiatan');
			$query = $this->M_slideshow->get();
			$query1 = $this->M_artikel->tampil_beranda();
			$query2 = $this->M_kegiatan->get3();
			$query3 = $this->M_artikel->populer_menu_index();
			$data['slide'] = $query->result();
			$data['slide_OSC'] = $this->M_slideshow->get_proker_OSC();
			$data['slide_fossday'] = $this->M_slideshow->get_proker_fossday();
			$data['slide_blugsukan'] = $this->M_slideshow->get_proker_blugsukan();
			$data['slide_pengkaderan'] = $this->M_slideshow->get_proker_pengkaderan();
			$data['slide_baksos'] = $this->M_slideshow->get_proker_baksos();
			$data['slide_hacktoberfresh'] = $this->M_slideshow->get_proker_hacktoberfresh();
			$data['b_artikel'] = $query1->result();
			$data['event'] = $query2->result();
			$data['menu_pops'] = $query3->result();
			$data['content'] = "user/beranda";
			$this->load->view('user/index', $data);
		}
		public function artikel_detail()
		{
			$this->load->model('M_artikel');
			$komentar_tulisan_id = $this->input->get('judul');
			$judul = $this->input->get('judul');
			$query = $this->M_artikel->detail_artikel($judul);
			$query1 = $this->M_artikel->populer_menu();
			$query2 = $this->M_artikel->kategori_menu();
			$query3 = $this->M_artikel->komentar_artikel($komentar_tulisan_id);
			$data['isi_kontent'] = $query->result();
			$data['artikel_pop'] = $query1->result();
			$data['menu_kategori'] = $query2->result();
			$data['show_komentar'] = $query3->result();
			$data['content'] = "user/artikel_detail";
			$this->load->view('user/index', $data);
		}
		public function tambah_komentar_artikel()
		{
			$this->load->model('M_artikel');
			$komentar_nama = strip_tags($this->input->post('komentar_nama'));
			$komentar_email = strip_tags($this->input->post('komentar_email'));
			$komentar_isi = strip_tags($this->input->post('komentar_isi'));
			$komentar_tulisan_id = strip_tags($this->input->post('komentar_tulisan_id'));
			$komentar_parent = 0;
			if (isset($_POST['tambah_koment'])) {
				$masuk_db = $this->M_artikel->tambah_komentar ($komentar_nama, $komentar_email, $komentar_isi, $komentar_tulisan_id, $komentar_parent);
				if ($masuk_db) {
					echo "<script>alert('Terima Kasih Telah Berkomentar');</script>";
					header('location: artikel_detail?judul='.$komentar_tulisan_id);
				}else{
					header('location: artikel_detail?judul='.$komentar_tulisan_id);
				}
			}	
		}

		public function dpa()
		{
			$this->load->model('M_divisi');
			$data['div_dpa'] = $this->M_divisi->get_user_dpa();
			$this->load->view('user/dpa', $data);
		}
		public function inti()
		{
			$this->load->view('user/inti');
		}
		public function programing()
		{
			$this->load->model('M_divisi');
			$data['div_programing'] = $this->M_divisi->get_user_programing();
			$this->load->view('user/programing', $data);
		}
		public function networking()
		{
			$this->load->view('user/networking');
		}
		public function medinfo()
		{
			$this->load->view('user/medinfo');
		}
	}

?>