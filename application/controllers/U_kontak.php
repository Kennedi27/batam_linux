<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_kontak extends CI_Controller
	{
	public function kontak()
	{
		$data['content'] = "user/kontak";
		$this->load->view('user/index', $data);
	}
	public function proses_kontak()
	{
		$this->load->model('M_kontak');
		$nama_pengirim = strip_tags($this->input->post('xnama'));
		$email_pengirim = strip_tags($this->input->post('xemail'));
		$telp_pengirim = $this->input->post('xtelp');
		$pesan_pengirim = strip_tags($this->input->post('xpesan'));

		if (isset($_POST['kirim_pesan'])) {
			$query = $this->M_kontak->insert_data($nama_pengirim, $email_pengirim, $telp_pengirim, $pesan_pengirim);
			if ($query) {
				echo "<script>alert('Pesan Anda Terkirim');window.location.href='".site_url('u_kontak/kontak')."';</script>";
			}else{
				redirect('u_kontak/kontak');
			}
		}
	}
}