<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class A_kegiatan extends CI_Controller
	{
		function __construct(){
			parent:: __construct();
			$this->load->model('M_kegiatan');
		}
		
		function index()
		{
			$data['isi'] = "admin/kegiatan";
			$query = $this->M_kegiatan->get();
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);
		}

		function kegiatan()
		{
			$data['isi'] = "admin/kegiatan";
			$query = $this->M_kegiatan->get();
			$query1 = $this->M_kegiatan->get_kategori();
			$data['list_kategori'] = $query1->result();
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);
		}

		function proses_kegiatan(){
			if (isset($_POST['tambah'])) {
				$nama_gambar = $_FILES['poster']['name'];
				$ukuran_gambar = $_FILES['poster']['size'];
				$jenis_gambar = $_FILES['poster']['type'];
				$tmp_poster = $_FILES['poster']['tmp_name'];

				$tempat_gambar = './assets/images/kegiatan/'.$nama_gambar;

				if ($nama_gambar != null) {
					if ($jenis_gambar == 'image/jpg' || $jenis_gambar == 'image/png' || $jenis_gambar == 'image/jpeg') {
						if ($ukuran_gambar <= 10000000) {
							if (move_uploaded_file($tmp_poster, $tempat_gambar)) {
								$nama = strip_tags($this->input->post('nama'));
								$deskripsi = strip_tags($this->input->post('deskripsi'));
								$tgl_mulai = strip_tags($this->input->post('tgl_mulai'));
								$tgl_selesai = strip_tags($this->input->post('tgl_selesai'));
								$tempat = strip_tags($this->input->post('tempat'));
								$jam = strip_tags($this->input->post('jam'));
								$author = ucfirst($this->cetak_sess->user_masuk()->nama);
								$tanggal = date('d M Y');
								$kategori = strip_tags($this->input->post('kategori'));


								$cek_db = $this->M_kegiatan->tambah_kegiatan($nama, $deskripsi, $tanggal, $tempat, $jam, $tgl_mulai, $tgl_selesai, $nama_gambar, $author, $kategori);

								if ($cek_db) {
									redirect('admin/a_kegiatan/kegiatan');
								}else{
									echo "Gagal Bro";
								}
							}else{
								echo "Gagal Memindahkan Gambar";
							}
						}else{
							echo "Gambar Terlalu Gede Coy";
						}
					}else{
						echo "extensi Gambar cuk";
					}
				}else{
					echo "Masuk Gambar";
				}
			}else if (isset($_POST['simpan'])) {
				$nama_gambar = $_FILES['poster']['name'];
				$ukuran_gambar = $_FILES['poster']['size'];
				$jenis_gambar = $_FILES['poster']['type'];
				$tmp_poster = $_FILES['poster']['tmp_name'];

				$tempat_gambar = './assets/images/kegiatan/'.$nama_gambar;

				if ($nama_gambar != null) {
					$poster_lama = strip_tags($this->input->post('poster_lama'));
					$path = './assets/images/kegiatan/'.$poster_lama;
					if ($old_photo != null) {
						unlink($path);
					}

						if ($ukuran_gambar <= 10000000) {
							if (move_uploaded_file($tmp_poster, $tempat_gambar)) {
								$kategori = strip_tags($this->input->post('kategori'));
								$acuan = $this->input->post('acuan');
								$nama = strip_tags($this->input->post('nama'));
								$deskripsi = strip_tags($this->input->post('deskripsi'));
								$tgl_mulai = strip_tags($this->input->post('tgl_mulai'));
								$tgl_selesai = strip_tags($this->input->post('tgl_selesai'));
								$tempat = strip_tags($this->input->post('tempat'));
								$jam = strip_tags($this->input->post('jam'));
								$author = ucfirst($this->cetak_sess->user_masuk()->nama);
								$tanggal = date('d M Y');

								
								
								$cek_db = $this->M_kegiatan->edit_dengan_gambar($acuan, $nama, $deskripsi, $tanggal, $tempat, $jam, $tgl_mulai, $tgl_selesai, $nama_gambar, $author, $kategori);

								if ($cek_db) {
									redirect('admin/a_kegiatan/kegiatan');
								}else{
									echo "Gagal Bro";
								}
							}else{
								echo "Gagal Memindahkan Gambar";
							}
						}else{
							echo "Gambar Terlalu Gede Coy";
						}
				}else{
					$kategori = strip_tags($this->input->post('kategori'));
					$acuan = $this->input->post('acuan');
					$nama = strip_tags($this->input->post('nama'));
					$deskripsi = strip_tags($this->input->post('deskripsi'));
					$tgl_mulai = strip_tags($this->input->post('tgl_mulai'));
					$tgl_selesai = strip_tags($this->input->post('tgl_selesai'));
					$tempat = strip_tags($this->input->post('tempat'));
					$jam = strip_tags($this->input->post('jam'));
					$author = ucfirst($this->cetak_sess->user_masuk()->nama);
					$tanggal = date('d M Y');

					$this->M_kegiatan->edit_tanpa_gambar($acuan,$nama, $deskripsi, $tanggal, $tempat, $jam, $tgl_mulai, $tgl_selesai, $author, $kategori);
					redirect('admin/a_kegiatan/kegiatan');
				}
			}else if (isset($_POST['hapus'])) {
				$acuan = $this->input->post('acuan');
				$poster_lama = strip_tags($this->input->post('poster_lama'));
				$path = './assets/images/kegiatan/'.$poster_lama;
				if ($old_photo != null) {
					unlink($path);
				}
				
				$this->M_kegiatan->hapus_kegiatan($acuan);				
			}
		}

		// Menu Kategori Kegiatan
		function k_kategori()
		{
			$this->load->model('M_kegiatan');
			$query = $this->M_kegiatan->get_kategori();
			$data['tampil'] = $query->result();
			$data['isi'] = "admin/kegiatan_kategori";
			$this->load->view('admin/index', $data);
		}

		function proses_kegiatan_kategori()
		{
			$this->load->model('M_kegiatan');
			if (isset($_POST['tambah'])) {
				$jenis_kategori = strip_tags($this->input->post('jenis_kategori'));
				$kategori = "Kegiatan";

				$this->M_kegiatan->tambah_kategori($jenis_kategori, $kategori);
				redirect('admin/a_kegiatan/k_kategori');
			}else if (isset($_POST['simpan'])) {
				$jenis_kategori = strip_tags($this->input->post('jenis_kategori'));
				$kategori = "Kegiatan";
				$acuan = $this->input->post('acuan');

				$this->M_kegiatan->edit_kategori($jenis_kategori, $kategori, $acuan);
				redirect('admin/a_kegiatan/k_kategori');
			}else if (isset($_POST['hapus'])) {
				$acuan = $this->input->post('acuan');
				$this->M_kegiatan->hapus_kategori($acuan);

				redirect('admin/a_kegiatan/k_kategori');

			}
		}


	}

?>