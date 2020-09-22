<?php
	defined('BASEPATH') OR exit('NO direct access script allowed');

	class A_keuangan extends CI_Controller
	{
		function __construct(){
			parent:: __construct();
			$this->load->model('M_uang_kas');
		}
		
		public function kas_masuk()
		{
			$query = $this->M_uang_kas->show();
			$data['tampil'] = $query->result();
			$data['isi'] = "admin/kas_masuk";
			$this->load->view('admin/index', $data);
		}
		public function proses_pemasukan()
		{
			if (isset($_POST['tambah'])) {
				$nama = ucfirst($this->cetak_sess->user_masuk()->nama);
				$status = "Pemasukan";
				$tanggal = date('d M y');
				$jumlah = strip_tags($this->input->post('jumlah'));
				$keterangan = strip_tags($this->input->post('keterangan'));
				$this->M_uang_kas->pemasukan_kas($nama, $status, $tanggal, $jumlah, $keterangan);
				redirect("admin/a_keuangan/kas_masuk");
			}elseif (isset($_POST['simpan'])) {
				$acuan = strip_tags($this->input->post('acuan'));
				$nama = ucfirst($this->cetak_sess->user_masuk()->nama);
				$status = "Pemasukan";
				$tanggal = date('d M y');
				$jumlah = strip_tags($this->input->post('jumlah'));
				$keterangan = strip_tags($this->input->post('keterangan'));
				$this->M_uang_kas->pemasukan_ubah($acuan, $nama, $status, $tanggal, $jumlah, $keterangan);
				redirect("admin/a_keuangan/kas_masuk");
			}elseif (isset($_POST['delete'])) {
				$acuan = strip_tags($this->input->post('acuan'));
				$this->M_uang_kas->pemasukan_hapus($acuan);
				redirect("admin/a_keuangan/kas_masuk");
			}
			
		}

		public function kas_keluaran()
		{
			$query = $this->M_uang_kas->show2();
			$data['tampil'] = $query->result();
			$data['isi'] = "admin/kas_keluaran";
			$this->load->view('admin/index', $data);
		}
		public function proses_pengeluaran()
		{
			if (isset($_POST['tambah'])) {
				$nama = ucfirst($this->cetak_sess->user_masuk()->nama);
				$status = "Pengeluaran";
				$tanggal = date('Y-m-d');
				$jumlah = strip_tags($this->input->post('jumlah'));
				$keterangan = strip_tags($this->input->post('keterangan'));
				$this->M_uang_kas->pengeluaran_kas($nama, $status, $tanggal, $jumlah, $keterangan);
				redirect("admin/a_keuangan/kas_keluaran");
			}elseif (isset($_POST['simpan'])) {
				$acuan = strip_tags($this->input->post('acuan'));
				$nama = ucfirst($this->cetak_sess->user_masuk()->nama);
				$status = "pengeluaran";
				$tanggal = date('d M y');
				$jumlah = strip_tags($this->input->post('jumlah'));
				$keterangan = strip_tags($this->input->post('keterangan'));
				$this->M_uang_kas->pengeluaran_ubah($acuan, $nama, $status, $tanggal, $jumlah, $keterangan);
				redirect("admin/a_keuangan/kas_keluaran");
			}elseif (isset($_POST['delete'])) {
				$acuan = strip_tags($this->input->post('acuan'));
				$this->M_uang_kas->pengeluaran_hapus($acuan);
				redirect("admin/a_keuangan/kas_keluaran");
			}
			
		}

		public function rekap_kas()
		{
			$data['isi'] = "admin/kas_rekap";
			$query4 = $this->M_uang_kas->pemasukan_kas_bulan_ini();
			$query5 = $this->M_uang_kas->pengeluaran_kas_bulan_ini();
			$query6 = $this->M_uang_kas->total_uang_kas();
			$data['tampil4'] = $query4->result();
			$data['tampil5'] = $query5->result();
			$data['tampil6'] = $query6->result();
			if (isset($_POST['laporan'])) {
				$dari_tanggal = strip_tags($this->input->post('dari_tanggal'));
				$ke_tanggal = strip_tags($this->input->post('ke_tanggal'));
				if ($ke_tanggal == "") {
					$ke_tanggal = $dari_tanggal;
				}
				$query = $this->M_uang_kas->show3($dari_tanggal, $ke_tanggal);
				$query3 = $this->M_uang_kas->show4($dari_tanggal, $ke_tanggal);
				$query2 = $this->M_uang_kas->show5($dari_tanggal, $ke_tanggal);
				$data['tampil1'] = $query->result();
				$data['tampil2'] = $query2->result();
				$data['tampil3'] = $query3->result();
			}
			$this->load->view('admin/index', $data);
		}

	}

?>