<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');	/**
	 * 
	 */
	class A_absensi extends CI_Controller
	{
		function __construct(){
			parent:: __construct();
			$this->load->model('M_absen');
		}

		function index()
		{
			$data['isi'] = "admin/absen";
			$query = $this->M_absen->get();
			$data['jumlah_baris'] = $query->num_rows(); 
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);
		}

		function absen()
		{
			$data['isi'] = "admin/absen";
			$query = $this->M_absen->get();
			$data['jumlah_baris'] = $query->num_rows(); 
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);
		}


		function proses_absensi()
		{
			$jumlah_baris = $this->input->post('jumlah_baris');
			$tanggal = $this->input->post('tanggal');
			if (isset($_POST['simpan'])) {
				for ($i=1; $i <= $jumlah_baris; $i++) { 
					$id_anggota = $this->input->post('id_anggota-'.$i);
					$kehadiran = $this->input->post('kehadiran-'.$i);
					$keterangan = $this->input->post('keterangan-'.$i);
					$nama_anggota = $this->input->post('nama-'.$i);
					$masuk = $this->M_absen->simpan_absen($tanggal, $kehadiran, $keterangan, $nama_anggota, $id_anggota);
				}
				if ($masuk) {
					
					echo "<script>alert('Data Berhasil Di upload');window.location = '".site_url('admin/A_absensi/data_absensi')."'</script>";
				}else{
					echo "Gagal";
				}
			}
		}
		

		// Data Absensi
		public function data_absensi()
		{
			$data['isi'] = "admin/absensi_data";
			$query = $this->M_absen->get();
			$data['tampil'] = $query->result();
			$this->load->view('admin/index', $data);
		}

	}

?>