<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class A_anggota extends CI_Controller
	{
		function __construct(){
			parent:: __construct();
			$this->load->model('M_anggota');
			$this->load->library('upload');
		}

		 function index()
		{
			$this->load->model('M_anggota');
			$data['isi'] = "admin/anggota";
			$query = $this->M_anggota->get();
			$data['tampil'] = $query->result();
			$data['jdl'] = 'BLUG - Data Anggota';
			$this->load->view('admin/index', $data);
		}

		 function anggota()
		{
			$this->load->model('M_anggota');
			$data['isi'] = "admin/anggota";
			$query = $this->M_anggota->get();
			$data['tampil'] = $query->result();
			$data['jdl'] = 'BLUG - Data Anggota';
			$this->load->view('admin/index', $data);
		}

		function proses_anggota(){
			$this->load->model('M_anggota');
			if (isset($_POST['tambah'])) {
				$nama_gambar = $_FILES['photo']['name'];
				$tipe_gambar = $_FILES['photo']['type'];
				$ukuran_gambar = $_FILES['photo']['size'];
				$tmp_gambar = $_FILES['photo']['tmp_name'];


				$nama = strip_tags($this->input->post('nama'));
				$posisi = strip_tags($this->input->post('posisi'));
				$angkatan = strip_tags($this->input->post('angkatan'));
				$divisi = strip_tags($this->input->post('divisi'));
				$jenis_kelamin = strip_tags($this->input->post('jenis_kelamin'));
				$alamat = strip_tags($this->input->post('alamat'));
				$status = strip_tags($this->input->post('status'));
				$username = strip_tags($this->input->post('username'));
				$password = $this->input->post('password');

				$tempat_gambar = "./assets/images/anggota/".$nama_gambar;
				if($nama_gambar != null){
					if ($tipe_gambar == "image/jpeg" || $tipe_gambar == "image/png" || $tipe_gambar == "image/jpg") {
						if ($ukuran_gambar <= 10000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {

								$cek_db = $this->M_anggota->tambah_dengan_gambar($nama, $posisi, $angkatan, $divisi, $jenis_kelamin, $alamat, $status, $username, $password, $nama_gambar);

								if ($cek_db) {
									redirect('admin/a_anggota/anggota');
								}else{
									?><script>alert("Tdak dapat masuk ke Database");</script><?php
	                    			redirect('admin/a_anggota/anggota');
								}
							}else{
								?><script>alert("Maaf Gambar Gagal di Upload");</script><?php
	                    		redirect('admin/a_anggota/anggota');
							}
						}else{
							?><script>alert("Ukuran Gambar Terlalu Besar");</script><?php
	                    	redirect('admin/a_anggota/anggota');
						}
					}else{
						?><script>alert("Tipe Gambar Tidak Sesuai");</script><?php
	                    redirect('admin/a_anggota/anggota');;
					}
				}else{
					$nama_photo = "";
					$nama = strip_tags($this->input->post('nama'));
					$posisi = strip_tags($this->input->post('posisi'));
					$angkatan = strip_tags($this->input->post('angkatan'));
					$divisi = strip_tags($this->input->post('divisi'));
					$jenis_kelamin = strip_tags($this->input->post('jenis_kelamin'));
					$alamat = strip_tags($this->input->post('alamat'));
					$status = strip_tags($this->input->post('status'));
					$username = strip_tags($this->input->post('username'));
					$password = strip_tags($this->input->post('password'));

					$this->M_anggota->tambah($nama,$username,$password,$posisi,$angkatan,$divisi,$jenis_kelamin,$alamat,$nama_photo,$status);
					
					redirect('admin/a_anggota/anggota');
				}
			}else if (isset($_POST['simpan'])) {
					$nama_gambar = $_FILES['photo']['name'];
					$tipe_gambar = $_FILES['photo']['type'];
					$ukuran_gambar = $_FILES['photo']['size'];
					$tmp_gambar = $_FILES['photo']['tmp_name'];

					$tempat_gambar = "./assets/images/anggota/".$nama_gambar;
				if(!empty($_FILES['photo']['name'])){
					$nama = strip_tags($this->input->post('nama'));
					$posisi = strip_tags($this->input->post('posisi'));
					$angkatan = strip_tags($this->input->post('angkatan'));
					$divisi = strip_tags($this->input->post('divisi'));
					$jenis_kelamin = strip_tags($this->input->post('jenis_kelamin'));
					$alamat = strip_tags($this->input->post('alamat'));
					$status = strip_tags($this->input->post('status'));
					$rujukan = $this->input->post('rujukan');

					$old_photo = $this->input->post('old_photo');
					$path='./assets/images/anggota/'.$old_photo;
					if ($old_photo != null) {
						unlink($path);
					}
					

					if ($tipe_gambar == "image/jpeg" || $tipe_gambar == "image/png" || $tipe_gambar == "image/jpg") {
						if ($ukuran_gambar <= 100000000) {
							if (move_uploaded_file($tmp_gambar, $tempat_gambar)) {

								$cek_db = $this->M_anggota->edit_dengan_gambar($rujukan, $nama, $posisi, $angkatan, $divisi, $jenis_kelamin, $alamat, $status, $nama_gambar);

								if ($cek_db) {
									redirect('admin/a_anggota/anggota');
								}else{
									?><script>alert("Tdak dapat masuk ke Database");</script><?php
	                    			redirect('admin/a_anggota/anggota');
								}
							}else{
								?><script>alert("Maaf Gambar Gagal di Upload");</script><?php
	                    		redirect('admin/a_anggota/anggota');
							}
						}else{
							?><script>alert("Ukuran Gambar Terlalu Besar");</script><?php
	                    	redirect('admin/a_anggota/anggota');
						}
					}else{
						?><script>alert("Tipe Gambar Tidak Sesuai");</script><?php
	                    redirect('admin/a_anggota/anggota');;
					}
	                 
	            }else{
						$rujukan = $this->input->post('rujukan');
						$nama = $this->input->post('nama');
						$posisi = $this->input->post('posisi');
						$angkatan = $this->input->post('angkatan');
						$divisi = $this->input->post('divisi');
						$jenis_kelamin = $this->input->post('jenis_kelamin');
						$alamat = $this->input->post('alamat');
						$status = $this->input->post('status');
						$this->M_anggota->edit_no_image($rujukan,$nama,$posisi,$angkatan,$divisi,$jenis_kelamin,$alamat,$status);
						
						redirect('admin/a_anggota/anggota');//setelah data disimpan halaman akan menuju link
			}
		}else if (isset($_POST['hapuss'])) {
			$rujukan = $this->input->post('rujukan');
			$old_photo = $this->input->post('old_photo');
			$path='./assets/images/anggota/'.$old_photo;
			if ($old_photo != null) {
				unlink($path);
			}

			$this->M_anggota->hapus_anggota($rujukan);

			redirect('admin/a_anggota/anggota');
		}
	}

	public function reset_pass()
	{
		if (isset($_POST['simpan_pass'])) {
			$id = strip_tags($this->input->post('id'));
			$username = strip_tags($this->input->post('username'));
			$password = strip_tags($this->input->post('passku2'));
			$this->M_anggota->reset_password($id, $password, $username);
			redirect('admin/a_anggota/anggota');
		}
		
	}
}