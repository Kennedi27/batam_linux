<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');	/**
	 * 
	 */

	class A_artikel extends CI_Controller
	{

		function index(){
			$penulis = $this->cetak_sess->user_masuk()->nama;
			$this->load->model('M_artikel');
			$data['isi'] = "admin/artikel";
			$query = $this->M_artikel->get($penulis);
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);

		}
		
		function artikel()
		{
			$penulis = $this->cetak_sess->user_masuk()->nama;
			$this->load->model('M_artikel');
			$data['isi'] = "admin/artikel";
			$query = $this->M_artikel->get($penulis);
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);

		}
		function tambah_artikel()
		{
			$this->load->model('M_artikel_kategori');
			$data['isi'] = "admin/artikel_tambah";
			$query = $this->M_artikel_kategori->get();
			$data['list_kategori'] = $query->result();
			$this->load->view('admin/index', $data);
		}

		function artikel_edit($id_artikel = null)
		{
			$this->load->model('M_artikel_kategori');
			$this->load->model('M_artikel');
			$query = $this->M_artikel->get($id_artikel);
			$query1 = $this->M_artikel_kategori->get();
			$data['list_kategori'] = $query1->result();
			$data['tampil'] = $query->result();
			$data['isi'] = "admin/artikel_ubah";
			$this->load->view('admin/index', $data);
		}

		// Untuk Menu Kategori Artikel
		function a_kategori()
		{
			$this->load->model('M_artikel_kategori');
			$query = $this->M_artikel_kategori->get();
			$data['tampil'] = $query->result();
			$data['isi'] = "admin/artikel_kategori";
			$this->load->view('admin/index', $data);
		}

		function proses_kategori(){
			$this->load->model('M_artikel_kategori');
			if (isset($_POST['tambah'])) {
				$jenis_kategori = strip_tags($this->input->post('jenis_kategori'));
				$kategori = "Artikel";

				$this->M_artikel_kategori->tambah_kategori($jenis_kategori, $kategori);
				redirect('admin/a_artikel/a_kategori');
			}else if (isset($_POST['simpan'])) {
				$jenis_kategori = strip_tags($this->input->post('jenis_kategori'));
				$kategori = "Artikel";
				$acuan = $this->input->post('acuan');

				$this->M_artikel_kategori->edit_kategori($jenis_kategori, $kategori, $acuan);
				redirect('admin/a_artikel/a_kategori');
			}else if (isset($_POST['hapus'])) {
				$acuan = $this->input->post('acuan');
				$this->M_artikel_kategori->hapus_kategori($acuan);

				redirect('admin/a_artikel/a_kategori');

			}
		}

		// Unutk Menu Tambah Artikel
		function proses_tambah(){
			if (isset($_POST['kirim'])) {
				$this->load->model('M_artikel');
				$nama_gambar = md5($_FILES['gambar']['name']);
				$ukuran_gambar = $_FILES['gambar']['size'];
				$tmp_gambar = $_FILES['gambar']['tmp_name'];
				$jenis_gambar = $_FILES['gambar']['type'];

				$judul = ucwords(strip_tags($this->input->post('judul')));
				$author = ucfirst($this->cetak_sess->user_masuk()->nama);
				$tanggal = date('d-m-Y');
				$kategori = strip_tags($this->input->post('kategori'));
				$isi = $this->input->post('isi');

				$tempat_gambar = "./assets/images/artikel/".$nama_gambar;

				if ($nama_gambar != null) {
					if ($jenis_gambar == 'image/jpg' || $jenis_gambar == 'image/png' || $jenis_gambar == 'image/jpeg') {
						if ($ukuran_gambar <= 10000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {
								
								$masuk_db = $this->M_artikel->tambah($judul, $nama_gambar, $author, $tanggal, $kategori, $isi);
								if ($masuk_db) {
									redirect('admin/A_artikel/artikel');
								}else{
									echo "Gagal";
								}

							}else{
								echo "Gagal Pindah Foto";
							}
						}else{
							echo "Ukuran Terlalu Besar";
						}
					}else{
						echo "Tipe Gambar Tidak Sesuai";
					}
				}else{
					echo "Gambar Tidak Ada";
				}
			}
		}


		// Untuk Menu Edit Artikel
		function proses_edit(){
			if (isset($_POST['publish'])) {
				$this->load->model('M_artikel_edit');
				$nama_gambar = md5($_FILES['gambar']['name']);
				$ukuran_gambar = $_FILES['gambar']['size'];
				$jenis_gambar = $_FILES['gambar']['type'];
				$tmp_gambar = $_FILES['gambar']['tmp_name'];
				

				$judul = ucwords(strip_tags($this->input->post('judul')));
				$acuan = $this->input->post('acuan');
				$author = ucfirst($this->cetak_sess->user_masuk()->nama);
				$tanggal = date('d-m-Y');
				$kategori = strip_tags($this->input->post('kategori'));
				$isi = $this->input->post('isi');

				$tempat_gambar = "./assets/images/artikel/".$nama_gambar;

				if ($nama_gambar != null) {
						if ($ukuran_gambar <= 10000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {

								$old_photo = strip_tags($this->input->post('old_photo'));
								$path = "./assets/images/artikel/".$old_photo;
								if ($old_photo != null) {
										unlink($path);
								}
								$masuk_db = $this->M_artikel_edit->edit_artikel_dengan_gambar($acuan, $judul, $nama_gambar, $tanggal, $author, $kategori, $isi);

								if ($masuk_db) {
									redirect('admin/A_artikel/artikel');
								}else{
									echo "Gagal Masuk Database";
								}

							}else{
								echo "Gagal Pindah Foto";
							}
						}else{
							echo "Ukuran Terlalu Besar";
						}
				}else{
					$this->load->model('M_artikel_edit');

					$judul = strip_tags($this->input->post('judul'));
					$acuan = $this->input->post('acuan');
					$author = ucfirst($this->cetak_sess->user_masuk()->nama);
					$tanggal = date('d-m-Y');
					$kategori = strip_tags($this->input->post('kategori'));
					$isi = $this->input->post('isi');

					$this->M_artikel_edit->edit_artikel_tanpa_gambar($acuan, $judul, $tanggal, $author, $kategori, $isi);

					redirect('admin/A_artikel/artikel');
				}
			}
		}
		function hapus_artikel()
		{
			if (isset($_POST['hapus'])) {
				$this->load->model('M_artikel');
				$acuan = $this->input->post('acuan');
				$old_photo = strip_tags($this->input->post('old_photo'));
				$path = "./assets/images/artikel/".$old_photo;
				if ($old_photo != null) {
						unlink($path);
				}
				
				$this->M_artikel->hapus($acuan);
				redirect('admin/a_artikel');

			}
		}
	}

?>