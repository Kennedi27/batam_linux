<?php

	class U_ebook extends CI_Controller
	{
		function __construct(){
			parent:: __construct();
			$this->load->model('M_ebook');
		}
		public function index()
		{
			$query = $this->M_ebook->getbuku();
			$query1 = $this->M_ebook->getbuku1();
			$query2 = $this->M_ebook->menu_kategori();
			$data['more_book'] = $query1->result();
			$data['menu_kategori'] = $query2->result();
			$data['semua_buku'] = $query->result();
			$data['content']="user/ebook";
			$this->load->view("user/index", $data );
		}

		public function ebook()
		{
			$query = $this->M_ebook->getbuku();
			$query1 = $this->M_ebook->getbuku1();
			$query2 = $this->M_ebook->menu_kategori();
			$data['more_book'] = $query1->result();
			$data['menu_kategori'] = $query2->result();
			$data['semua_buku'] = $query->result();
			$data['content']="user/ebook";
			$this->load->view("user/index", $data );
		}

		public function detail_buku()
		{
			$id_ebook = $this->input->get('blank');
			$query = $this->M_ebook->tampil_data($id_ebook);
			$query1 = $this->M_ebook->getbuku1();
			$query2 = $this->M_ebook->menu_kategori();
			$data['more_book'] = $query1->result();
			$data['menu_kategori'] = $query2->result();
			$data['detail'] = $query->result();
			$data['content']="user/rincianebook";
			$this->load->view("user/index", $data);
		}
		public function link_kategori()
		{
			$jenis_kategori = $this->input->get('jenis_kategori');
			$query = $this->M_ebook->get_isi_by_jenis_kategori($jenis_kategori);
			$query1 = $this->M_ebook->getbuku1();
			$query2 = $this->M_ebook->menu_kategori();
			$data['more_book'] = $query1->result();
			$data['menu_kategori'] = $query2->result();
			$data['link_gan'] = $query->result();
			$data['content']="user/ebook_kategori";
			$this->load->view("user/index", $data);
		}


	}

?>