 <?php
	class M_pengunjung extends CI_Model
	{
		function hitung_pengunjung()
		{
			$this->load->library('user_agent');
		    // if (isset($_SERVER['HTTP_CLIENT_IP'])){
		    //     $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		    // }else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
		    //     $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    // }else if(isset($_SERVER['HTTP_X_FORWARDED'])){
		    //     $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		    // }else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
		    //     $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		    // }else if(isset($_SERVER['HTTP_FORWARDED'])){
		    //     $ipaddress = $_SERVER['HTTP_FORWARDED'];
		    // }else if(isset($_SERVER['REMOTE_ADDR'])){
		    //     $ipaddress = $_SERVER['REMOTE_ADDR'];
		    // }else{
		    //     $ipaddress = 'UNKNOWN';
		    // }
		    // return $ipaddress;
			$ipaddress = $_SERVER['REMOTE_ADDR'];
	        if ($this->agent->is_browser()){
	            $agent = $this->agent->browser();
	        }elseif ($this->agent->is_robot()){
	            $agent = $this->agent->robot();
	        }elseif ($this->agent->is_mobile()){
	            $agent = $this->agent->mobile();
	        }else{
	            $agent='Other';
	        }
	        $cek_ip = $this->db->query("SELECT * FROM pengunjung WHERE pengunjung_ip = '$ipaddress' AND DATE(pengunjung_tanggal) = CURDATE()");
	        if($cek_ip->num_rows() <= 0){
	            $hasil = $this->db->query("INSERT INTO pengunjung (pengunjung_ip, perangkat) VALUES('$ipaddress','$agent')");
	            return $hasil;
        	}
		}
	}

?> 