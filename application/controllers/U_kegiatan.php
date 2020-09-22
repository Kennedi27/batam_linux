<?php
	defined('BASEPATH') or exit("No Script Access direct");
	class U_kegiatan extends CI_Controller
	{
		function __construct(){
			parent:: __construct();
			$this->load->model('M_kegiatan');
		}
		public function index()
		{
			$query = $this->M_kegiatan->slide_kegiatan();
			$query1 = $this->M_kegiatan->get2();
			$query2 = $this->M_kegiatan->menu_kategori();
			$kegiatan['menu_k'] = $query2->result();
			$kegiatan['untuk_isi'] = $query1->result();
			$kegiatan['s_event'] = $query->result();
			$kegiatan['content']="user/kegiatan";
			$this->load->view("user/index", $kegiatan );
		}

		public function kegiatan()
		{
			$query = $this->M_kegiatan->slide_kegiatan();
			$query1 = $this->M_kegiatan->get2();
			$query2 = $this->M_kegiatan->menu_kategori();
			$kegiatan['menu_k'] = $query2->result();
			$kegiatan['untuk_isi'] = $query1->result();
			$kegiatan['s_event'] = $query->result();
			$kegiatan['content']="user/kegiatan";
			$this->load->view("user/index", $kegiatan );
		}
		public function detail_event()
		{
			$kategori_event = $this->input->get('kategori_event');
			$query = $this->M_kegiatan->slide_kegiatan();
			$query1 = $this->M_kegiatan->get5($kategori_event);
			$query2 = $this->M_kegiatan->menu_kategori();
			$kegiatan['menu_k'] = $query2->result();
			$kegiatan['untuk_isi'] = $query1->result();
			$kegiatan['s_event'] = $query->result();
			$kegiatan['content']="user/kegiatan";
			$this->load->view("user/index", $kegiatan );
		}
		public function detail_event2()
		{
			$item_kegiatan = $this->input->get('item_kegiatan');
			$query1 = $this->M_kegiatan->get6($item_kegiatan);
			$query2 = $this->M_kegiatan->menu_kategori();
			$kegiatan['menu_k'] = $query2->result();
			$kegiatan['untuk_isi'] = $query1->result();
			$kegiatan['content']="user/kegiatan_detail";
			$this->load->view("user/index", $kegiatan );
		}

	}

?>