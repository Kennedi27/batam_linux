<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	
	class A_slideshow extends CI_Controller
	{
		function __construct()
		{
			parent:: __construct();
			$this->load->model('M_slideshow');
			$this->load->library('upload');
			
		}

		public function index()
		{
			$data['isi'] = "admin/slideshow";
			$query = $this->M_slideshow->get();
			$query1 = $this->M_slideshow->get_data_proker();
			$data['tampil'] = $query->result();
			$data['list_proker'] = $query1->result();
			$this->load->view('admin/index', $data);
		}
		
		public function slideshow()
		{
			$query1 = $this->M_slideshow->get_data_proker();
			$data['list_proker'] = $query1->result();
			$data['isi'] = "admin/slideshow";
			$query = $this->M_slideshow->get();
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);
		}

		public function proses_slideshow(){
			if (isset($_POST['tambah'])) {
				$nama_lengkap = $this->cetak_sess->user_masuk()->nama;
				$author = $this->cetak_sess->user_masuk()->username;
				$id_proker = strip_tags($this->input->post('id_proker'));

				$nama_gambar = $_FILES['gambar']['name'];
				$jenis_gambar = $_FILES['gambar']['type'];
				$ukuran_gambar = $_FILES['gambar']['size'];
				$tmp_gambar = $_FILES['gambar']['tmp_name'];

				$tempat_gambar = './assets/images/slideshow/'.$nama_gambar;

				if (!empty($_FILES['gambar']['name'])){
					if ($jenis_gambar == 'image/jpg' || $jenis_gambar == 'image/png' || $jenis_gambar == 'image/bmp') {
						if ($ukuran_gambar <= 10000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {
								$masuk_db = $this->M_slideshow->tambah($id_proker, $nama_gambar, $author, $nama_lengkap);
								if ($masuk_db) {
									echo "<script>alert('Proses Sukses :)'); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
								}else{
									echo "<script>alert('Proses Gagal :('); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
								}
							}else{
								echo "<script>alert('Gagal Memindahkan Gambar :)'); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
							}
						}else{
							echo "<script>alert('Gambar Terlalu Gede :('); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
						}
					}else{
						echo "<script>alert('Jenis Gambar Tidak Sesuai :('); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
					}
				}
			}else if (isset($_POST['simpan'])) {
				$nama_lengkap = $this->cetak_sess->user_masuk()->nama;
				$rujukan = $this->input->post('rujukan');
				$author = $this->cetak_sess->user_masuk()->username;
				$id_proker = strip_tags($this->input->post('id_proker'));
				$old_photo = $this->input->post('old_photo');

				$nama_gambar = $_FILES['gambar']['name'];
				$jenis_gambar = $_FILES['gambar']['type'];
				$ukuran_gambar = $_FILES['gambar']['size'];
				$tmp_gambar = $_FILES['gambar']['tmp_name'];

				$tempat_gambar = './assets/images/slideshow/'.$nama_gambar;
				if (!empty($_FILES['gambar']['name'])) {
					if ($jenis_gambar == 'image/jpg' || $jenis_gambar == 'image/png' || $jenis_gambar == 'image/bmp') {
						if ($ukuran_gambar <= 10000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {
								if ($old_photo != null) {
									$path = './assets/images/slideshow/'.$old_photo;
									unlink($path);
								}	
								$masuk_db = $this->M_slideshow->edit($rujukan, $id_proker, $nama_gambar, $author, $nama_lengkap);
								if ($masuk_db) {
									echo "<script>alert('Proses Sukses :)'); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
								}else{
									echo "<script>alert('Proses Gagal :('); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
								}
							}else{
								echo "<script>alert('Gagal Memindahkan Gambar :)'); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
							}
						}else{
							echo "<script>alert('Gambar Terlalu Gede :('); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
						}
					}else{
						echo "<script>alert('Jenis Gambar Tidak Sesuai :('); document.location='".site_url('admin/a_slideshow/slideshow')."';</script>";
					}
				}else{
					$nama_lengkap = $this->cetak_sess->user_masuk()->nama;
					$rujukan = $this->input->post('rujukan');
					$author = $this->cetak_sess->user_masuk()->username;
					$id_proker = strip_tags($this->input->post('id_proker'));
					$this->M_slideshow->edit_no_image($rujukan, $id_proker, $author, $nama_lengkap);

					redirect('admin/a_slideshow/');
				}
			}else if (isset($_POST['hapus_data'])) {
				$rujukan = $this->input->post('rujukan');
				$old_photo = $this->input->post('old_photo');
				$path = './assets/images/slideshow/'.$old_photo;
				if ($old_photo != null) {
					unlink($path);
				}
				$this->M_slideshow->hapus($rujukan);
				redirect('admin/a_slideshow/');
			}
		}

	}

?>