<?php

defined('BASEPATH') OR exit('NO direct script access allowed');

class M_tutorial extends CI_Model{

    public function get($penulis)
    {
        $hasil = $this->db->query("SELECT * FROM tutorial WHERE author = '$penulis'");
        return $hasil;
    }

    public function hapus($acuan)
    {
        $hasil = $this->db->query("DELETE FROM tutorial WHERE id_tutorial = '$acuan'");
        return $hasil;
    }

    public function tambah($judul, $nama_gambar, $author, $tanggal, $kategori, $isi, $link){
        $query = $this->db->query("INSERT INTO tutorial (judul, gambar, author, tanggal, kategori, isi, link)
                        VALUES('$judul', '$nama_gambar', '$author', '$tanggal', '$kategori', '$isi', '$link')");
        return $query;
    }

    // front End
    public function populer_menu(){
        $hasil = $this->db->query("SELECT * FROM tutorial ORDER BY tanggal DESC LIMIT 10");
        return $hasil;
    }
    public function kategori_menu(){
        $hasil = $this->db->query("SELECT * FROM kategori WHERE kategori = 'tutorial'");
        return $hasil;
    }
    public function isi_tutor(){
        $hasil = $this->db->query("SELECT * FROM tutorial ORDER BY tanggal DESC");
        return $hasil;
    }
    public function detail_tutor($id_tutorial)
    {
        $hasil = $this->db->query("SELECT * FROM tutorial WHERE id_tutorial = '$id_tutorial' ");
        return $hasil;
    }
    public function komentar($komentar_tulisan_id)
    {
        $hasil = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_tulisan_id = '$komentar_tulisan_id' AND kategori_komentar_post = 'Tutorial'");
        return $hasil;
    }
    public function tambah_komentar($komentar_nama, $komentar_email, $komentar_isi, $komentar_tulisan_id, $komentar_parent)
    {
        $hasil = $this->db->query("INSERT INTO tbl_komentar (komentar_nama, komentar_email, komentar_isi, komentar_tulisan_id, kategori_komentar_post, komentar_parent) VALUES('$komentar_nama', '$komentar_email', '$komentar_isi', '$komentar_tulisan_id', 'Tutorial', '$komentar_parent' )");
        return $hasil;
    }
    public function set_by_kategori($tag)
    {
        $hasil = $this->db->query("SELECT * FROM tutorial WHERE kategori = '$tag' ORDER BY tanggal DESC");
        return $hasil;
    }
}
?>