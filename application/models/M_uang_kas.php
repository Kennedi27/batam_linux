<?php
	
	class M_uang_kas extends CI_Model
	{
		function show(){
			$query = $this->db->query("SELECT * FROM keuangan WHERE status = 'Pemasukan' ");
			return $query;
		}
		// Uang Masuk
		function pemasukan_kas($nama, $status, $tanggal, $jumlah, $keterangan)
		{
			$hasil = $this->db->query("INSERT INTO keuangan VALUES('','$nama','$status','$tanggal','$jumlah','$keterangan')");
			return $hasil;
		}
		function pemasukan_ubah($acuan, $nama, $status, $tanggal, $jumlah, $keterangan)
		{
			$hasil = $this->db->query("UPDATE keuangan SET nama = '$nama', status = '$status', tanggal = '$tanggal', jumlah = '$jumlah', keterangan = '$keterangan' WHERE id_keuangan = '$acuan'");
			return $hasil;
		}
		function pemasukan_hapus($acuan)
		{
			$hasil = $this->db->query("DELETE FROM keuangan WHERE id_keuangan = '$acuan'");
			return $hasil;
		}

		// Uang Keluar
		function show2(){
			$query = $this->db->query("SELECT * FROM keuangan WHERE status = 'Pengeluaran' ");
			return $query;
		}
		function pengeluaran_kas($nama, $status, $tanggal, $jumlah, $keterangan)
		{
			$hasil = $this->db->query("INSERT INTO keuangan VALUES('','$nama','$status','$tanggal','$jumlah','$keterangan')");
			return $hasil;
		}
		function pengeluaran_ubah($acuan, $nama, $status, $tanggal, $jumlah, $keterangan)
		{
			$hasil = $this->db->query("UPDATE keuangan SET nama = '$nama', status = '$status', tanggal = '$tanggal', jumlah = '$jumlah', keterangan = '$keterangan' WHERE id_keuangan = '$acuan'");
			return $hasil;
		}
		function pengeluaran_hapus($acuan)
		{
			$hasil = $this->db->query("DELETE FROM keuangan WHERE id_keuangan = '$acuan'");
			return $hasil;
		}

		public function show3($dari_tanggal, $ke_tanggal)
		{
			$hasil = $this->db->query("SELECT * FROM keuangan WHERE tanggal >= '$dari_tanggal' AND tanggal <= '$ke_tanggal'");
			return $hasil;
		}

		public function show4($dari_tanggal, $ke_tanggal)
		{
			$hasil = $this->db->query("SELECT * FROM keuangan WHERE tanggal >= '$dari_tanggal' AND tanggal <= '$ke_tanggal' AND status = 'Pemasukan'");
			return $hasil;
		}

		public function show5($dari_tanggal, $ke_tanggal)
		{
			$hasil = $this->db->query("SELECT * FROM keuangan WHERE tanggal >= '$dari_tanggal' AND tanggal <= '$ke_tanggal' AND status = 'Pengeluaran'");
			return $hasil;
		}

		public function pemasukan_kas_bulan_ini()
		{
			$hasil = $this->db->query("SELECT SUM(jumlah) AS pemasukan_bulan_ini FROM keuangan WHERE status = 'pemasukan' AND CONCAT(YEAR(tanggal), '/', MONTH(tanggal)) = CONCAT(YEAR(NOW()), '/', MONTH(NOW()))");
			return $hasil;
		}

		public function pengeluaran_kas_bulan_ini()
		{
			$hasil = $this->db->query("SELECT SUM(jumlah) AS pengeluaran_bulan_ini FROM keuangan WHERE status = 'pengeluaran' AND CONCAT(YEAR(tanggal), '/', MONTH(tanggal)) = CONCAT(YEAR(NOW()), '/', MONTH(NOW()))");
			return $hasil;
		}
		public function total_uang_kas()
		{
			$hasil = $this->db->query("SELECT SUM(p.jumlah - c.jumlah) as total_kas FROM keuangan p, keuangan c WHERE p.status = 'pemasukan' AND c.status = 'pengeluaran'");
			return $hasil;
		}

		public function pengeluaran_terakhir()
		{
			$hasil = $this->db->query("SELECT * FROM keuangan WHERE status = 'pengeluaran' ORDER BY tanggal DESC LIMIT 5");
			return $hasil;
		}
	}

?>