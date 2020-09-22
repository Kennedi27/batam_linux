<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class A_beranda extends CI_Controller
	{
		function __construct(){
		parent:: __construct();
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->hitung_pengunjung();
	}
		
		function index()
		{
			$this->load->model('M_uang_kas');
			$keuangan1 = $this->M_uang_kas->pemasukan_kas_bulan_ini();
			$keuangan2 = $this->M_uang_kas->pengeluaran_kas_bulan_ini();
			$keuangan3 = $this->M_uang_kas->total_uang_kas();
			$keuangan4 = $this->M_uang_kas->pengeluaran_terakhir();
			$data['tampi_uang1'] = $keuangan1->result();
			$data['tampi_uang2'] = $keuangan2->result();
			$data['tampi_uang3'] = $keuangan3->result();
			$data['tampi_uang4'] = $keuangan4->result();
			$data['isi'] = "admin/beranda";
			$this->load->view('admin/index', $data);
		}

		public function beranda()
		{
			
			$this->load->model('M_uang_kas');
			$keuangan1 = $this->M_uang_kas->pemasukan_kas_bulan_ini();
			$keuangan2 = $this->M_uang_kas->pengeluaran_kas_bulan_ini();
			$keuangan3 = $this->M_uang_kas->total_uang_kas();
			$keuangan4 = $this->M_uang_kas->pengeluaran_terakhir();
			$data['tampi_uang1'] = $keuangan1->result();
			$data['tampi_uang2'] = $keuangan2->result();
			$data['tampi_uang3'] = $keuangan3->result();
			$data['tampi_uang4'] = $keuangan4->result();
			$data['isi'] = "admin/beranda";
			$this->load->view('admin/index', $data);	
		}

	}

?>