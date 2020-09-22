<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_kontak extends CI_Model
	{
		// Backend

		// Front End
		public function insert_data($nama_pengirim, $email_pengirim, $telp_pengirim, $isi_pesan)
		{
			$catch_data = array(
							'nama_pengirim' => $nama_pengirim,
							'email_pengirim' => $email_pengirim,
							'telp_pengirim' => $telp_pengirim,
							'isi_pesan' => $isi_pesan
 						);
			return $this->db->insert('pesan', $catch_data);
		}
	}

?>