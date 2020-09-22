<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');	/**
	 * 
	 */

	class A_tutorial extends CI_Controller
	{

		function index(){
			$penulis = $this->cetak_sess->user_masuk()->nama;
			$this->load->model('M_tutorial');
			$data['isi'] = "admin/tutorial";
			$query = $this->M_tutorial->get($penulis);
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);

		}
		
		function tutorial()
		{
			$penulis = $this->cetak_sess->user_masuk()->nama;
			$this->load->model('M_tutorial');
			$data['isi'] = "admin/tutorial";
			$query = $this->M_tutorial->get($penulis);
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);

		}
		function tambah_tutorial()
		{
			$this->load->model('M_tutorial_kategori');
			$data['isi'] = "admin/tutorial_tambah";
			$query = $this->M_tutorial_kategori->get();
			$data['list_kategori'] = $query->result();
			$this->load->view('admin/index', $data);
		}

		function tutorial_edit($id_tutorial = null)
		{
			$this->load->model('M_tutorial_kategori');
			$this->load->model('M_tutorial');
			$query = $this->M_tutorial->get($id_tutorial);
			$query1 = $this->M_tutorial_kategori->get();
			$data['list_kategori'] = $query1->result();
			$data['tampil'] = $query->result();
			$data['isi'] = "admin/tutorial_ubah";
			$this->load->view('admin/index', $data);
		}

		// Untuk Menu Kategori tutorial
		function t_kategori()
		{
			$this->load->model('M_tutorial_kategori');
			$query = $this->M_tutorial_kategori->get();
			$data['tampil'] = $query->result();
			$data['isi'] = "admin/tutorial_kategori";
			$this->load->view('admin/index', $data);
		}

		function proses_kategori(){
			$this->load->model('M_tutorial_kategori');
			if (isset($_POST['tambah'])) {
				$jenis_kategori = strip_tags($this->input->post('jenis_kategori'));
				$kategori = "tutorial";

				$this->M_tutorial_kategori->tambah_kategori($jenis_kategori, $kategori);
				redirect('admin/a_tutorial/t_kategori');
			}else if (isset($_POST['simpan'])) {
				$jenis_kategori = strip_tags($this->input->post('jenis_kategori'));
				$kategori = "tutorial";
				$acuan = $this->input->post('acuan');

				$this->M_tutorial_kategori->edit_kategori($jenis_kategori, $kategori, $acuan);
				redirect('admin/a_tutorial/t_kategori');
			}else if (isset($_POST['hapus'])) {
				$acuan = $this->input->post('acuan');
				$this->M_tutorial_kategori->hapus_kategori($acuan);

				redirect('admin/a_tutorial/t_kategori');

			}
		}

		// Unutk Menu Tambah tutorial
		function proses_tambah(){
			if (isset($_POST['kirim'])) {
				$this->load->model('M_tutorial');
				$nama_gambar = md5($_FILES['gambar']['name']);
				$ukuran_gambar = $_FILES['gambar']['size'];
				$tmp_gambar = $_FILES['gambar']['tmp_name'];
				$jenis_gambar = $_FILES['gambar']['type'];

				$judul = ucwords(strip_tags($this->input->post('judul')));
				$author = ucfirst($this->cetak_sess->user_masuk()->nama);
				$tanggal = date('d-m-Y');
				$kategori = strip_tags($this->input->post('kategori'));
				$isi = $this->input->post('isi');
				$link = trim(strip_tags($this->input->post('link')));

				$tempat_gambar = "./assets/images/tutorial/".$nama_gambar;

				if ($nama_gambar != null) {
					if ($jenis_gambar == 'image/jpg' || $jenis_gambar == 'image/png' || $jenis_gambar == 'image/jpeg') {
						if ($ukuran_gambar <= 10000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {
								
								$masuk_db = $this->M_tutorial->tambah($judul, $nama_gambar, $author, $tanggal, $kategori, $isi, $link);
								if ($masuk_db) {
									redirect('admin/A_tutorial/tutorial');
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


		// Untuk Menu Edit tutorial
		function proses_edit(){
			if (isset($_POST['publish'])) {
				$this->load->model('M_tutorial_edit');
				$nama_gambar = md5($_FILES['gambar']['name']);
				$ukuran_gambar = $_FILES['gambar']['size'];
				$jenis_gambar = $_FILES['gambar']['type'];
				$tmp_gambar = $_FILES['gambar']['tmp_name'];
				

				

				if ($nama_gambar != null) {
						if ($ukuran_gambar <= 10000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {
								$judul = ucwords(strip_tags($this->input->post('judul')));
								$acuan = $this->input->post('acuan');
								$author = ucfirst($this->cetak_sess->user_masuk()->nama);
								$tanggal = date('d-m-Y');
								$kategori = strip_tags($this->input->post('kategori'));
								$isi = $this->input->post('isi');
								$link = trim(strip_tags($this->input->post('link')));

								$tempat_gambar = "./assets/images/tutorial/".$nama_gambar;

								$old_photo = strip_tags($this->input->post('old_photo'));
								$path = "./assets/images/tutorial/".$old_photo;
								if ($old_photo != null) {
									unlink($path);
								}
								$masuk_db = $this->M_tutorial_edit->edit_tutorial_dengan_gambar($acuan, $judul, $nama_gambar, $tanggal, $author, $kategori, $isi, $link);

								if ($masuk_db) {
									redirect('admin/A_tutorial/tutorial');
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
					$this->load->model('M_tutorial_edit');
					$judul = strip_tags($this->input->post('judul'));
					$acuan = $this->input->post('acuan');
					$author = ucfirst($this->cetak_sess->user_masuk()->nama);
					$link = trim(strip_tags($this->input->post('link')));
					$tanggal = date('d-m-Y');
					$kategori = strip_tags($this->input->post('kategori'));
					$isi = $this->input->post('isi');

					$this->M_tutorial_edit->edit_tutorial_tanpa_gambar($acuan, $judul, $tanggal, $author, $kategori, $isi, $link);

					redirect('admin/A_tutorial/tutorial');
				}
			}
		}
		function hapus_tutorial()
		{
			if (isset($_POST['hapus'])) {
				$this->load->model('M_tutorial');
				$acuan = $this->input->post('acuan');
				$old_photo = strip_tags($this->input->post('old_photo'));
				$path = "./assets/images/tutorial/".$old_photo;
				if ($old_photo != null) {
					unlink($path);
				}
				
				$this->M_tutorial->hapus($acuan);
				redirect('admin/a_tutorial');

			}
		}
	}

?>