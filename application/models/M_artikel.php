<?php

defined('BASEPATH') OR exit('NO direct script access allowed');

class M_artikel extends CI_Model{

	public function get($penulis)
	{
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where('author', $penulis);
        $this->db->order_by('tanggal', 'DESC');
		$hasil = $this->db->get();
		return $hasil;
	}

	public function hapus($acuan)
	{
		$hasil = $this->db->query("DELETE FROM artikel WHERE id_artikel = '$acuan'");
		return $hasil;
	}

	public function tambah($judul, $nama_gambar, $author, $tanggal, $kategori, $isi){
		$query = $this->db->query("INSERT INTO artikel (judul, gambar, author, tanggal, kategori, isi)
						VALUES('$judul', '$nama_gambar', '$author', '$tanggal', '$kategori', '$isi')");
		return $query;
	}

	// front End
	public function tampil_beranda()
	{
		$hasil = $this->db->query("SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 12");
		return $hasil;
	}

	public function tampil_artikel($cek_kategori)
	{
		$hasil = $this->db->query("SELECT * FROM artikel WHERE kategori = '$cek_kategori' ORDER BY tanggal DESC");
		return $hasil;
	}

    public function kategori_menu(){
        $hasil = $this->db->query("SELECT * FROM kategori WHERE kategori = 'artikel'");
        return $hasil;
    }

    public function isi_artikel(){
        $hasil = $this->db->query("SELECT * FROM artikel ORDER BY tanggal DESC");
        return $hasil;
    }

    public function detail_artikel($judul)
    {
        $hasil = $this->db->query("SELECT * FROM artikel WHERE id_artikel = '$judul'");
        return $hasil;
    }

    public function komentar_artikel($komentar_tulisan_id)
    {
        $hasil = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_tulisan_id = '$komentar_tulisan_id' AND kategori_komentar_post = 'Artikel' AND komentar_parent = '0'");
        return $hasil;
    }
    public function tambah_komentar ($komentar_nama, $komentar_email, $komentar_isi, $komentar_tulisan_id, $komentar_parent)
    {
    	$hasil = $this->db->query("INSERT INTO tbl_komentar (komentar_nama, komentar_email, komentar_isi, komentar_tulisan_id, kategori_komentar_post, komentar_parent) VALUES('$komentar_nama', '$komentar_email', '$komentar_isi', '$komentar_tulisan_id', 'Artikel', '$komentar_parent' )");
    	return $hasil;
    }
    public function populer_menu(){
        $hasil = $this->db->query("SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 10");
        return $hasil;
    }
    public function populer_menu_index(){
        $hasil = $this->db->query("SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 13");
        return $hasil;
    }
}
?>