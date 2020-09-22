<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');	/**
	 * 
	 */
	class A_ebook extends CI_Controller
	{
		function __construct()
		{
			parent:: __construct();
			$this->load->model('M_ebook');
			$this->load->library('upload');
		}

		function index()
		{
			$author = $this->cetak_sess->user_masuk()->username;
			$query = $this->M_ebook->tampil_data($author);
			$data['tampil'] = $query->result();
			$data['isi'] = "admin/ebook";
			$this->load->view('admin/index', $data);
		}
		
		function ebook()
		{
			$author = $this->cetak_sess->user_masuk()->username;
			$query = $this->M_ebook->tampil_data($author);
			$query1 = $this->M_ebook->get_kategori();
			$data['tampil'] = $query->result();
			$data['list_kategori'] = $query1->result();
			$data['isi'] = "admin/ebook";
			$this->load->view('admin/index', $data);
		}

		function eb_kategori()
		{
			$query = $this->M_ebook->get_kategori();
			$data['tampil'] = $query->result();
			$data['isi'] = "admin/eb_kategori";
			$this->load->view('admin/index', $data);
		}

		function proses_eb_kategori()
		{
			if (isset($_POST['tambah'])) {
				$jenis_kategori = strip_tags($this->input->post('jenis_kategori'));
				$kategori = "Ebook";

				$this->M_ebook->tambah_kategori($jenis_kategori, $kategori);
				redirect('admin/a_ebook/eb_kategori');
			}else if (isset($_POST['simpan'])) {
				$jenis_kategori = strip_tags($this->input->post('jenis_kategori'));
				$kategori = "Ebook";
				$acuan = $this->input->post('acuan');

				$this->M_ebook->edit_kategori($jenis_kategori, $kategori, $acuan);
				redirect('admin/a_ebook/eb_kategori');
			}else if (isset($_POST['hapus'])) {
				$acuan = $this->input->post('acuan');
				$this->M_ebook->hapus_kategori($acuan);

				redirect('admin/a_ebook/eb_kategori');

			}
		}

		function proses_ebook()
		{
			$this->load->model('M_ebook');
			if (isset($_POST['tambah_ebook'])) 
			{
				$nama_gambar = $_FILES['gambar']['name'];
				$gambar_ukuran = $_FILES['gambar']['size'];
				$gambar_tipe = $_FILES['gambar']['type'];
				$tmp_gambar = $_FILES['gambar']['tmp_name'];

				$tempat_gambar = 'assets/images/ebook/'.$nama_gambar;

				if ($nama_gambar != null) {
					if ($gambar_tipe == 'image/jpg' || $gambar_tipe == 'image/png' || $gambar_tipe == 'image/jpeg') {
						if ($gambar_ukuran <= 10000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {
								
								$judul = strip_tags($this->input->post('judul'));
								$deskripsi = $this->input->post('deskripsi');
								$link = strip_tags($this->input->post('link'));
								$kategori = strip_tags($this->input->post('kategori'));
								$waktu = date('l, d-m-Y');

								$cek = $this->M_ebook->tambah_data_ebook($judul, $nama_gambar, $deskripsi, $kategori, $link, $waktu);

								if ($cek) {
										redirect('/admin/a_ebook/ebook');
								}else{
									echo "<script>alert('Gagal Bro !!')</script>";
								}
							}else{
								echo "Gagal Memindahkan Gambar";
							}
						}else{
							echo "Ukuran Gambar Terlalu Besar";
						}
					}else{
						echo "Tipe Gambar tidak Sesuai";
					}
				}
				
			}else if (isset($_POST['simpan'])) 
			{
				$nama_gambar = $_FILES['gambar']['name'];
				$gambar_ukuran = $_FILES['gambar']['size'];
				$gambar_tipe = $_FILES['gambar']['type'];
				$tmp_gambar = $_FILES['gambar']['tmp_name'];

				$tempat_gambar = 'assets/images/ebook/'.$nama_gambar;

				$acuan = $this->input->post('acuan');
				$judul = strip_tags($this->input->post('judul'));
				$deskripsi = $this->input->post('deskripsi');
				$link = strip_tags($this->input->post('link'));
				$kategori = strip_tags($this->input->post('kategori'));
				$waktu = date('l, d-m-Y');

				if ($nama_gambar != null) {
					$old_photo = $this->input->post('old_photo');
					$path = './assets/images/ebook/'.$old_photo;
					if ($old_photo != null) {
						unlink($path);
					}
						if ($gambar_ukuran <= 10000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {
								
								$cek = $this->M_ebook->update_with_photo($acuan, $judul, $nama_gambar, $deskripsi, $kategori, $link, $waktu);

								if ($cek) {
										redirect('/admin/a_ebook/ebook');
								}else{
									echo "<script>alert('Gagal Bro !!')</script>";
								}
							}else{
								echo "Gagal Memindahkan Gambar";
							}
						}else{
							echo "Ukuran Gambar Terlalu Besar";
						}
				}else{
						$acuan = $this->input->post('acuan');
						$judul = strip_tags($this->input->post('judul'));
						$deskripsi = $this->input->post('deskripsi');
						$link = strip_tags($this->input->post('link'));
						$kategori = strip_tags($this->input->post('kategori'));
						$waktu = date('l, d-m-Y');

						$this->M_ebook->update_tanpa_gambar($acuan, $judul, $deskripsi, $link, $kategori, $waktu);
						redirect('admin/a_ebook/ebook');
				}
			}else if (isset($_POST['hapus'])) {
				$acuan = $this->input->post('acuan');
				$old_photo = $this->input->post('old_photo');
				$path = './assets/images/ebook/'.$old_photo;
				if ($old_photo != null) {
						unlink($path);
				}

				$this->M_ebook->hapus_data($acuan);
				redirect('admin/a_ebook/ebook');
			}

		}
	}
?>