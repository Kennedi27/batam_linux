-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2020 at 04:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batam_linux`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `tanggal` date NOT NULL,
  `no_absen` int(11) NOT NULL,
  `kehadiran` enum('A','I','S','H') COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_anggota` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`tanggal`, `no_absen`, `kehadiran`, `keterangan`, `nama_anggota`, `id_anggota`) VALUES
('2020-02-24', 16, 'H', '', 'Kennedi Riado Nadeak', 61),
('2020-02-19', 18, 'A', '', 'Kennedi Riado Nadeak', 61),
('2020-02-24', 20, 'A', '', 'Kennedi Riado Nadeak', 61),
('2020-02-26', 22, 'A', '', 'Kennedi Riado Nadeak', 61),
('2020-02-26', 24, 'H', '', 'Kennedi Riado Nadeak', 61),
('2020-02-26', 27, 'I', '', 'Kennedi Riado Nadeak', 61),
('2020-02-27', 30, 'H', '', 'Kennedi Riado Nadeak', 61),
('2020-03-16', 33, 'I', '', 'Kennedi Riado Nadeak', 61);

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `username`, `password`, `posisi`, `divisi`, `angkatan`, `jenis_kelamin`, `status`, `photo`, `alamat`) VALUES
(61, 'Kennedi Riado Nadeak', 'Kennedi27', '9d3ab549d792e63142eaf11df38c7d1b', 'Bendahara', 'Programing', '2020', 'Laki - Laki', 'Pengurus', '26239036_559459107751664_3010410472022404778_n.jpg', 'Putri 7 Blok J No. 02 Batu Aji'),
(66, 'Silvi Saputri', 'Silvi123', '62ac46b59681f4eb996de01495fc8830', 'Sekretaris', 'DPA', '2020', 'Perempuan', 'Pengurus', 'logo-rental-1.jpg', 'Entahlah'),
(1155, 'Silvi Saputri', 'Silvi1238', '62ac46b59681f4eb996de01495fc8830', 'Sekretaris', 'DPA', '2020', 'Perempuan', 'Pengurus', '', 'Entahlah');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `pembaca` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `gambar`, `author`, `tanggal`, `pembaca`, `kategori`, `isi`) VALUES
(22, 'Hari Yang Cerah', 'Screenshot from 2020-07-28 20-01-16.png', 'Kennedi Riado Nadeak', '21-08-2020', 0, 'Linux', '<p>Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah</p>\r\n'),
(23, 'Kapan Kan Hidup Ini Bisa Nyaman', 'Screenshot from 2020-07-28 20-01-16.png', 'Kennedi Riado Nadeak', '21-08-2020', 0, 'PHP', '<p>Kapan kan hidup ini bisa nyaman Kapan kan hidup ini bisa nyaman Kapan kan hidup ini bisa nyaman Kapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyamanKapan kan hidup ini bisa nyaman</p>\r\n'),
(24, 'Aku Tahu Ini Tidak Adil', '9178e7e9a05e75af7736d89639be1f9cjpg', 'Kennedi Riado Nadeak', '21-09-2020', 0, 'PHP', '<p>Aku tahu ini tidak adil Aku tahu ini tidak adil Aku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adilAku tahu ini tidak adil</p>\r\n'),
(25, 'Aku Tak Tahu Apa Apa ', '0b20955bf1998cfa22390850f31175c7', 'Kennedi Riado Nadeak', '21-08-2020', 0, 'PHP', '<p>aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa aku tak tahu apa apa</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `id_book` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `waktu` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id_book`, `judul`, `gambar`, `deskripsi`, `kategori`, `link`, `waktu`, `author`) VALUES
(13, 'ajdaj', '1529717471179.jpg', 'sdm', 'gian', 'jdja', 'Saturday, 29-02-2020', 'Kennedi27'),
(14, 'dasjd', '1529717471179.jpg', 'sajsh hskhd  ahskdjhakdhasjkhdjka hakj kjashdjkas hdkjasasjkka  jkasdhaskda h k daska a kas kjas kjsahdjk adkjh kjadkasdjk akjask asjkas sadkjash kh jkh askjdhkasjdjkas s  dhkahjka aks askask askasjkjkaskjdakj ask   jhdasjkh asdh akhdsakj kj sj ha akj akjakj', 'gian', 'sssa', 's', '');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `topik` text NOT NULL,
  `tanggal` date NOT NULL,
  `partisipan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id_forum`, `author`, `topik`, `tanggal`, `partisipan`) VALUES
(1, 'Kennedi27', 'Mengapa Milih Linux ?', '2020-06-11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `forum_detail`
--

CREATE TABLE `forum_detail` (
  `id` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `balasan` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_detail`
--

INSERT INTO `forum_detail` (`id`, `id_forum`, `username`, `balasan`, `tanggal`, `waktu`) VALUES
(4, 1, 'K', 'sdas', '2020-06-10', '00:00:00'),
(5, 1, 'K', 'dasd', '2020-06-24', '00:00:00'),
(6, 1, 'sdf', 'sdfs', '2020-06-17', '00:00:00');

--
-- Triggers `forum_detail`
--
DELIMITER $$
CREATE TRIGGER `jml_partisipan` AFTER INSERT ON `forum_detail` FOR EACH ROW BEGIN UPDATE forum d SET d.partisipan = (SELECT COUNT(DISTINCT(dtl.username)) FROM forum_detail dtl, forum frm WHERE dtl.id_forum = frm.id_forum) WHERE d.id_forum = NEW.id_forum;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `isi_deskripsi`
--

CREATE TABLE `isi_deskripsi` (
  `id_deskripsi` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` int(11) NOT NULL,
  `deskripsi` int(11) NOT NULL,
  `link` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis_kategori` varchar(225) NOT NULL,
  `kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis_kategori`, `kategori`) VALUES
(1, 'PHP', 'Artikel'),
(3, 'Linux', 'Artikel'),
(6, 'uyui', 'Artikel'),
(8, 'asd', 'Artikel'),
(12, 'll', 'Ebook'),
(13, 'sal', 'Ebook'),
(14, 'JIka', 'Kegiatan'),
(16, 'dirinya', 'Kegiatan'),
(17, 'hk', 'Artikel'),
(18, 'gdfgd', 'Artikel'),
(19, 'gdfgdg', 'Artikel'),
(20, 'dfgd', 'Artikel'),
(24, 'sad', 'Artikel'),
(26, 'jika', 'Kegiatan'),
(27, 'gian', 'Ebook'),
(28, 'Seminar', 'Kegiatan'),
(29, 'jsdask', 'tutorial'),
(30, 'juj', 'tutorial'),
(33, 'gjhgjh', 'Artikel');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jam` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `poster` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama`, `deskripsi`, `tanggal`, `tempat`, `jam`, `tgl_mulai`, `tgl_selesai`, `poster`, `author`, `kategori`) VALUES
(2, 'Kena', 'Apa Saja', '29 Feb 2020', 'sdahd', 'ashd', '2020-01-27', '2020-02-11', 'Capture001.png', 'Kennedi', 'Seminar'),
(3, 'Industri 4.0', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', '07 Apr 2020', 'Mega Mall', '10 : 00 - 12 : 00', '2020-04-08', '2020-04-08', '1 IFLgp1jCqGNWq7WCE3rICg.png', 'Kennedi Riado Nadeak', 'Seminar'),
(4, 'Kena', 'Apa Saja', '29 Feb 2020', 'sdahd', 'ashd', '2020-01-27', '2020-02-11', 'Capture001.png', 'Kennedi', 'Seminar'),
(5, 'Industri 4.0', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', '07 Apr 2020', 'Mega Mall', '10 : 00 - 12 : 00', '2020-04-08', '2020-04-08', '1 IFLgp1jCqGNWq7WCE3rICg.png', 'Kennedi Riado Nadeak', 'Seminar'),
(6, 'Kena', 'Apa Saja', '29 Feb 2020', 'sdahd', 'ashd', '2020-01-27', '2020-02-11', 'Capture001.png', 'Kennedi', 'Seminar'),
(7, 'Industri 4.0', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', '07 Apr 2020', 'Mega Mall', '10 : 00 - 12 : 00', '2020-04-08', '2020-04-08', '1 IFLgp1jCqGNWq7WCE3rICg.png', 'Kennedi Riado Nadeak', 'Seminar'),
(8, 'Kena', 'Apa Saja', '29 Feb 2020', 'sdahd', 'ashd', '2020-01-27', '2020-02-11', 'Capture001.png', 'Kennedi', 'Seminar'),
(9, 'Industri 4.0', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', '07 Apr 2020', 'Mega Mall', '10 : 00 - 12 : 00', '2020-04-08', '2020-04-08', '1 IFLgp1jCqGNWq7WCE3rICg.png', 'Kennedi Riado Nadeak', 'Seminar'),
(10, 'BLas', 'sadsad', '07 Sep 2020', 'da', '10 : 00 - 20 : 00', '2020-09-08', '2020-09-24', 'axaxa.jpeg', 'Kennedi Riado Nadeak', 'Seminar');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` varchar(28) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_keuangan`, `nama`, `status`, `tanggal`, `jumlah`, `keterangan`) VALUES
(1, 'Kennedi', 'Pemasukan', '2020-04-01', '75000', 'Uang Iuaran'),
(2, 'Kennedi', 'Pemasukan', '2020-05-01', '1200000', 'Uang Iuaran'),
(5, 'Kennedi Riado Nadeak', 'pengeluaran', '2020-05-01', '200000', 'Beli Kertas'),
(6, 'Kennedi', 'Pengeluaran', '2020-05-01', '20000', 'Makan Makan'),
(8, 'Kennedi Riado Nadeak', 'Pengeluaran', '2020-05-01', '125000', 'Minum'),
(9, 'Kennedi Riado Nadeak', 'Pengeluaran', '0000-00-00', '23000', 'Makan Makan'),
(10, 'Kennedi Riado Nadeak', 'Pengeluaran', '2020-05-31', '29000', 'bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pengunjung_ip` varchar(255) NOT NULL,
  `perangkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `pengunjung_tanggal`, `pengunjung_ip`, `perangkat`) VALUES
(5, '2020-09-09 06:14:49', '127.0.0.1', 'Firefox'),
(6, '2020-09-17 06:42:01', '127.0.0.1', 'Firefox');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `email_pengirim` varchar(50) NOT NULL,
  `telp_pengirim` varchar(13) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id_proker` int(11) NOT NULL,
  `nama_proker` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id_proker`, `nama_proker`) VALUES
(1, 'Fossday'),
(2, 'Hacktoberfest'),
(3, 'OSC'),
(4, 'Pengaderan'),
(5, 'Blugsukan'),
(6, 'Bakti Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id_artikel_kat` int(11) NOT NULL,
  `id_proker` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id_artikel_kat`, `id_proker`, `author`, `gambar`, `nama_lengkap`) VALUES
(13, 3, 'Kennedi27', 'Screenshot from 2020-08-29 23-41-09.png', 'Kennedi Riado Nadeak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_status` int(11) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `kategori_Komentar_post` varchar(255) NOT NULL,
  `komentar_parent` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_status`, `komentar_tanggal`, `komentar_tulisan_id`, `kategori_Komentar_post`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', NULL, '2018-08-07 15:09:07', 14, 'Tutorial', 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', NULL, '2018-08-07 15:14:26', 11, 'Artikel', 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', 11, '2018-08-08 03:54:56', 21, 'Artikel', 1),
(4, 'Kennedi', 'kens@gna.com', ' bagus kok', 11, '0000-00-00 00:00:00', 21, 'Artikel', 1),
(5, 'Janf', 'fas@dsa.com', ' fas', NULL, '0000-00-00 00:00:00', 14, 'Artikel', 0),
(6, 'fsdf', 'dfd@fd.vom', ' fdsfsdfsd', NULL, '2020-08-20 07:04:50', 14, 'Artikel', 0),
(7, 'sada', 'sda@sada.com', ' asda', NULL, '2020-08-20 07:13:01', 14, 'Artikel', 0),
(8, 'sdasd', 'fas@dsa.com', ' sdasd', NULL, '2020-08-20 07:14:14', 14, 'Artikel', 0),
(9, 'adsa', 'dfd@fd.vom', ' dasda', 13, '2020-08-20 07:15:02', 14, 'Tutorial', 1),
(10, 'asda', 'fas@dsa.com', ' sdad', NULL, '2020-08-20 07:15:50', 14, 'Artikel', 0),
(11, 'adasd', 'kens@gna.com', ' dfsfsdf', NULL, '2020-08-20 07:17:58', 21, 'Artikel', 0),
(12, 'dfs', 'dfd@fd.vom', ' fsdfs', NULL, '2020-08-20 07:18:21', 21, 'Artikel', 0),
(13, 'sas', 'fas@dsa.com', ' AS', NULL, '2020-08-20 13:59:03', 14, 'Tutorial', 0),
(14, 'dsadasd', 'kens@gna.com', ' asda', NULL, '2020-08-20 14:36:13', 14, 'Tutorial', 0),
(15, 'sada', 'dfd@fd.vom', ' dasda', NULL, '2020-08-20 14:37:20', 14, 'Tutorial', 0),
(16, 'dasd', 'sda@sada.com', ' sda', NULL, '2020-08-20 14:38:04', 11, 'Tutorial', 0),
(17, 'sad', 'dfd@fd.vom', ' dasd', NULL, '2020-08-21 04:52:31', 21, 'Artikel', 0),
(18, 'Kennedi', 'kens@gna.com', ' sasd', NULL, '2020-09-05 04:46:28', 22, 'Artikel', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id_tutorial` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `pembaca` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id_tutorial`, `judul`, `gambar`, `author`, `tanggal`, `pembaca`, `kategori`, `isi`, `link`) VALUES
(11, 'Dsjdhj', '12341017_1689906751223563_4071237074575081677_n.jpg', 'Kennedi', '04-03-2020', 0, 'jsdask', '<p>hdasda</p>\r\n', 'https://www.youtube.com/watch?v=0QTVQ65Cmrk'),
(12, 'Adasdajd', '12341017_1689906751223563_4071237074575081677_n.jpg', 'Kennedi', '04-03-2020', 0, 'juj', '<p>asjdajdk</p>\r\n', ''),
(14, 'Ini Hanya Untuk Coba Coba Saja Ini Hanya Untuk Coba Coba Saja Ini Hanya Untuk Coba Coba Saja', '1 IFLgp1jCqGNWq7WCE3rICg.png', 'Kennedi Riado Nadeak', '07-04-2020', 0, 'jsdask', '<p>sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adalah &nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp; sjdajkdl ashdla adailajdl&nbsp;&nbsp; dalsdjasljd&nbsp; asldjaldja&nbsp;</p>\r\n', ''),
(15, 'Hari Ini Hari Sabtu ', 'Screenshot from 2020-07-28 20-01-16.png', 'Kennedi Riado Nadeak', '21 Aug 2020', 0, 'jsdask', '<p>Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang CerahHari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah Hari Yang Cerah</p>\r\n', ''),
(16, 'Apa Yang Akan Saya Lakukan Sekarang', '87640211de00de387e83bce3567cf4da', 'Kennedi Riado Nadeak', '21-08-2020', 0, 'jsdask', '<p>lakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukanlakukanlah apa yang akan kamu lakukan</p>\r\n', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`no_absen`),
  ADD KEY `absen_ibfk_1` (`id_anggota`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `forum_detail`
--
ALTER TABLE `forum_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isi_deskripsi`
--
ALTER TABLE `isi_deskripsi`
  ADD PRIMARY KEY (`id_deskripsi`),
  ADD KEY `isi_deskripsi_ibfk_2` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id_artikel_kat`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id_tutorial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `no_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1156;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `forum_detail`
--
ALTER TABLE `forum_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `isi_deskripsi`
--
ALTER TABLE `isi_deskripsi`
  MODIFY `id_deskripsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id_artikel_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id_tutorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
