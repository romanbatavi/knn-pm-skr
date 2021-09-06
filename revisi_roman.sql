-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 07:09 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revisi_roman`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_knn`
--

CREATE TABLE `master_knn` (
  `id_master_knn` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `A01` varchar(50) NOT NULL,
  `A03` varchar(50) NOT NULL,
  `A06` varchar(50) NOT NULL,
  `A08` varchar(50) NOT NULL,
  `id_user2` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_knn`
--

INSERT INTO `master_knn` (`id_master_knn`, `id_user`, `A01`, `A03`, `A06`, `A08`, `id_user2`) VALUES
(8, 79, '3', '2', '3', '3', 129),
(9, 79, '2', '2', '2', '2', 133),
(10, 79, '3', '2', '2', '2', 1),
(11, 79, '2', '2', '3', '3', 2),
(12, 79, '3', '1', '3', '2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `master_nilai`
--

CREATE TABLE `master_nilai` (
  `id_master` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `ips` varchar(50) NOT NULL,
  `ipa` varchar(50) NOT NULL,
  `pkn` varchar(50) NOT NULL,
  `bindo` varchar(50) NOT NULL,
  `mtk` varchar(50) NOT NULL,
  `bing` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_nilai`
--

INSERT INTO `master_nilai` (`id_master`, `id_user`, `ips`, `ipa`, `pkn`, `bindo`, `mtk`, `bing`, `agama`) VALUES
(8, 129, '7', '8', '8', '9', '8', '8', '7'),
(9, 79, '7', '7', '9', '8', '7', '8', '8'),
(10, 130, '7', '8', '8', '8', '8', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `pm_aspek`
--

CREATE TABLE `pm_aspek` (
  `id_aspek` varchar(6) NOT NULL,
  `namaaspek` varchar(100) NOT NULL,
  `persentase` float NOT NULL,
  `bobot_core` float NOT NULL,
  `bobot_secondary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_aspek`
--

INSERT INTO `pm_aspek` (`id_aspek`, `namaaspek`, `persentase`, `bobot_core`, `bobot_secondary`) VALUES
('A001', 'Penilaian', 30, 60, 40),
('A002', 'Kemampuan', 20, 70, 30),
('A003', 'Kegiatan', 10, 60, 40),
('A004', 'Ekstrakulikuler', 10, 60, 40),
('A005', 'Sikap', 10, 60, 40),
('A006', 'Prestasi', 20, 60, 40);

-- --------------------------------------------------------

--
-- Table structure for table `pm_ekskul`
--

CREATE TABLE `pm_ekskul` (
  `kdnilai4` int(2) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nilai_futsal` int(3) NOT NULL,
  `target_futsal` int(3) NOT NULL,
  `selisih_futsal` float NOT NULL,
  `nilai_bobot_futsal` float NOT NULL,
  `nilai_basket` int(3) NOT NULL,
  `target_basket` int(3) NOT NULL,
  `selisih_basket` float NOT NULL,
  `nilai_bobot_basket` float NOT NULL,
  `nilai_pramuka` int(3) NOT NULL,
  `target_pramuka` int(3) NOT NULL,
  `selisih_pramuka` float NOT NULL,
  `nilai_bobot_pramuka` float NOT NULL,
  `nilai_paskibra` int(3) NOT NULL,
  `target_paskibra` int(3) NOT NULL,
  `selisih_paskibra` float NOT NULL,
  `nilai_bobot_paskibra` float NOT NULL,
  `nilai_cf_A4` float NOT NULL,
  `nilai_sf_A4` float NOT NULL,
  `nilai_tot_A4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_ekskul`
--

INSERT INTO `pm_ekskul` (`kdnilai4`, `angkatan`, `id_user`, `nilai_futsal`, `target_futsal`, `selisih_futsal`, `nilai_bobot_futsal`, `nilai_basket`, `target_basket`, `selisih_basket`, `nilai_bobot_basket`, `nilai_pramuka`, `target_pramuka`, `selisih_pramuka`, `nilai_bobot_pramuka`, `nilai_paskibra`, `target_paskibra`, `selisih_paskibra`, `nilai_bobot_paskibra`, `nilai_cf_A4`, `nilai_sf_A4`, `nilai_tot_A4`) VALUES
(11, '2021', '79', 10, 10, 0, 5, 10, 10, 0, 5, 9, 10, -1, 4.5, 9, 10, -1, 4.5, 4.5, 5, 4.75),
(12, '2020', '130', 10, 10, 0, 5, 10, 10, 0, 5, 10, 10, 0, 5, 9, 10, -1, 4.5, 4.75, 5, 4.875),
(13, '2020', '130', 10, 10, 0, 5, 10, 10, 0, 5, 10, 10, 0, 5, 9, 10, -1, 4.5, 4.75, 5, 4.875);

-- --------------------------------------------------------

--
-- Table structure for table `pm_kegiatan`
--

CREATE TABLE `pm_kegiatan` (
  `kdnilai3` int(2) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nilai_orgsos` int(3) NOT NULL,
  `target_orgsos` int(3) NOT NULL,
  `selisih_orgsos` float NOT NULL,
  `nilai_bobot_orgsos` float NOT NULL,
  `nilai_orgagama` int(3) NOT NULL,
  `target_orgagama` int(3) NOT NULL,
  `selisih_orgagama` float NOT NULL,
  `nilai_bobot_orgagama` float NOT NULL,
  `nilai_orgpmi` int(3) NOT NULL,
  `target_orgpmi` int(3) NOT NULL,
  `selisih_orgpmi` float NOT NULL,
  `nilai_bobot_orgpmi` float NOT NULL,
  `nilai_orgosisi` int(3) NOT NULL,
  `target_orgosisi` int(3) NOT NULL,
  `selisih_orgosisi` float NOT NULL,
  `nilai_bobot_orgosisi` float NOT NULL,
  `nilai_cf_A3` float NOT NULL,
  `nilai_sf_A3` float NOT NULL,
  `nilai_tot_A3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_kegiatan`
--

INSERT INTO `pm_kegiatan` (`kdnilai3`, `angkatan`, `id_user`, `nilai_orgsos`, `target_orgsos`, `selisih_orgsos`, `nilai_bobot_orgsos`, `nilai_orgagama`, `target_orgagama`, `selisih_orgagama`, `nilai_bobot_orgagama`, `nilai_orgpmi`, `target_orgpmi`, `selisih_orgpmi`, `nilai_bobot_orgpmi`, `nilai_orgosisi`, `target_orgosisi`, `selisih_orgosisi`, `nilai_bobot_orgosisi`, `nilai_cf_A3`, `nilai_sf_A3`, `nilai_tot_A3`) VALUES
(1, '2021', '79', 9, 10, -1, 4.5, 10, 10, 0, 5, 9, 10, -1, 4.5, 9, 10, -1, 4.5, 4.75, 4.5, 4.625);

-- --------------------------------------------------------

--
-- Table structure for table `pm_kemampuan`
--

CREATE TABLE `pm_kemampuan` (
  `kdnilai2` int(2) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nilai_tg` int(3) NOT NULL,
  `target_tg` int(3) NOT NULL,
  `selisih_tg` float NOT NULL,
  `nilai_bobot_tg` float NOT NULL,
  `nilai_st` int(3) NOT NULL,
  `target_st` int(3) NOT NULL,
  `selisih_st` float NOT NULL,
  `nilai_bobot_st` float NOT NULL,
  `nilai_phs` int(3) NOT NULL,
  `target_phs` int(3) NOT NULL,
  `selisih_phs` float NOT NULL,
  `nilai_bobot_phs` float NOT NULL,
  `nilai_cf_A2` float NOT NULL,
  `nilai_sf_A2` float NOT NULL,
  `nilai_tot_A2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_kemampuan`
--

INSERT INTO `pm_kemampuan` (`kdnilai2`, `angkatan`, `id_user`, `nilai_tg`, `target_tg`, `selisih_tg`, `nilai_bobot_tg`, `nilai_st`, `target_st`, `selisih_st`, `nilai_bobot_st`, `nilai_phs`, `target_phs`, `selisih_phs`, `nilai_bobot_phs`, `nilai_cf_A2`, `nilai_sf_A2`, `nilai_tot_A2`) VALUES
(19, '2021', '79', 2, 3, -1, 4, 2, 2, 0, 5, 2, 3, -1, 4, 4.5, 4, 4.35),
(20, '2021', '129', 2, 3, -1, 4, 2, 2, 0, 5, 2, 3, -1, 4, 4.5, 4, 4.35),
(21, '2021', '130', 3, 3, 0, 5, 2, 2, 0, 5, 3, 3, 0, 5, 5, 5, 5),
(22, '2021', '131', 3, 3, 0, 5, 2, 2, 0, 5, 2, 3, -1, 4, 4.5, 5, 4.65),
(23, '2021', '132', 2, 3, -1, 4, 2, 2, 0, 5, 1, 3, -2, 3, 4, 4, 4),
(24, '2021', '133', 3, 3, 0, 5, 1, 2, -1, 4, 2, 3, -1, 4, 4, 5, 4.3),
(25, '2021', '134', 1, 3, -2, 3, 2, 2, 0, 5, 3, 3, 0, 5, 5, 3, 4.4),
(26, '2021', '138', 2, 3, -1, 4, 2, 2, 0, 5, 1, 3, -2, 3, 4, 4, 4),
(27, '2021', '135', 2, 3, -1, 4, 2, 2, 0, 5, 3, 3, 0, 5, 5, 4, 4.7);

-- --------------------------------------------------------

--
-- Table structure for table `pm_kriteria`
--

CREATE TABLE `pm_kriteria` (
  `kdkriteria` varchar(4) NOT NULL,
  `id_aspek` varchar(6) DEFAULT NULL,
  `nmkriteria` varchar(50) NOT NULL,
  `jenis` set('Core','Secondary') DEFAULT NULL,
  `target` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_kriteria`
--

INSERT INTO `pm_kriteria` (`kdkriteria`, `id_aspek`, `nmkriteria`, `jenis`, `target`) VALUES
('IPS', 'A001', 'Ilmu Pengetahuan Sosial', 'Secondary', 10),
('IPA', 'A001', 'Ilmu Pengetahuan Alam', 'Secondary', 10),
('PKN', 'A001', 'Pendidikan Kewarganegaraan', 'Secondary', 10),
('BIND', 'A001', 'Bahasa Indonesia', 'Core', 10),
('MTK', 'A001', 'Matematika', 'Core', 10),
('FTS', 'A004', 'futsal', 'Secondary', 2),
('pram', 'A004', 'PRM', 'Core', 2),
('OSIS', 'A003', 'osis', 'Core', 2),
('ORGP', 'A003', 'organisasi pmi', 'Core', 2),
('ORGK', 'A003', 'organisasi keagamaan', 'Secondary', 2),
('BING', 'A001', 'Bahasa Inggris', 'Core', 10),
('RRT', 'A001', 'Pend Agama Islam', 'Secondary', 10),
('TG', 'A002', 'Tanggungan Orang Tua', 'Secondary', 3),
('ST', 'A002', 'Status (Apakah Ikut Bantuan Spt: KJP, KIP,Lainnya)', 'Core', 2),
('PHS', 'A002', 'Penghasilan Orang Tua', 'Core', 3),
('ORGS', 'A003', 'Organisasi Sosial', 'Secondary', 2),
('BKT', 'A004', 'basket', 'Secondary', 2),
('PASK', 'A004', 'paskibra', 'Core', 2),
('KD', 'A005', 'kedisiplinan', 'Secondary', 3),
('PRL', 'A005', 'perilaku ', 'Secondary', 3),
('KRJ', 'A005', 'kerajinan', 'Core', 3),
('AKDM', 'A006', 'akademik', 'Core', 4),
('NAKD', 'A006', 'non akademik', 'Secondary', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pm_penilaian`
--

CREATE TABLE `pm_penilaian` (
  `kdnilai1` int(2) NOT NULL,
  `angkatan` varchar(50) DEFAULT NULL,
  `id_user` varchar(10) NOT NULL,
  `nilai_ips` int(3) NOT NULL,
  `target_ips` int(3) NOT NULL,
  `selisih_ips` float NOT NULL,
  `nilai_bobot_ips` float NOT NULL,
  `nilai_ipa` int(3) NOT NULL,
  `target_ipa` int(3) NOT NULL,
  `selisih_ipa` float NOT NULL,
  `nilai_bobot_ipa` float NOT NULL,
  `nilai_pkn` int(3) NOT NULL,
  `target_pkn` int(3) NOT NULL,
  `selisih_pkn` float NOT NULL,
  `nilai_bobot_pkn` float NOT NULL,
  `nilai_bind` int(3) NOT NULL,
  `target_bind` int(3) NOT NULL,
  `selisih_bind` float NOT NULL,
  `nilai_bobot_bind` float NOT NULL,
  `nilai_mtk` int(3) NOT NULL,
  `target_mtk` int(3) NOT NULL,
  `selisih_mtk` float NOT NULL,
  `nilai_bobot_mtk` float NOT NULL,
  `nilai_bing` int(3) NOT NULL,
  `target_bing` int(3) NOT NULL,
  `selisih_bing` float NOT NULL,
  `nilai_bobot_bing` float NOT NULL,
  `nilai_rrt` int(3) NOT NULL,
  `target_rrt` int(3) NOT NULL,
  `selisih_rrt` float NOT NULL,
  `nilai_bobot_rrt` float NOT NULL,
  `nilai_cf_A1` float DEFAULT NULL,
  `nilai_sf_A1` float DEFAULT NULL,
  `nilai_tot_A1` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_penilaian`
--

INSERT INTO `pm_penilaian` (`kdnilai1`, `angkatan`, `id_user`, `nilai_ips`, `target_ips`, `selisih_ips`, `nilai_bobot_ips`, `nilai_ipa`, `target_ipa`, `selisih_ipa`, `nilai_bobot_ipa`, `nilai_pkn`, `target_pkn`, `selisih_pkn`, `nilai_bobot_pkn`, `nilai_bind`, `target_bind`, `selisih_bind`, `nilai_bobot_bind`, `nilai_mtk`, `target_mtk`, `selisih_mtk`, `nilai_bobot_mtk`, `nilai_bing`, `target_bing`, `selisih_bing`, `nilai_bobot_bing`, `nilai_rrt`, `target_rrt`, `selisih_rrt`, `nilai_bobot_rrt`, `nilai_cf_A1`, `nilai_sf_A1`, `nilai_tot_A1`) VALUES
(49, '2021', '79', 7, 10, -3, 3.5, 7, 10, -3, 3.5, 9, 10, -1, 4.5, 8, 10, -2, 4, 7, 10, -3, 3.5, 8, 10, -2, 4, 8, 10, -2, 4, 3.83333, 3.875, 3.85);

-- --------------------------------------------------------

--
-- Table structure for table `pm_prestasi`
--

CREATE TABLE `pm_prestasi` (
  `kdnilai6` int(25) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nilai_akademik` int(3) NOT NULL,
  `target_akademik` int(3) NOT NULL,
  `selisih_akademik` float NOT NULL,
  `nilai_bobot_akademik` float NOT NULL,
  `nilai_nonakademik` int(3) NOT NULL,
  `target_nonakademik` int(3) NOT NULL,
  `selisih_nonakademik` float NOT NULL,
  `nilai_bobot_nonakademik` float NOT NULL,
  `nilai_cf_A6` float NOT NULL,
  `nilai_sf_A6` float NOT NULL,
  `nilai_tot_A6` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_prestasi`
--

INSERT INTO `pm_prestasi` (`kdnilai6`, `angkatan`, `id_user`, `nilai_akademik`, `target_akademik`, `selisih_akademik`, `nilai_bobot_akademik`, `nilai_nonakademik`, `target_nonakademik`, `selisih_nonakademik`, `nilai_bobot_nonakademik`, `nilai_cf_A6`, `nilai_sf_A6`, `nilai_tot_A6`) VALUES
(1, '2020', '79', 10, 10, 0, 5, 9, 10, -1, 4.5, 1.66667, 1.125, 1.39583),
(2, '2020', '79', 10, 10, 0, 5, 9, 10, -1, 4.5, 1.66667, 1.125, 1.39583);

-- --------------------------------------------------------

--
-- Table structure for table `pm_sikap`
--

CREATE TABLE `pm_sikap` (
  `kdnilai5` int(25) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nilai_disiplin` int(3) NOT NULL,
  `target_disiplin` int(3) NOT NULL,
  `selisih_disiplin` float NOT NULL,
  `nilai_bobot_disiplin` float NOT NULL,
  `nilai_prilaku` int(3) NOT NULL,
  `target_prilaku` int(3) NOT NULL,
  `selisih_prilaku` float NOT NULL,
  `nilai_bobot_prilaku` float NOT NULL,
  `nilai_kerajinan` int(3) NOT NULL,
  `target_kerajinan` int(3) NOT NULL,
  `selisih_kerajinan` float NOT NULL,
  `nilai_bobot_kerajinan` float NOT NULL,
  `nilai_cf_A5` float NOT NULL,
  `nilai_sf_A5` float NOT NULL,
  `nilai_tot_A5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pm_sikap`
--

INSERT INTO `pm_sikap` (`kdnilai5`, `angkatan`, `id_user`, `nilai_disiplin`, `target_disiplin`, `selisih_disiplin`, `nilai_bobot_disiplin`, `nilai_prilaku`, `target_prilaku`, `selisih_prilaku`, `nilai_bobot_prilaku`, `nilai_kerajinan`, `target_kerajinan`, `selisih_kerajinan`, `nilai_bobot_kerajinan`, `nilai_cf_A5`, `nilai_sf_A5`, `nilai_tot_A5`) VALUES
(1, '2020', '79', 10, 10, -1, 4.5, 10, 10, 0, 5, 10, 10, 0, 5, 4.75, 5, 4.95),
(2, '2020', '79', 10, 10, -1, 4.5, 10, 10, 0, 5, 10, 10, 0, 5, 4.75, 5, 4.95);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lowongan`
--

CREATE TABLE `tbl_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama_lowongan` varchar(50) NOT NULL,
  `alamat_lowongan` text NOT NULL,
  `email_lowongan` varchar(50) NOT NULL,
  `no_lowongan` varchar(50) NOT NULL,
  `ket_lowongan` text NOT NULL,
  `tanggal_buat` date NOT NULL,
  `expired` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`id_lowongan`, `id_user`, `nama_lowongan`, `alamat_lowongan`, `email_lowongan`, `no_lowongan`, `ket_lowongan`, `tanggal_buat`, `expired`) VALUES
(24, 112, 'Telemarketing', 'Graha Harmony, Jl. Keadilan Raya No.13B, Bakti Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16417', 'info.harmony@gmail.com', '0217712838', ' Making calls and telephone sales and introducing products and services, Collect Information From consumers and Making Appoitment for supporting sales activity', '2021-06-27', '2021-09-27'),
(25, 112, 'Administrasi', 'Graha Harmony, Jl. Keadilan Raya No.13B, Bakti Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16417', 'info.harmony@gmail.com', '0217712838', 'Mengoreksi kegiatan canvassing team eksternal, Melaporkan hasil canvasing,', '2021-06-27', '2021-09-30'),
(26, 112, 'Accounting', 'Graha Harmony, Jl. Keadilan Raya No.13B, Bakti Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16417', 'info.harmony@gmail.com', '0217712838', ' This is a great opportunity to work for a small but rapidly expanding business in Canggu Bali, This position will work closely with our other administrative staff and operations personnel and handle the day-to-day bookkeeping.', '2021-06-27', '2021-09-30'),
(27, 113, 'Administrasi', 'Cikunir Raya Jl, Gg. H. Napiah No.6, RT.003/RW.003, Jaka Mulya, Bekasi Selatan, Bekasi City, West Java 17146', 'info@truelogs.co.id', '02182438539', ' Melakukan input data nasabah, Melakukan filing dokumen dan scan data , Mengolah database ', '2021-06-28', '2021-09-30'),
(28, 113, 'Telemarketing', 'Cikunir Raya Jl, Gg. H. Napiah No.6, RT.003/RW.003, Jaka Mulya, Bekasi Selatan, Bekasi City, West Java 17146', 'info@truelogs.co.id', '02182438539', ' Contacting leads and converting leads to becoming customers, Maintain customers and increase customer retentions., Making Appoitment for supporting sales activity ', '2021-06-28', '2021-09-30'),
(29, 113, 'Advertising', 'Cikunir Raya Jl, Gg. H. Napiah No.6, RT.003/RW.003, Jaka Mulya, Bekasi Selatan, Bekasi City, West Java 17146', 'info@truelogs.co.id', '02182438539', ' Develop & execute a marketing strategy for the company, Planning & execute effective marketing programs, advertising & sales promotion campaign, Estimate budget of program expenses for promotion', '2021-06-28', '2021-09-30'),
(30, 114, 'Advertising', 'Rukan Grand Galaxy , Rose Garden RRG 3 Nomor 27 Taman Galaxy – Kota Bekasi 17147', 'heka.properti@gmail.com', '02182739887', ' Planning, developing, budgeting, and implementing promotional programs, Work closely with graphic designer, operational, and merchandising team to ensure Instore promotion and implementation program, Planning a whole year communication plan', '2021-06-28', '2021-09-05'),
(31, 120, 'Operator Produksi', 'Kawasan Industri Pulogadung, Jl. Pulobuaran Raya No.1, RW.9, Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13930', 'support@ymmi.com', '0214613234', ' Bekerja sesuai Rule / SOP Pabrik, Mencapai target produksi sesuai target PT, Bertanggung jawab terhadap hasil produksi / barang produksi', '2021-06-28', '2021-09-19'),
(32, 120, 'Teknisi Mesin Industri', 'Kawasan Industri Pulogadung, Jl. Pulobuaran Raya No.1, RW.9, Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13930', 'support@ymmi.com', '0214613234', ' Melakukan setting, cleaning dan sanitasi mesin dan ruangan untuk kegiatan produksi / pengemasan sesuai dengan ketentuan yang berlaku., ', '2021-06-28', '2021-09-05'),
(33, 123, 'Drafter Assistant', 'Jl. Pegangsaan Dua KM 2 No. 64 RT.005/RW.002 Kelapa Gading, Jakarta Utara 14250', 'info@adyawinsa.com', '0214603353', 'Melakukan aktivitas perencanaan proyek yang siap tepat waktu, valid dengan tenornya gambar dan perhitungan, serta konsisten dalam eksekusi perencanaan dan berinovasi untuk improvement.', '2021-06-28', '2021-09-30'),
(34, 124, 'IT Support / IT Helper', 'MidPlaza 2, 8th Floor Jl Jenderal Sudirman 10-11 Jakarta 10220 - Indonesia', 'hrd@biznetnetworks.com', '1500988', ' Bertanggung jawab atas instalasi, monitoring, migrasi, troubleshooting terkait hardware, software dan jaringan., Melakukan maintenance dan service jaringan internet (LAN), Bertanggung jawab untuk menjaga dan memastikan konektivitas jaringan', '2021-06-28', '2021-09-30'),
(35, 124, 'Editor Foto / Editor Video', 'MidPlaza 2, 8th Floor Jl Jenderal Sudirman 10-11 Jakarta 10220 - Indonesia', 'hrd@biznetnetworks.com', '1500988', ' Must demonstrate and possess an understanding of storytelling, design, and video editorial processes, as well as the ability to integrate them all with high production value, Deep passion for video editing and willingness to learn new video editing technology, Proficient with Adobe Creative Suite Design (Illustrator, Photoshop, InDesign, etc.)', '2021-06-28', '2021-09-19'),
(36, 120, 'Quality Control', 'Kawasan Industri Pulogadung, Jl. Pulobuaran Raya No.1, RW.9, Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13930', 'support@ymmi.com', '0214613234', ' Control dan periksa bahan baku untuk memastikan konsistensi dan integritas, Mencoba memperbaiki produk yang rusak atau rusak untuk menentukan cara terbaik untuk menskalakan perbaikan tersebut, Uji persentase tertentu dari semua produk berdasarkan standar industri ', '2021-06-28', '2021-09-12'),
(37, 120, 'Operator Produksi', 'Kawasan Industri Pulogadung, Jl. Pulobuaran Raya No.1, RW.9, Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13930', 'support@ymmi.com', '0214613234', ' Menjalankan proses produksi sesuai dengan SOP', '2021-08-05', '2021-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_atribut`
--

CREATE TABLE `tb_atribut` (
  `id_atribut` varchar(16) NOT NULL,
  `nama_atribut` varchar(255) DEFAULT NULL,
  `status_atribut` varchar(255) DEFAULT NULL,
  `nilai` tinyint(1) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `min` varchar(1) DEFAULT '1',
  `max` varchar(100) DEFAULT '100'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_atribut`
--

INSERT INTO `tb_atribut` (`id_atribut`, `nama_atribut`, `status_atribut`, `nilai`, `keterangan`, `min`, `max`) VALUES
('A07', 'Memahami Mesin Industri', NULL, NULL, '0-100', '1', '100'),
('A06', 'Dapat Bekerja Sama Dengan Team', NULL, NULL, '1 = Tidak, 2 = Cukup Baik, 3 = Sangat Baik', '1', '3'),
('A02', 'Familiar Dengan Sosial Media', NULL, NULL, '1 = Tidak, 2 = Cukup Baik, 3 = Sangat Baik', '1', '3'),
('A01', 'Berkomunikasi Dengan Baik', NULL, NULL, '1 = Tidak, 2 = Cukup Baik, 3 = Sangat Baik', '1', '3'),
('A03', 'Mampu Bekerja Dengan Target', NULL, NULL, '1 = Tidak, 2 = Iya', '1', '2'),
('A04', 'Mampu Berkerja Shift', NULL, NULL, '1 = Tidak, 2 = Iya', '1', '2'),
('A05', 'Mampu Mengoperasikan Komputer', NULL, NULL, '1 = Tidak, 2 = Cukup Baik, 3 = Sangat Baik', '1', '3'),
('A08', 'Teratur, Teliti, & Terorganisi', NULL, NULL, '1 = Tidak, 2 = Cukup Baik, 3 = Sangat Baik	', '1', '3'),
('A09', 'Menguasai Tools Editing : Photoshop, Corel, Autocad, Blender', NULL, NULL, '0-100', '1', '100'),
('A10', 'Memahami Jaringan, CCTV, & Sejenisnya', NULL, NULL, '0-100', '1', '100'),
('A11', 'Gaji Yang Diinginkan', NULL, NULL, '', '1', '10000000'),
('A12', 'Hasil', NULL, NULL, '', '1', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataset`
--

CREATE TABLE `tb_dataset` (
  `id_dataset` int(11) NOT NULL,
  `nomor` int(11) DEFAULT NULL,
  `id_atribut` varchar(16) DEFAULT NULL,
  `id_nilai` int(11) DEFAULT NULL,
  `ket_dataset` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dataset`
--

INSERT INTO `tb_dataset` (`id_dataset`, `nomor`, `id_atribut`, `id_nilai`, `ket_dataset`) VALUES
(1, 1, 'A01', 2, 'Data 1'),
(2, 1, 'A02', 2, 'Data 1'),
(3, 1, 'A03', 1, 'Data 1'),
(4, 1, 'A04', 2, 'Data 1'),
(5, 1, 'A05', 3, 'Data 1'),
(6, 1, 'A06', 3, 'Data 1'),
(7, 1, 'A07', 20, 'Data 1'),
(8, 1, 'A08', 3, 'Data 1'),
(9, 1, 'A09', 70, 'Data 1'),
(10, 1, 'A10', 70, 'Data 1'),
(11, 1, 'A11', 4100000, 'Data 1'),
(12, 1, 'A12', 105, 'Data 1'),
(13, 2, 'A01', 3, 'Data 2'),
(14, 2, 'A02', 3, 'Data 2'),
(15, 2, 'A03', 2, 'Data 2'),
(16, 2, 'A04', 1, 'Data 2'),
(17, 2, 'A05', 3, 'Data 2'),
(18, 2, 'A06', 2, 'Data 2'),
(19, 2, 'A07', 60, 'Data 2'),
(20, 2, 'A08', 3, 'Data 2'),
(21, 2, 'A09', 70, 'Data 2'),
(22, 2, 'A10', 70, 'Data 2'),
(23, 2, 'A11', 4200000, 'Data 2'),
(24, 2, 'A12', 105, 'Data 2'),
(25, 3, 'A01', 2, 'Data 3'),
(26, 3, 'A02', 3, 'Data 3'),
(27, 3, 'A03', 2, 'Data 3'),
(28, 3, 'A04', 2, 'Data 3'),
(29, 3, 'A05', 3, 'Data 3'),
(30, 3, 'A06', 2, 'Data 3'),
(31, 3, 'A07', 20, 'Data 3'),
(32, 3, 'A08', 3, 'Data 3'),
(33, 3, 'A09', 70, 'Data 3'),
(34, 3, 'A10', 80, 'Data 3'),
(35, 3, 'A11', 4300000, 'Data 3'),
(36, 3, 'A12', 105, 'Data 3'),
(37, 4, 'A01', 3, 'Data 4'),
(38, 4, 'A02', 3, 'Data 4'),
(39, 4, 'A03', 2, 'Data 4'),
(40, 4, 'A04', 2, 'Data 4'),
(41, 4, 'A05', 3, 'Data 4'),
(42, 4, 'A06', 3, 'Data 4'),
(43, 4, 'A07', 30, 'Data 4'),
(44, 4, 'A08', 2, 'Data 4'),
(45, 4, 'A09', 60, 'Data 4'),
(46, 4, 'A10', 60, 'Data 4'),
(47, 4, 'A11', 4100000, 'Data 4'),
(48, 4, 'A12', 106, 'Data 4'),
(49, 5, 'A01', 3, 'Data 5'),
(50, 5, 'A02', 3, 'Data 5'),
(51, 5, 'A03', 2, 'Data 5'),
(52, 5, 'A04', 2, 'Data 5'),
(53, 5, 'A05', 3, 'Data 5'),
(54, 5, 'A06', 2, 'Data 5'),
(55, 5, 'A07', 10, 'Data 5'),
(56, 5, 'A08', 2, 'Data 5'),
(57, 5, 'A09', 40, 'Data 5'),
(58, 5, 'A10', 40, 'Data 5'),
(59, 5, 'A11', 4200000, 'Data 5'),
(60, 5, 'A12', 106, 'Data 5'),
(61, 6, 'A01', 3, 'Data 6'),
(62, 6, 'A02', 3, 'Data 6'),
(63, 6, 'A03', 2, 'Data 6'),
(64, 6, 'A04', 1, 'Data 6'),
(65, 6, 'A05', 3, 'Data 6'),
(66, 6, 'A06', 2, 'Data 6'),
(67, 6, 'A07', 10, 'Data 6'),
(68, 6, 'A08', 3, 'Data 6'),
(69, 6, 'A09', 10, 'Data 6'),
(70, 6, 'A10', 10, 'Data 6'),
(71, 6, 'A11', 4300000, 'Data 6'),
(72, 6, 'A12', 106, 'Data 6'),
(73, 7, 'A01', 1, 'Data 7'),
(74, 7, 'A02', 2, 'Data 7'),
(75, 7, 'A03', 2, 'Data 7'),
(76, 7, 'A04', 1, 'Data 7'),
(77, 7, 'A05', 3, 'Data 7'),
(78, 7, 'A06', 3, 'Data 7'),
(79, 7, 'A07', 10, 'Data 7'),
(80, 7, 'A08', 3, 'Data 7'),
(81, 7, 'A09', 10, 'Data 7'),
(82, 7, 'A10', 10, 'Data 7'),
(83, 7, 'A11', 4100000, 'Data 7'),
(84, 7, 'A12', 107, 'Data 7'),
(85, 8, 'A01', 1, 'Data 8'),
(86, 8, 'A02', 2, 'Data 8'),
(87, 8, 'A03', 1, 'Data 8'),
(88, 8, 'A04', 1, 'Data 8'),
(89, 8, 'A05', 3, 'Data 8'),
(90, 8, 'A06', 2, 'Data 8'),
(91, 8, 'A07', 20, 'Data 8'),
(92, 8, 'A08', 3, 'Data 8'),
(93, 8, 'A09', 20, 'Data 8'),
(94, 8, 'A10', 20, 'Data 8'),
(95, 8, 'A11', 4200000, 'Data 8'),
(96, 8, 'A12', 107, 'Data 8'),
(97, 9, 'A01', 1, 'Data 9'),
(98, 9, 'A02', 2, 'Data 9'),
(99, 9, 'A03', 2, 'Data 9'),
(100, 9, 'A04', 1, 'Data 9'),
(101, 9, 'A05', 3, 'Data 9'),
(102, 9, 'A06', 3, 'Data 9'),
(103, 9, 'A07', 40, 'Data 9'),
(104, 9, 'A08', 3, 'Data 9'),
(105, 9, 'A09', 40, 'Data 9'),
(106, 9, 'A10', 40, 'Data 9'),
(107, 9, 'A11', 4300000, 'Data 9'),
(108, 9, 'A12', 107, 'Data 9'),
(109, 10, 'A01', 2, 'Data 10'),
(110, 10, 'A02', 2, 'Data 10'),
(111, 10, 'A03', 2, 'Data 10'),
(112, 10, 'A04', 2, 'Data 10'),
(113, 10, 'A05', 2, 'Data 10'),
(114, 10, 'A06', 2, 'Data 10'),
(115, 10, 'A07', 80, 'Data 10'),
(116, 10, 'A08', 2, 'Data 10'),
(117, 10, 'A09', 20, 'Data 10'),
(118, 10, 'A10', 20, 'Data 10'),
(119, 10, 'A11', 4100000, 'Data 10'),
(120, 10, 'A12', 108, 'Data 10'),
(121, 11, 'A01', 2, 'Data 11'),
(122, 11, 'A02', 2, 'Data 11'),
(123, 11, 'A03', 2, 'Data 11'),
(124, 11, 'A04', 2, 'Data 11'),
(125, 11, 'A05', 1, 'Data 11'),
(126, 11, 'A06', 2, 'Data 11'),
(127, 11, 'A07', 90, 'Data 11'),
(128, 11, 'A08', 3, 'Data 11'),
(129, 11, 'A09', 30, 'Data 11'),
(130, 11, 'A10', 40, 'Data 11'),
(131, 11, 'A11', 4200000, 'Data 11'),
(132, 11, 'A12', 108, 'Data 11'),
(133, 12, 'A01', 2, 'Data 12'),
(134, 12, 'A02', 1, 'Data 12'),
(135, 12, 'A03', 2, 'Data 12'),
(136, 12, 'A04', 2, 'Data 12'),
(137, 12, 'A05', 2, 'Data 12'),
(138, 12, 'A06', 3, 'Data 12'),
(139, 12, 'A07', 80, 'Data 12'),
(140, 12, 'A08', 2, 'Data 12'),
(141, 12, 'A09', 45, 'Data 12'),
(142, 12, 'A10', 50, 'Data 12'),
(143, 12, 'A11', 4300000, 'Data 12'),
(144, 12, 'A12', 108, 'Data 12'),
(145, 13, 'A01', 3, 'Data 13'),
(146, 13, 'A02', 2, 'Data 13'),
(147, 13, 'A03', 2, 'Data 13'),
(148, 13, 'A04', 2, 'Data 13'),
(149, 13, 'A05', 1, 'Data 13'),
(150, 13, 'A06', 3, 'Data 13'),
(151, 13, 'A07', 80, 'Data 13'),
(152, 13, 'A08', 3, 'Data 13'),
(153, 13, 'A09', 40, 'Data 13'),
(154, 13, 'A10', 40, 'Data 13'),
(155, 13, 'A11', 4400000, 'Data 13'),
(156, 13, 'A12', 108, 'Data 13'),
(157, 14, 'A01', 2, 'Data 14'),
(158, 14, 'A02', 2, 'Data 14'),
(159, 14, 'A03', 2, 'Data 14'),
(160, 14, 'A04', 2, 'Data 14'),
(161, 14, 'A05', 1, 'Data 14'),
(162, 14, 'A06', 3, 'Data 14'),
(163, 14, 'A07', 80, 'Data 14'),
(164, 14, 'A08', 2, 'Data 14'),
(165, 14, 'A09', 60, 'Data 14'),
(166, 14, 'A10', 60, 'Data 14'),
(167, 14, 'A11', 4500000, 'Data 14'),
(168, 14, 'A12', 108, 'Data 14'),
(169, 15, 'A01', 3, 'Data 15'),
(170, 15, 'A02', 2, 'Data 15'),
(171, 15, 'A03', 2, 'Data 15'),
(172, 15, 'A04', 1, 'Data 15'),
(173, 15, 'A05', 3, 'Data 15'),
(174, 15, 'A06', 2, 'Data 15'),
(175, 15, 'A07', 40, 'Data 15'),
(176, 15, 'A08', 3, 'Data 15'),
(177, 15, 'A09', 40, 'Data 15'),
(178, 15, 'A10', 55, 'Data 15'),
(179, 15, 'A11', 4400000, 'Data 15'),
(180, 15, 'A12', 107, 'Data 15'),
(181, 16, 'A01', 2, 'Data 16'),
(182, 16, 'A02', 2, 'Data 16'),
(183, 16, 'A03', 1, 'Data 16'),
(184, 16, 'A04', 1, 'Data 16'),
(185, 16, 'A05', 3, 'Data 16'),
(186, 16, 'A06', 2, 'Data 16'),
(187, 16, 'A07', 50, 'Data 16'),
(188, 16, 'A08', 2, 'Data 16'),
(189, 16, 'A09', 45, 'Data 16'),
(190, 16, 'A10', 60, 'Data 16'),
(191, 16, 'A11', 4500000, 'Data 16'),
(192, 16, 'A12', 107, 'Data 16'),
(193, 17, 'A01', 3, 'Data 17'),
(194, 17, 'A02', 1, 'Data 17'),
(195, 17, 'A03', 2, 'Data 17'),
(196, 17, 'A04', 1, 'Data 17'),
(197, 17, 'A05', 3, 'Data 17'),
(198, 17, 'A06', 3, 'Data 17'),
(199, 17, 'A07', 50, 'Data 17'),
(200, 17, 'A08', 3, 'Data 17'),
(201, 17, 'A09', 55, 'Data 17'),
(202, 17, 'A10', 35, 'Data 17'),
(203, 17, 'A11', 4600000, 'Data 17'),
(204, 17, 'A12', 107, 'Data 17'),
(205, 18, 'A01', 2, 'Data 18'),
(206, 18, 'A02', 1, 'Data 18'),
(207, 18, 'A03', 2, 'Data 18'),
(208, 18, 'A04', 1, 'Data 18'),
(209, 18, 'A05', 3, 'Data 18'),
(210, 18, 'A06', 2, 'Data 18'),
(211, 18, 'A07', 20, 'Data 18'),
(212, 18, 'A08', 3, 'Data 18'),
(213, 18, 'A09', 40, 'Data 18'),
(214, 18, 'A10', 40, 'Data 18'),
(215, 18, 'A11', 4700000, 'Data 18'),
(216, 18, 'A12', 107, 'Data 18'),
(217, 19, 'A01', 3, 'Data 19'),
(218, 19, 'A02', 2, 'Data 19'),
(219, 19, 'A03', 2, 'Data 19'),
(220, 19, 'A04', 1, 'Data 19'),
(221, 19, 'A05', 3, 'Data 19'),
(222, 19, 'A06', 2, 'Data 19'),
(223, 19, 'A07', 20, 'Data 19'),
(224, 19, 'A08', 3, 'Data 19'),
(225, 19, 'A09', 40, 'Data 19'),
(226, 19, 'A10', 55, 'Data 19'),
(227, 19, 'A11', 4800000, 'Data 19'),
(228, 19, 'A12', 107, 'Data 19'),
(229, 20, 'A01', 3, 'Data 20'),
(230, 20, 'A02', 3, 'Data 20'),
(231, 20, 'A03', 1, 'Data 20'),
(232, 20, 'A04', 1, 'Data 20'),
(233, 20, 'A05', 3, 'Data 20'),
(234, 20, 'A06', 2, 'Data 20'),
(235, 20, 'A07', 30, 'Data 20'),
(236, 20, 'A08', 3, 'Data 20'),
(237, 20, 'A09', 60, 'Data 20'),
(238, 20, 'A10', 55, 'Data 20'),
(239, 20, 'A11', 4900000, 'Data 20'),
(240, 20, 'A12', 107, 'Data 20'),
(241, 21, 'A01', 3, 'Data 21'),
(242, 21, 'A02', 3, 'Data 21'),
(243, 21, 'A03', 1, 'Data 21'),
(244, 21, 'A04', 1, 'Data 21'),
(245, 21, 'A05', 3, 'Data 21'),
(246, 21, 'A06', 3, 'Data 21'),
(247, 21, 'A07', 30, 'Data 21'),
(248, 21, 'A08', 3, 'Data 21'),
(249, 21, 'A09', 55, 'Data 21'),
(250, 21, 'A10', 35, 'Data 21'),
(251, 21, 'A11', 5000000, 'Data 21'),
(252, 21, 'A12', 107, 'Data 21'),
(253, 22, 'A01', 2, 'Data 22'),
(254, 22, 'A02', 2, 'Data 22'),
(255, 22, 'A03', 1, 'Data 22'),
(256, 22, 'A04', 2, 'Data 22'),
(257, 22, 'A05', 3, 'Data 22'),
(258, 22, 'A06', 1, 'Data 22'),
(259, 22, 'A07', 60, 'Data 22'),
(260, 22, 'A08', 3, 'Data 22'),
(261, 22, 'A09', 30, 'Data 22'),
(262, 22, 'A10', 30, 'Data 22'),
(263, 22, 'A11', 4400000, 'Data 22'),
(264, 22, 'A12', 105, 'Data 22'),
(265, 23, 'A01', 2, 'Data 23'),
(266, 23, 'A02', 2, 'Data 23'),
(267, 23, 'A03', 2, 'Data 23'),
(268, 23, 'A04', 1, 'Data 23'),
(269, 23, 'A05', 3, 'Data 23'),
(270, 23, 'A06', 2, 'Data 23'),
(271, 23, 'A07', 60, 'Data 23'),
(272, 23, 'A08', 3, 'Data 23'),
(273, 23, 'A09', 40, 'Data 23'),
(274, 23, 'A10', 35, 'Data 23'),
(275, 23, 'A11', 4500000, 'Data 23'),
(276, 23, 'A12', 105, 'Data 23'),
(277, 24, 'A01', 2, 'Data 24'),
(278, 24, 'A02', 2, 'Data 24'),
(279, 24, 'A03', 2, 'Data 24'),
(280, 24, 'A04', 2, 'Data 24'),
(281, 24, 'A05', 3, 'Data 24'),
(282, 24, 'A06', 2, 'Data 24'),
(283, 24, 'A07', 40, 'Data 24'),
(284, 24, 'A08', 3, 'Data 24'),
(285, 24, 'A09', 50, 'Data 24'),
(286, 24, 'A10', 30, 'Data 24'),
(287, 24, 'A11', 4600000, 'Data 24'),
(288, 24, 'A12', 105, 'Data 24'),
(289, 25, 'A01', 2, 'Data 25'),
(290, 25, 'A02', 2, 'Data 25'),
(291, 25, 'A03', 1, 'Data 25'),
(292, 25, 'A04', 2, 'Data 25'),
(293, 25, 'A05', 3, 'Data 25'),
(294, 25, 'A06', 1, 'Data 25'),
(295, 25, 'A07', 45, 'Data 25'),
(296, 25, 'A08', 3, 'Data 25'),
(297, 25, 'A09', 40, 'Data 25'),
(298, 25, 'A10', 50, 'Data 25'),
(299, 25, 'A11', 4700000, 'Data 25'),
(300, 25, 'A12', 105, 'Data 25'),
(301, 26, 'A01', 3, 'Data 26'),
(302, 26, 'A02', 2, 'Data 26'),
(303, 26, 'A03', 2, 'Data 26'),
(304, 26, 'A04', 2, 'Data 26'),
(305, 26, 'A05', 3, 'Data 26'),
(306, 26, 'A06', 2, 'Data 26'),
(307, 26, 'A07', 65, 'Data 26'),
(308, 26, 'A08', 3, 'Data 26'),
(309, 26, 'A09', 30, 'Data 26'),
(310, 26, 'A10', 70, 'Data 26'),
(311, 26, 'A11', 4800000, 'Data 26'),
(312, 26, 'A12', 105, 'Data 26'),
(313, 27, 'A01', 3, 'Data 27'),
(314, 27, 'A02', 3, 'Data 27'),
(315, 27, 'A03', 1, 'Data 27'),
(316, 27, 'A04', 2, 'Data 27'),
(317, 27, 'A05', 3, 'Data 27'),
(318, 27, 'A06', 2, 'Data 27'),
(319, 27, 'A07', 75, 'Data 27'),
(320, 27, 'A08', 3, 'Data 27'),
(321, 27, 'A09', 55, 'Data 27'),
(322, 27, 'A10', 20, 'Data 27'),
(323, 27, 'A11', 4900000, 'Data 27'),
(324, 27, 'A12', 105, 'Data 27'),
(325, 28, 'A01', 3, 'Data 28'),
(326, 28, 'A02', 2, 'Data 28'),
(327, 28, 'A03', 1, 'Data 28'),
(328, 28, 'A04', 1, 'Data 28'),
(329, 28, 'A05', 3, 'Data 28'),
(330, 28, 'A06', 2, 'Data 28'),
(331, 28, 'A07', 55, 'Data 28'),
(332, 28, 'A08', 3, 'Data 28'),
(333, 28, 'A09', 50, 'Data 28'),
(334, 28, 'A10', 50, 'Data 28'),
(335, 28, 'A11', 5000000, 'Data 28'),
(336, 28, 'A12', 105, 'Data 28'),
(337, 29, 'A01', 3, 'Data 29'),
(338, 29, 'A02', 2, 'Data 29'),
(339, 29, 'A03', 2, 'Data 29'),
(340, 29, 'A04', 1, 'Data 29'),
(341, 29, 'A05', 3, 'Data 29'),
(342, 29, 'A06', 3, 'Data 29'),
(343, 29, 'A07', 50, 'Data 29'),
(344, 29, 'A08', 2, 'Data 29'),
(345, 29, 'A09', 50, 'Data 29'),
(346, 29, 'A10', 10, 'Data 29'),
(347, 29, 'A11', 4400000, 'Data 29'),
(348, 29, 'A12', 106, 'Data 29'),
(349, 30, 'A01', 3, 'Data 30'),
(350, 30, 'A02', 2, 'Data 30'),
(351, 30, 'A03', 2, 'Data 30'),
(352, 30, 'A04', 1, 'Data 30'),
(353, 30, 'A05', 2, 'Data 30'),
(354, 30, 'A06', 3, 'Data 30'),
(355, 30, 'A07', 60, 'Data 30'),
(356, 30, 'A08', 3, 'Data 30'),
(357, 30, 'A09', 60, 'Data 30'),
(358, 30, 'A10', 20, 'Data 30'),
(359, 30, 'A11', 4500000, 'Data 30'),
(360, 30, 'A12', 106, 'Data 30'),
(361, 31, 'A01', 3, 'Data 31'),
(362, 31, 'A02', 3, 'Data 31'),
(363, 31, 'A03', 2, 'Data 31'),
(364, 31, 'A04', 1, 'Data 31'),
(365, 31, 'A05', 3, 'Data 31'),
(366, 31, 'A06', 3, 'Data 31'),
(367, 31, 'A07', 50, 'Data 31'),
(368, 31, 'A08', 2, 'Data 31'),
(369, 31, 'A09', 50, 'Data 31'),
(370, 31, 'A10', 10, 'Data 31'),
(371, 31, 'A11', 4600000, 'Data 31'),
(372, 31, 'A12', 106, 'Data 31'),
(373, 32, 'A01', 3, 'Data 32'),
(374, 32, 'A02', 2, 'Data 32'),
(375, 32, 'A03', 2, 'Data 32'),
(376, 32, 'A04', 2, 'Data 32'),
(377, 32, 'A05', 3, 'Data 32'),
(378, 32, 'A06', 2, 'Data 32'),
(379, 32, 'A07', 55, 'Data 32'),
(380, 32, 'A08', 2, 'Data 32'),
(381, 32, 'A09', 40, 'Data 32'),
(382, 32, 'A10', 20, 'Data 32'),
(383, 32, 'A11', 4700000, 'Data 32'),
(384, 32, 'A12', 106, 'Data 32'),
(385, 33, 'A01', 3, 'Data 33'),
(386, 33, 'A02', 3, 'Data 33'),
(387, 33, 'A03', 2, 'Data 33'),
(388, 33, 'A04', 2, 'Data 33'),
(389, 33, 'A05', 2, 'Data 33'),
(390, 33, 'A06', 3, 'Data 33'),
(391, 33, 'A07', 60, 'Data 33'),
(392, 33, 'A08', 3, 'Data 33'),
(393, 33, 'A09', 50, 'Data 33'),
(394, 33, 'A10', 30, 'Data 33'),
(395, 33, 'A11', 4800000, 'Data 33'),
(396, 33, 'A12', 106, 'Data 33'),
(397, 34, 'A01', 3, 'Data 34'),
(398, 34, 'A02', 2, 'Data 34'),
(399, 34, 'A03', 2, 'Data 34'),
(400, 34, 'A04', 2, 'Data 34'),
(401, 34, 'A05', 3, 'Data 34'),
(402, 34, 'A06', 2, 'Data 34'),
(403, 34, 'A07', 40, 'Data 34'),
(404, 34, 'A08', 3, 'Data 34'),
(405, 34, 'A09', 40, 'Data 34'),
(406, 34, 'A10', 30, 'Data 34'),
(407, 34, 'A11', 4900000, 'Data 34'),
(408, 34, 'A12', 106, 'Data 34'),
(409, 35, 'A01', 3, 'Data 35'),
(410, 35, 'A02', 3, 'Data 35'),
(411, 35, 'A03', 2, 'Data 35'),
(412, 35, 'A04', 2, 'Data 35'),
(413, 35, 'A05', 3, 'Data 35'),
(414, 35, 'A06', 3, 'Data 35'),
(415, 35, 'A07', 50, 'Data 35'),
(416, 35, 'A08', 2, 'Data 35'),
(417, 35, 'A09', 40, 'Data 35'),
(418, 35, 'A10', 40, 'Data 35'),
(419, 35, 'A11', 5000000, 'Data 35'),
(420, 35, 'A12', 106, 'Data 35'),
(421, 36, 'A01', 2, 'Data 36'),
(422, 36, 'A02', 1, 'Data 36'),
(423, 36, 'A03', 2, 'Data 36'),
(424, 36, 'A04', 2, 'Data 36'),
(425, 36, 'A05', 1, 'Data 36'),
(426, 36, 'A06', 3, 'Data 36'),
(427, 36, 'A07', 80, 'Data 36'),
(428, 36, 'A08', 2, 'Data 36'),
(429, 36, 'A09', 40, 'Data 36'),
(430, 36, 'A10', 40, 'Data 36'),
(431, 36, 'A11', 4600000, 'Data 36'),
(432, 36, 'A12', 108, 'Data 36'),
(433, 37, 'A01', 3, 'Data 37'),
(434, 37, 'A02', 2, 'Data 37'),
(435, 37, 'A03', 1, 'Data 37'),
(436, 37, 'A04', 2, 'Data 37'),
(437, 37, 'A05', 2, 'Data 37'),
(438, 37, 'A06', 2, 'Data 37'),
(439, 37, 'A07', 80, 'Data 37'),
(440, 37, 'A08', 2, 'Data 37'),
(441, 37, 'A09', 40, 'Data 37'),
(442, 37, 'A10', 40, 'Data 37'),
(443, 37, 'A11', 4700000, 'Data 37'),
(444, 37, 'A12', 108, 'Data 37'),
(445, 38, 'A01', 2, 'Data 38'),
(446, 38, 'A02', 1, 'Data 38'),
(447, 38, 'A03', 2, 'Data 38'),
(448, 38, 'A04', 2, 'Data 38'),
(449, 38, 'A05', 2, 'Data 38'),
(450, 38, 'A06', 2, 'Data 38'),
(451, 38, 'A07', 90, 'Data 38'),
(452, 38, 'A08', 2, 'Data 38'),
(453, 38, 'A09', 50, 'Data 38'),
(454, 38, 'A10', 50, 'Data 38'),
(455, 38, 'A11', 4800000, 'Data 38'),
(456, 38, 'A12', 108, 'Data 38'),
(457, 39, 'A01', 2, 'Data 39'),
(458, 39, 'A02', 1, 'Data 39'),
(459, 39, 'A03', 2, 'Data 39'),
(460, 39, 'A04', 2, 'Data 39'),
(461, 39, 'A05', 2, 'Data 39'),
(462, 39, 'A06', 2, 'Data 39'),
(463, 39, 'A07', 75, 'Data 39'),
(464, 39, 'A08', 3, 'Data 39'),
(465, 39, 'A09', 50, 'Data 39'),
(466, 39, 'A10', 40, 'Data 39'),
(467, 39, 'A11', 4900000, 'Data 39'),
(468, 39, 'A12', 108, 'Data 39'),
(469, 40, 'A01', 2, 'Data 40'),
(470, 40, 'A02', 2, 'Data 40'),
(471, 40, 'A03', 2, 'Data 40'),
(472, 40, 'A04', 2, 'Data 40'),
(473, 40, 'A05', 1, 'Data 40'),
(474, 40, 'A06', 3, 'Data 40'),
(475, 40, 'A07', 85, 'Data 40'),
(476, 40, 'A08', 2, 'Data 40'),
(477, 40, 'A09', 60, 'Data 40'),
(478, 40, 'A10', 45, 'Data 40'),
(479, 40, 'A11', 5000000, 'Data 40'),
(480, 40, 'A12', 108, 'Data 40'),
(481, 41, 'A01', 3, 'Data 41'),
(482, 41, 'A02', 3, 'Data 41'),
(483, 41, 'A03', 2, 'Data 41'),
(484, 41, 'A04', 1, 'Data 41'),
(485, 41, 'A05', 3, 'Data 41'),
(486, 41, 'A06', 3, 'Data 41'),
(487, 41, 'A07', 50, 'Data 41'),
(488, 41, 'A08', 2, 'Data 41'),
(489, 41, 'A09', 80, 'Data 41'),
(490, 41, 'A10', 60, 'Data 41'),
(491, 41, 'A11', 4100000, 'Data 41'),
(492, 41, 'A12', 112, 'Data 41'),
(493, 42, 'A01', 2, 'Data 42'),
(494, 42, 'A02', 3, 'Data 42'),
(495, 42, 'A03', 2, 'Data 42'),
(496, 42, 'A04', 1, 'Data 42'),
(497, 42, 'A05', 3, 'Data 42'),
(498, 42, 'A06', 2, 'Data 42'),
(499, 42, 'A07', 50, 'Data 42'),
(500, 42, 'A08', 2, 'Data 42'),
(501, 42, 'A09', 80, 'Data 42'),
(502, 42, 'A10', 65, 'Data 42'),
(503, 42, 'A11', 4200000, 'Data 42'),
(504, 42, 'A12', 112, 'Data 42'),
(505, 43, 'A01', 2, 'Data 43'),
(506, 43, 'A02', 3, 'Data 43'),
(507, 43, 'A03', 2, 'Data 43'),
(508, 43, 'A04', 1, 'Data 43'),
(509, 43, 'A05', 2, 'Data 43'),
(510, 43, 'A06', 3, 'Data 43'),
(511, 43, 'A07', 60, 'Data 43'),
(512, 43, 'A08', 3, 'Data 43'),
(513, 43, 'A09', 80, 'Data 43'),
(514, 43, 'A10', 65, 'Data 43'),
(515, 43, 'A11', 4300000, 'Data 43'),
(516, 43, 'A12', 112, 'Data 43'),
(517, 44, 'A01', 3, 'Data 44'),
(518, 44, 'A02', 3, 'Data 44'),
(519, 44, 'A03', 2, 'Data 44'),
(520, 44, 'A04', 2, 'Data 44'),
(521, 44, 'A05', 2, 'Data 44'),
(522, 44, 'A06', 2, 'Data 44'),
(523, 44, 'A07', 60, 'Data 44'),
(524, 44, 'A08', 2, 'Data 44'),
(525, 44, 'A09', 85, 'Data 44'),
(526, 44, 'A10', 55, 'Data 44'),
(527, 44, 'A11', 4400000, 'Data 44'),
(528, 44, 'A12', 112, 'Data 44'),
(529, 45, 'A01', 2, 'Data 45'),
(530, 45, 'A02', 3, 'Data 45'),
(531, 45, 'A03', 1, 'Data 45'),
(532, 45, 'A04', 1, 'Data 45'),
(533, 45, 'A05', 3, 'Data 45'),
(534, 45, 'A06', 3, 'Data 45'),
(535, 45, 'A07', 50, 'Data 45'),
(536, 45, 'A08', 2, 'Data 45'),
(537, 45, 'A09', 90, 'Data 45'),
(538, 45, 'A10', 50, 'Data 45'),
(539, 45, 'A11', 5000000, 'Data 45'),
(540, 45, 'A12', 112, 'Data 45'),
(541, 46, 'A01', 3, 'Data 46'),
(542, 46, 'A02', 3, 'Data 46'),
(543, 46, 'A03', 2, 'Data 46'),
(544, 46, 'A04', 2, 'Data 46'),
(545, 46, 'A05', 3, 'Data 46'),
(546, 46, 'A06', 3, 'Data 46'),
(547, 46, 'A07', 50, 'Data 46'),
(548, 46, 'A08', 2, 'Data 46'),
(549, 46, 'A09', 90, 'Data 46'),
(550, 46, 'A10', 40, 'Data 46'),
(551, 46, 'A11', 4500000, 'Data 46'),
(552, 46, 'A12', 112, 'Data 46'),
(553, 47, 'A01', 3, 'Data 47'),
(554, 47, 'A02', 3, 'Data 47'),
(555, 47, 'A03', 1, 'Data 47'),
(556, 47, 'A04', 2, 'Data 47'),
(557, 47, 'A05', 3, 'Data 47'),
(558, 47, 'A06', 2, 'Data 47'),
(559, 47, 'A07', 20, 'Data 47'),
(560, 47, 'A08', 3, 'Data 47'),
(561, 47, 'A09', 85, 'Data 47'),
(562, 47, 'A10', 20, 'Data 47'),
(563, 47, 'A11', 4600000, 'Data 47'),
(564, 47, 'A12', 112, 'Data 47'),
(565, 48, 'A01', 3, 'Data 48'),
(566, 48, 'A02', 3, 'Data 48'),
(567, 48, 'A03', 2, 'Data 48'),
(568, 48, 'A04', 1, 'Data 48'),
(569, 48, 'A05', 3, 'Data 48'),
(570, 48, 'A06', 3, 'Data 48'),
(571, 48, 'A07', 25, 'Data 48'),
(572, 48, 'A08', 2, 'Data 48'),
(573, 48, 'A09', 90, 'Data 48'),
(574, 48, 'A10', 30, 'Data 48'),
(575, 48, 'A11', 4700000, 'Data 48'),
(576, 48, 'A12', 112, 'Data 48'),
(577, 49, 'A01', 2, 'Data 49'),
(578, 49, 'A02', 3, 'Data 49'),
(579, 49, 'A03', 2, 'Data 49'),
(580, 49, 'A04', 1, 'Data 49'),
(581, 49, 'A05', 3, 'Data 49'),
(582, 49, 'A06', 3, 'Data 49'),
(583, 49, 'A07', 65, 'Data 49'),
(584, 49, 'A08', 3, 'Data 49'),
(585, 49, 'A09', 95, 'Data 49'),
(586, 49, 'A10', 60, 'Data 49'),
(587, 49, 'A11', 4800000, 'Data 49'),
(588, 49, 'A12', 112, 'Data 49'),
(589, 50, 'A01', 2, 'Data 50'),
(590, 50, 'A02', 3, 'Data 50'),
(591, 50, 'A03', 1, 'Data 50'),
(592, 50, 'A04', 1, 'Data 50'),
(593, 50, 'A05', 3, 'Data 50'),
(594, 50, 'A06', 2, 'Data 50'),
(595, 50, 'A07', 40, 'Data 50'),
(596, 50, 'A08', 2, 'Data 50'),
(597, 50, 'A09', 90, 'Data 50'),
(598, 50, 'A10', 50, 'Data 50'),
(599, 50, 'A11', 4900000, 'Data 50'),
(600, 50, 'A12', 112, 'Data 50'),
(601, 51, 'A01', 3, 'Data 51'),
(602, 51, 'A02', 2, 'Data 51'),
(603, 51, 'A03', 1, 'Data 51'),
(604, 51, 'A04', 1, 'Data 51'),
(605, 51, 'A05', 3, 'Data 51'),
(606, 51, 'A06', 3, 'Data 51'),
(607, 51, 'A07', 50, 'Data 51'),
(608, 51, 'A08', 3, 'Data 51'),
(609, 51, 'A09', 90, 'Data 51'),
(610, 51, 'A10', 40, 'Data 51'),
(611, 51, 'A11', 4100000, 'Data 51'),
(612, 51, 'A12', 114, 'Data 51'),
(613, 52, 'A01', 3, 'Data 52'),
(614, 52, 'A02', 2, 'Data 52'),
(615, 52, 'A03', 1, 'Data 52'),
(616, 52, 'A04', 1, 'Data 52'),
(617, 52, 'A05', 3, 'Data 52'),
(618, 52, 'A06', 3, 'Data 52'),
(619, 52, 'A07', 50, 'Data 52'),
(620, 52, 'A08', 3, 'Data 52'),
(621, 52, 'A09', 90, 'Data 52'),
(622, 52, 'A10', 40, 'Data 52'),
(623, 52, 'A11', 4200000, 'Data 52'),
(624, 52, 'A12', 114, 'Data 52'),
(625, 53, 'A01', 3, 'Data 53'),
(626, 53, 'A02', 2, 'Data 53'),
(627, 53, 'A03', 1, 'Data 53'),
(628, 53, 'A04', 1, 'Data 53'),
(629, 53, 'A05', 3, 'Data 53'),
(630, 53, 'A06', 3, 'Data 53'),
(631, 53, 'A07', 60, 'Data 53'),
(632, 53, 'A08', 3, 'Data 53'),
(633, 53, 'A09', 90, 'Data 53'),
(634, 53, 'A10', 40, 'Data 53'),
(635, 53, 'A11', 4300000, 'Data 53'),
(636, 53, 'A12', 114, 'Data 53'),
(637, 54, 'A01', 2, 'Data 54'),
(638, 54, 'A02', 3, 'Data 54'),
(639, 54, 'A03', 2, 'Data 54'),
(640, 54, 'A04', 1, 'Data 54'),
(641, 54, 'A05', 3, 'Data 54'),
(642, 54, 'A06', 3, 'Data 54'),
(643, 54, 'A07', 60, 'Data 54'),
(644, 54, 'A08', 3, 'Data 54'),
(645, 54, 'A09', 90, 'Data 54'),
(646, 54, 'A10', 50, 'Data 54'),
(647, 54, 'A11', 4400000, 'Data 54'),
(648, 54, 'A12', 114, 'Data 54'),
(649, 55, 'A01', 3, 'Data 55'),
(650, 55, 'A02', 2, 'Data 55'),
(651, 55, 'A03', 1, 'Data 55'),
(652, 55, 'A04', 2, 'Data 55'),
(653, 55, 'A05', 3, 'Data 55'),
(654, 55, 'A06', 3, 'Data 55'),
(655, 55, 'A07', 30, 'Data 55'),
(656, 55, 'A08', 3, 'Data 55'),
(657, 55, 'A09', 90, 'Data 55'),
(658, 55, 'A10', 60, 'Data 55'),
(659, 55, 'A11', 4500000, 'Data 55'),
(660, 55, 'A12', 114, 'Data 55'),
(661, 56, 'A01', 3, 'Data 56'),
(662, 56, 'A02', 3, 'Data 56'),
(663, 56, 'A03', 2, 'Data 56'),
(664, 56, 'A04', 1, 'Data 56'),
(665, 56, 'A05', 3, 'Data 56'),
(666, 56, 'A06', 3, 'Data 56'),
(667, 56, 'A07', 50, 'Data 56'),
(668, 56, 'A08', 3, 'Data 56'),
(669, 56, 'A09', 90, 'Data 56'),
(670, 56, 'A10', 10, 'Data 56'),
(671, 56, 'A11', 4600000, 'Data 56'),
(672, 56, 'A12', 114, 'Data 56'),
(673, 57, 'A01', 2, 'Data 57'),
(674, 57, 'A02', 3, 'Data 57'),
(675, 57, 'A03', 1, 'Data 57'),
(676, 57, 'A04', 2, 'Data 57'),
(677, 57, 'A05', 3, 'Data 57'),
(678, 57, 'A06', 3, 'Data 57'),
(679, 57, 'A07', 40, 'Data 57'),
(680, 57, 'A08', 2, 'Data 57'),
(681, 57, 'A09', 95, 'Data 57'),
(682, 57, 'A10', 20, 'Data 57'),
(683, 57, 'A11', 4700000, 'Data 57'),
(684, 57, 'A12', 114, 'Data 57'),
(685, 58, 'A01', 3, 'Data 58'),
(686, 58, 'A02', 3, 'Data 58'),
(687, 58, 'A03', 2, 'Data 58'),
(688, 58, 'A04', 1, 'Data 58'),
(689, 58, 'A05', 3, 'Data 58'),
(690, 58, 'A06', 3, 'Data 58'),
(691, 58, 'A07', 60, 'Data 58'),
(692, 58, 'A08', 3, 'Data 58'),
(693, 58, 'A09', 90, 'Data 58'),
(694, 58, 'A10', 30, 'Data 58'),
(695, 58, 'A11', 4800000, 'Data 58'),
(696, 58, 'A12', 114, 'Data 58'),
(697, 59, 'A01', 2, 'Data 59'),
(698, 59, 'A02', 3, 'Data 59'),
(699, 59, 'A03', 1, 'Data 59'),
(700, 59, 'A04', 2, 'Data 59'),
(701, 59, 'A05', 3, 'Data 59'),
(702, 59, 'A06', 2, 'Data 59'),
(703, 59, 'A07', 60, 'Data 59'),
(704, 59, 'A08', 3, 'Data 59'),
(705, 59, 'A09', 95, 'Data 59'),
(706, 59, 'A10', 30, 'Data 59'),
(707, 59, 'A11', 4900000, 'Data 59'),
(708, 59, 'A12', 114, 'Data 59'),
(709, 60, 'A01', 2, 'Data 60'),
(710, 60, 'A02', 2, 'Data 60'),
(711, 60, 'A03', 1, 'Data 60'),
(712, 60, 'A04', 2, 'Data 60'),
(713, 60, 'A05', 3, 'Data 60'),
(714, 60, 'A06', 3, 'Data 60'),
(715, 60, 'A07', 50, 'Data 60'),
(716, 60, 'A08', 3, 'Data 60'),
(717, 60, 'A09', 95, 'Data 60'),
(718, 60, 'A10', 30, 'Data 60'),
(719, 60, 'A11', 5000000, 'Data 60'),
(720, 60, 'A12', 114, 'Data 60'),
(721, 61, 'A01', 3, 'Data 61'),
(722, 61, 'A02', 2, 'Data 61'),
(723, 61, 'A03', 2, 'Data 61'),
(724, 61, 'A04', 2, 'Data 61'),
(725, 61, 'A05', 3, 'Data 61'),
(726, 61, 'A06', 3, 'Data 61'),
(727, 61, 'A07', 60, 'Data 61'),
(728, 61, 'A08', 3, 'Data 61'),
(729, 61, 'A09', 90, 'Data 61'),
(730, 61, 'A10', 30, 'Data 61'),
(731, 61, 'A11', 4100000, 'Data 61'),
(732, 61, 'A12', 113, 'Data 61'),
(733, 62, 'A01', 2, 'Data 62'),
(734, 62, 'A02', 3, 'Data 62'),
(735, 62, 'A03', 2, 'Data 62'),
(736, 62, 'A04', 2, 'Data 62'),
(737, 62, 'A05', 3, 'Data 62'),
(738, 62, 'A06', 2, 'Data 62'),
(739, 62, 'A07', 50, 'Data 62'),
(740, 62, 'A08', 2, 'Data 62'),
(741, 62, 'A09', 85, 'Data 62'),
(742, 62, 'A10', 50, 'Data 62'),
(743, 62, 'A11', 4200000, 'Data 62'),
(744, 62, 'A12', 113, 'Data 62'),
(745, 63, 'A01', 2, 'Data 63'),
(746, 63, 'A02', 3, 'Data 63'),
(747, 63, 'A03', 2, 'Data 63'),
(748, 63, 'A04', 1, 'Data 63'),
(749, 63, 'A05', 3, 'Data 63'),
(750, 63, 'A06', 2, 'Data 63'),
(751, 63, 'A07', 50, 'Data 63'),
(752, 63, 'A08', 2, 'Data 63'),
(753, 63, 'A09', 85, 'Data 63'),
(754, 63, 'A10', 50, 'Data 63'),
(755, 63, 'A11', 4300000, 'Data 63'),
(756, 63, 'A12', 113, 'Data 63'),
(757, 64, 'A01', 2, 'Data 64'),
(758, 64, 'A02', 3, 'Data 64'),
(759, 64, 'A03', 2, 'Data 64'),
(760, 64, 'A04', 2, 'Data 64'),
(761, 64, 'A05', 3, 'Data 64'),
(762, 64, 'A06', 2, 'Data 64'),
(763, 64, 'A07', 60, 'Data 64'),
(764, 64, 'A08', 2, 'Data 64'),
(765, 64, 'A09', 80, 'Data 64'),
(766, 64, 'A10', 30, 'Data 64'),
(767, 64, 'A11', 4400000, 'Data 64'),
(768, 64, 'A12', 113, 'Data 64'),
(769, 65, 'A01', 2, 'Data 65'),
(770, 65, 'A02', 3, 'Data 65'),
(771, 65, 'A03', 2, 'Data 65'),
(772, 65, 'A04', 1, 'Data 65'),
(773, 65, 'A05', 3, 'Data 65'),
(774, 65, 'A06', 2, 'Data 65'),
(775, 65, 'A07', 40, 'Data 65'),
(776, 65, 'A08', 2, 'Data 65'),
(777, 65, 'A09', 80, 'Data 65'),
(778, 65, 'A10', 10, 'Data 65'),
(779, 65, 'A11', 4500000, 'Data 65'),
(780, 65, 'A12', 113, 'Data 65'),
(781, 66, 'A01', 2, 'Data 66'),
(782, 66, 'A02', 3, 'Data 66'),
(783, 66, 'A03', 2, 'Data 66'),
(784, 66, 'A04', 2, 'Data 66'),
(785, 66, 'A05', 3, 'Data 66'),
(786, 66, 'A06', 3, 'Data 66'),
(787, 66, 'A07', 50, 'Data 66'),
(788, 66, 'A08', 2, 'Data 66'),
(789, 66, 'A09', 80, 'Data 66'),
(790, 66, 'A10', 20, 'Data 66'),
(791, 66, 'A11', 4600000, 'Data 66'),
(792, 66, 'A12', 113, 'Data 66'),
(793, 67, 'A01', 3, 'Data 67'),
(794, 67, 'A02', 3, 'Data 67'),
(795, 67, 'A03', 2, 'Data 67'),
(796, 67, 'A04', 1, 'Data 67'),
(797, 67, 'A05', 3, 'Data 67'),
(798, 67, 'A06', 2, 'Data 67'),
(799, 67, 'A07', 60, 'Data 67'),
(800, 67, 'A08', 3, 'Data 67'),
(801, 67, 'A09', 80, 'Data 67'),
(802, 67, 'A10', 30, 'Data 67'),
(803, 67, 'A11', 4700000, 'Data 67'),
(804, 67, 'A12', 113, 'Data 67'),
(805, 68, 'A01', 2, 'Data 68'),
(806, 68, 'A02', 2, 'Data 68'),
(807, 68, 'A03', 1, 'Data 68'),
(808, 68, 'A04', 2, 'Data 68'),
(809, 68, 'A05', 3, 'Data 68'),
(810, 68, 'A06', 2, 'Data 68'),
(811, 68, 'A07', 30, 'Data 68'),
(812, 68, 'A08', 2, 'Data 68'),
(813, 68, 'A09', 80, 'Data 68'),
(814, 68, 'A10', 50, 'Data 68'),
(815, 68, 'A11', 4800000, 'Data 68'),
(816, 68, 'A12', 113, 'Data 68'),
(817, 69, 'A01', 3, 'Data 69'),
(818, 69, 'A02', 3, 'Data 69'),
(819, 69, 'A03', 2, 'Data 69'),
(820, 69, 'A04', 1, 'Data 69'),
(821, 69, 'A05', 3, 'Data 69'),
(822, 69, 'A06', 2, 'Data 69'),
(823, 69, 'A07', 50, 'Data 69'),
(824, 69, 'A08', 2, 'Data 69'),
(825, 69, 'A09', 85, 'Data 69'),
(826, 69, 'A10', 60, 'Data 69'),
(827, 69, 'A11', 4900000, 'Data 69'),
(828, 69, 'A12', 113, 'Data 69'),
(829, 70, 'A01', 2, 'Data 70'),
(830, 70, 'A02', 3, 'Data 70'),
(831, 70, 'A03', 2, 'Data 70'),
(832, 70, 'A04', 1, 'Data 70'),
(833, 70, 'A05', 3, 'Data 70'),
(834, 70, 'A06', 2, 'Data 70'),
(835, 70, 'A07', 45, 'Data 70'),
(836, 70, 'A08', 3, 'Data 70'),
(837, 70, 'A09', 85, 'Data 70'),
(838, 70, 'A10', 65, 'Data 70'),
(839, 70, 'A11', 5000000, 'Data 70'),
(840, 70, 'A12', 113, 'Data 70'),
(841, 71, 'A01', 2, 'Data 71'),
(842, 71, 'A02', 3, 'Data 71'),
(843, 71, 'A03', 2, 'Data 71'),
(844, 71, 'A04', 2, 'Data 71'),
(845, 71, 'A05', 3, 'Data 71'),
(846, 71, 'A06', 3, 'Data 71'),
(847, 71, 'A07', 50, 'Data 71'),
(848, 71, 'A08', 2, 'Data 71'),
(849, 71, 'A09', 70, 'Data 71'),
(850, 71, 'A10', 85, 'Data 71'),
(851, 71, 'A11', 4100000, 'Data 71'),
(852, 71, 'A12', 111, 'Data 71'),
(853, 72, 'A01', 2, 'Data 72'),
(854, 72, 'A02', 2, 'Data 72'),
(855, 72, 'A03', 1, 'Data 72'),
(856, 72, 'A04', 2, 'Data 72'),
(857, 72, 'A05', 3, 'Data 72'),
(858, 72, 'A06', 3, 'Data 72'),
(859, 72, 'A07', 50, 'Data 72'),
(860, 72, 'A08', 3, 'Data 72'),
(861, 72, 'A09', 75, 'Data 72'),
(862, 72, 'A10', 80, 'Data 72'),
(863, 72, 'A11', 4200000, 'Data 72'),
(864, 72, 'A12', 111, 'Data 72'),
(865, 73, 'A01', 2, 'Data 73'),
(866, 73, 'A02', 3, 'Data 73'),
(867, 73, 'A03', 2, 'Data 73'),
(868, 73, 'A04', 2, 'Data 73'),
(869, 73, 'A05', 2, 'Data 73'),
(870, 73, 'A06', 3, 'Data 73'),
(871, 73, 'A07', 60, 'Data 73'),
(872, 73, 'A08', 3, 'Data 73'),
(873, 73, 'A09', 75, 'Data 73'),
(874, 73, 'A10', 85, 'Data 73'),
(875, 73, 'A11', 4300000, 'Data 73'),
(876, 73, 'A12', 111, 'Data 73'),
(877, 74, 'A01', 2, 'Data 74'),
(878, 74, 'A02', 2, 'Data 74'),
(879, 74, 'A03', 1, 'Data 74'),
(880, 74, 'A04', 2, 'Data 74'),
(881, 74, 'A05', 3, 'Data 74'),
(882, 74, 'A06', 3, 'Data 74'),
(883, 74, 'A07', 40, 'Data 74'),
(884, 74, 'A08', 3, 'Data 74'),
(885, 74, 'A09', 60, 'Data 74'),
(886, 74, 'A10', 80, 'Data 74'),
(887, 74, 'A11', 4400000, 'Data 74'),
(888, 74, 'A12', 111, 'Data 74'),
(889, 75, 'A01', 2, 'Data 75'),
(890, 75, 'A02', 3, 'Data 75'),
(891, 75, 'A03', 2, 'Data 75'),
(892, 75, 'A04', 2, 'Data 75'),
(893, 75, 'A05', 3, 'Data 75'),
(894, 75, 'A06', 3, 'Data 75'),
(895, 75, 'A07', 50, 'Data 75'),
(896, 75, 'A08', 2, 'Data 75'),
(897, 75, 'A09', 65, 'Data 75'),
(898, 75, 'A10', 90, 'Data 75'),
(899, 75, 'A11', 4500000, 'Data 75'),
(900, 75, 'A12', 111, 'Data 75'),
(901, 76, 'A01', 2, 'Data 76'),
(902, 76, 'A02', 3, 'Data 76'),
(903, 76, 'A03', 1, 'Data 76'),
(904, 76, 'A04', 2, 'Data 76'),
(905, 76, 'A05', 2, 'Data 76'),
(906, 76, 'A06', 3, 'Data 76'),
(907, 76, 'A07', 60, 'Data 76'),
(908, 76, 'A08', 3, 'Data 76'),
(909, 76, 'A09', 75, 'Data 76'),
(910, 76, 'A10', 90, 'Data 76'),
(911, 76, 'A11', 4600000, 'Data 76'),
(912, 76, 'A12', 111, 'Data 76'),
(913, 77, 'A01', 3, 'Data 77'),
(914, 77, 'A02', 3, 'Data 77'),
(915, 77, 'A03', 2, 'Data 77'),
(916, 77, 'A04', 2, 'Data 77'),
(917, 77, 'A05', 2, 'Data 77'),
(918, 77, 'A06', 3, 'Data 77'),
(919, 77, 'A07', 50, 'Data 77'),
(920, 77, 'A08', 2, 'Data 77'),
(921, 77, 'A09', 70, 'Data 77'),
(922, 77, 'A10', 95, 'Data 77'),
(923, 77, 'A11', 4700000, 'Data 77'),
(924, 77, 'A12', 111, 'Data 77'),
(925, 78, 'A01', 2, 'Data 78'),
(926, 78, 'A02', 2, 'Data 78'),
(927, 78, 'A03', 2, 'Data 78'),
(928, 78, 'A04', 2, 'Data 78'),
(929, 78, 'A05', 3, 'Data 78'),
(930, 78, 'A06', 2, 'Data 78'),
(931, 78, 'A07', 60, 'Data 78'),
(932, 78, 'A08', 2, 'Data 78'),
(933, 78, 'A09', 70, 'Data 78'),
(934, 78, 'A10', 90, 'Data 78'),
(935, 78, 'A11', 4800000, 'Data 78'),
(936, 78, 'A12', 111, 'Data 78'),
(937, 79, 'A01', 2, 'Data 79'),
(938, 79, 'A02', 3, 'Data 79'),
(939, 79, 'A03', 2, 'Data 79'),
(940, 79, 'A04', 2, 'Data 79'),
(941, 79, 'A05', 3, 'Data 79'),
(942, 79, 'A06', 2, 'Data 79'),
(943, 79, 'A07', 50, 'Data 79'),
(944, 79, 'A08', 3, 'Data 79'),
(945, 79, 'A09', 60, 'Data 79'),
(946, 79, 'A10', 95, 'Data 79'),
(947, 79, 'A11', 4900000, 'Data 79'),
(948, 79, 'A12', 111, 'Data 79'),
(949, 80, 'A01', 3, 'Data 80'),
(950, 80, 'A02', 2, 'Data 80'),
(951, 80, 'A03', 2, 'Data 80'),
(952, 80, 'A04', 2, 'Data 80'),
(953, 80, 'A05', 3, 'Data 80'),
(954, 80, 'A06', 2, 'Data 80'),
(955, 80, 'A07', 60, 'Data 80'),
(956, 80, 'A08', 3, 'Data 80'),
(957, 80, 'A09', 65, 'Data 80'),
(958, 80, 'A10', 90, 'Data 80'),
(959, 80, 'A11', 5000000, 'Data 80'),
(960, 80, 'A12', 111, 'Data 80'),
(961, 81, 'A01', 2, 'Data 81'),
(962, 81, 'A02', 2, 'Data 81'),
(963, 81, 'A03', 2, 'Data 81'),
(964, 81, 'A04', 2, 'Data 81'),
(965, 81, 'A05', 2, 'Data 81'),
(966, 81, 'A06', 3, 'Data 81'),
(967, 81, 'A07', 65, 'Data 81'),
(968, 81, 'A08', 3, 'Data 81'),
(969, 81, 'A09', 60, 'Data 81'),
(970, 81, 'A10', 60, 'Data 81'),
(971, 81, 'A11', 4100000, 'Data 81'),
(972, 81, 'A12', 110, 'Data 81'),
(973, 82, 'A01', 3, 'Data 82'),
(974, 82, 'A02', 2, 'Data 82'),
(975, 82, 'A03', 1, 'Data 82'),
(976, 82, 'A04', 2, 'Data 82'),
(977, 82, 'A05', 2, 'Data 82'),
(978, 82, 'A06', 3, 'Data 82'),
(979, 82, 'A07', 65, 'Data 82'),
(980, 82, 'A08', 3, 'Data 82'),
(981, 82, 'A09', 60, 'Data 82'),
(982, 82, 'A10', 60, 'Data 82'),
(983, 82, 'A11', 4200000, 'Data 82'),
(984, 82, 'A12', 110, 'Data 82'),
(985, 83, 'A01', 2, 'Data 83'),
(986, 83, 'A02', 2, 'Data 83'),
(987, 83, 'A03', 2, 'Data 83'),
(988, 83, 'A04', 2, 'Data 83'),
(989, 83, 'A05', 2, 'Data 83'),
(990, 83, 'A06', 2, 'Data 83'),
(991, 83, 'A07', 65, 'Data 83'),
(992, 83, 'A08', 3, 'Data 83'),
(993, 83, 'A09', 60, 'Data 83'),
(994, 83, 'A10', 60, 'Data 83'),
(995, 83, 'A11', 4300000, 'Data 83'),
(996, 83, 'A12', 110, 'Data 83'),
(997, 84, 'A01', 2, 'Data 84'),
(998, 84, 'A02', 3, 'Data 84'),
(999, 84, 'A03', 2, 'Data 84'),
(1000, 84, 'A04', 2, 'Data 84'),
(1001, 84, 'A05', 2, 'Data 84'),
(1002, 84, 'A06', 2, 'Data 84'),
(1003, 84, 'A07', 60, 'Data 84'),
(1004, 84, 'A08', 3, 'Data 84'),
(1005, 84, 'A09', 60, 'Data 84'),
(1006, 84, 'A10', 50, 'Data 84'),
(1007, 84, 'A11', 4400000, 'Data 84'),
(1008, 84, 'A12', 110, 'Data 84'),
(1009, 85, 'A01', 3, 'Data 85'),
(1010, 85, 'A02', 3, 'Data 85'),
(1011, 85, 'A03', 1, 'Data 85'),
(1012, 85, 'A04', 2, 'Data 85'),
(1013, 85, 'A05', 2, 'Data 85'),
(1014, 85, 'A06', 2, 'Data 85'),
(1015, 85, 'A07', 60, 'Data 85'),
(1016, 85, 'A08', 3, 'Data 85'),
(1017, 85, 'A09', 60, 'Data 85'),
(1018, 85, 'A10', 60, 'Data 85'),
(1019, 85, 'A11', 4500000, 'Data 85'),
(1020, 85, 'A12', 110, 'Data 85'),
(1021, 86, 'A01', 2, 'Data 86'),
(1022, 86, 'A02', 2, 'Data 86'),
(1023, 86, 'A03', 1, 'Data 86'),
(1024, 86, 'A04', 2, 'Data 86'),
(1025, 86, 'A05', 2, 'Data 86'),
(1026, 86, 'A06', 3, 'Data 86'),
(1027, 86, 'A07', 60, 'Data 86'),
(1028, 86, 'A08', 3, 'Data 86'),
(1029, 86, 'A09', 60, 'Data 86'),
(1030, 86, 'A10', 60, 'Data 86'),
(1031, 86, 'A11', 4600000, 'Data 86'),
(1032, 86, 'A12', 110, 'Data 86'),
(1033, 87, 'A01', 3, 'Data 87'),
(1034, 87, 'A02', 3, 'Data 87'),
(1035, 87, 'A03', 2, 'Data 87'),
(1036, 87, 'A04', 2, 'Data 87'),
(1037, 87, 'A05', 2, 'Data 87'),
(1038, 87, 'A06', 2, 'Data 87'),
(1039, 87, 'A07', 65, 'Data 87'),
(1040, 87, 'A08', 3, 'Data 87'),
(1041, 87, 'A09', 55, 'Data 87'),
(1042, 87, 'A10', 40, 'Data 87'),
(1043, 87, 'A11', 4700000, 'Data 87'),
(1044, 87, 'A12', 110, 'Data 87'),
(1045, 88, 'A01', 3, 'Data 88'),
(1046, 88, 'A02', 2, 'Data 88'),
(1047, 88, 'A03', 2, 'Data 88'),
(1048, 88, 'A04', 2, 'Data 88'),
(1049, 88, 'A05', 2, 'Data 88'),
(1050, 88, 'A06', 3, 'Data 88'),
(1051, 88, 'A07', 65, 'Data 88'),
(1052, 88, 'A08', 3, 'Data 88'),
(1053, 88, 'A09', 55, 'Data 88'),
(1054, 88, 'A10', 30, 'Data 88'),
(1055, 88, 'A11', 4800000, 'Data 88'),
(1056, 88, 'A12', 110, 'Data 88'),
(1057, 89, 'A01', 3, 'Data 89'),
(1058, 89, 'A02', 3, 'Data 89'),
(1059, 89, 'A03', 2, 'Data 89'),
(1060, 89, 'A04', 2, 'Data 89'),
(1061, 89, 'A05', 2, 'Data 89'),
(1062, 89, 'A06', 2, 'Data 89'),
(1063, 89, 'A07', 65, 'Data 89'),
(1064, 89, 'A08', 3, 'Data 89'),
(1065, 89, 'A09', 55, 'Data 89'),
(1066, 89, 'A10', 40, 'Data 89'),
(1067, 89, 'A11', 4900000, 'Data 89'),
(1068, 89, 'A12', 110, 'Data 89'),
(1069, 90, 'A01', 3, 'Data 90'),
(1070, 90, 'A02', 2, 'Data 90'),
(1071, 90, 'A03', 2, 'Data 90'),
(1072, 90, 'A04', 2, 'Data 90'),
(1073, 90, 'A05', 2, 'Data 90'),
(1074, 90, 'A06', 2, 'Data 90'),
(1075, 90, 'A07', 70, 'Data 90'),
(1076, 90, 'A08', 3, 'Data 90'),
(1077, 90, 'A09', 50, 'Data 90'),
(1078, 90, 'A10', 40, 'Data 90'),
(1079, 90, 'A11', 5000000, 'Data 90'),
(1080, 90, 'A12', 110, 'Data 90'),
(1081, 91, 'A01', 3, 'Data 91'),
(1082, 91, 'A02', 1, 'Data 91'),
(1083, 91, 'A03', 1, 'Data 91'),
(1084, 91, 'A04', 2, 'Data 91'),
(1085, 91, 'A05', 2, 'Data 91'),
(1086, 91, 'A06', 3, 'Data 91'),
(1087, 91, 'A07', 95, 'Data 91'),
(1088, 91, 'A08', 2, 'Data 91'),
(1089, 91, 'A09', 40, 'Data 91'),
(1090, 91, 'A10', 40, 'Data 91'),
(1091, 91, 'A11', 4100000, 'Data 91'),
(1092, 91, 'A12', 109, 'Data 91'),
(1093, 92, 'A01', 3, 'Data 92'),
(1094, 92, 'A02', 2, 'Data 92'),
(1095, 92, 'A03', 2, 'Data 92'),
(1096, 92, 'A04', 1, 'Data 92'),
(1097, 92, 'A05', 1, 'Data 92'),
(1098, 92, 'A06', 3, 'Data 92'),
(1099, 92, 'A07', 95, 'Data 92'),
(1100, 92, 'A08', 3, 'Data 92'),
(1101, 92, 'A09', 10, 'Data 92'),
(1102, 92, 'A10', 50, 'Data 92'),
(1103, 92, 'A11', 4200000, 'Data 92'),
(1104, 92, 'A12', 109, 'Data 92'),
(1105, 93, 'A01', 3, 'Data 93'),
(1106, 93, 'A02', 3, 'Data 93'),
(1107, 93, 'A03', 2, 'Data 93'),
(1108, 93, 'A04', 2, 'Data 93'),
(1109, 93, 'A05', 1, 'Data 93'),
(1110, 93, 'A06', 3, 'Data 93'),
(1111, 93, 'A07', 90, 'Data 93'),
(1112, 93, 'A08', 2, 'Data 93'),
(1113, 93, 'A09', 20, 'Data 93'),
(1114, 93, 'A10', 60, 'Data 93'),
(1115, 93, 'A11', 4300000, 'Data 93'),
(1116, 93, 'A12', 109, 'Data 93'),
(1117, 94, 'A01', 3, 'Data 94'),
(1118, 94, 'A02', 1, 'Data 94'),
(1119, 94, 'A03', 2, 'Data 94'),
(1120, 94, 'A04', 2, 'Data 94'),
(1121, 94, 'A05', 2, 'Data 94'),
(1122, 94, 'A06', 3, 'Data 94'),
(1123, 94, 'A07', 90, 'Data 94'),
(1124, 94, 'A08', 2, 'Data 94'),
(1125, 94, 'A09', 30, 'Data 94'),
(1126, 94, 'A10', 45, 'Data 94'),
(1127, 94, 'A11', 4400000, 'Data 94'),
(1128, 94, 'A12', 109, 'Data 94'),
(1129, 95, 'A01', 2, 'Data 95'),
(1130, 95, 'A02', 2, 'Data 95'),
(1131, 95, 'A03', 2, 'Data 95'),
(1132, 95, 'A04', 2, 'Data 95'),
(1133, 95, 'A05', 1, 'Data 95'),
(1134, 95, 'A06', 3, 'Data 95'),
(1135, 95, 'A07', 90, 'Data 95'),
(1136, 95, 'A08', 2, 'Data 95'),
(1137, 95, 'A09', 20, 'Data 95'),
(1138, 95, 'A10', 50, 'Data 95'),
(1139, 95, 'A11', 4500000, 'Data 95'),
(1140, 95, 'A12', 109, 'Data 95'),
(1141, 96, 'A01', 3, 'Data 96'),
(1142, 96, 'A02', 3, 'Data 96'),
(1143, 96, 'A03', 1, 'Data 96'),
(1144, 96, 'A04', 2, 'Data 96'),
(1145, 96, 'A05', 3, 'Data 96'),
(1146, 96, 'A06', 3, 'Data 96'),
(1147, 96, 'A07', 95, 'Data 96'),
(1148, 96, 'A08', 2, 'Data 96'),
(1149, 96, 'A09', 30, 'Data 96'),
(1150, 96, 'A10', 60, 'Data 96'),
(1151, 96, 'A11', 4600000, 'Data 96'),
(1152, 96, 'A12', 109, 'Data 96'),
(1153, 97, 'A01', 2, 'Data 97'),
(1154, 97, 'A02', 1, 'Data 97'),
(1155, 97, 'A03', 1, 'Data 97'),
(1156, 97, 'A04', 1, 'Data 97'),
(1157, 97, 'A05', 2, 'Data 97'),
(1158, 97, 'A06', 3, 'Data 97'),
(1159, 97, 'A07', 90, 'Data 97'),
(1160, 97, 'A08', 3, 'Data 97'),
(1161, 97, 'A09', 20, 'Data 97'),
(1162, 97, 'A10', 50, 'Data 97'),
(1163, 97, 'A11', 4700000, 'Data 97'),
(1164, 97, 'A12', 109, 'Data 97'),
(1165, 98, 'A01', 2, 'Data 98'),
(1166, 98, 'A02', 1, 'Data 98'),
(1167, 98, 'A03', 1, 'Data 98'),
(1168, 98, 'A04', 2, 'Data 98'),
(1169, 98, 'A05', 2, 'Data 98'),
(1170, 98, 'A06', 3, 'Data 98'),
(1171, 98, 'A07', 85, 'Data 98'),
(1172, 98, 'A08', 3, 'Data 98'),
(1173, 98, 'A09', 30, 'Data 98'),
(1174, 98, 'A10', 30, 'Data 98'),
(1175, 98, 'A11', 4800000, 'Data 98'),
(1176, 98, 'A12', 109, 'Data 98'),
(1177, 99, 'A01', 3, 'Data 99'),
(1178, 99, 'A02', 2, 'Data 99'),
(1179, 99, 'A03', 1, 'Data 99'),
(1180, 99, 'A04', 2, 'Data 99'),
(1181, 99, 'A05', 2, 'Data 99'),
(1182, 99, 'A06', 3, 'Data 99'),
(1183, 99, 'A07', 85, 'Data 99'),
(1184, 99, 'A08', 2, 'Data 99'),
(1185, 99, 'A09', 20, 'Data 99'),
(1186, 99, 'A10', 60, 'Data 99'),
(1187, 99, 'A11', 4900000, 'Data 99'),
(1188, 99, 'A12', 109, 'Data 99'),
(1189, 100, 'A01', 3, 'Data 100'),
(1190, 100, 'A02', 3, 'Data 100'),
(1191, 100, 'A03', 2, 'Data 100'),
(1192, 100, 'A04', 2, 'Data 100'),
(1193, 100, 'A05', 2, 'Data 100'),
(1194, 100, 'A06', 3, 'Data 100'),
(1195, 100, 'A07', 90, 'Data 100'),
(1196, 100, 'A08', 3, 'Data 100'),
(1197, 100, 'A09', 20, 'Data 100'),
(1198, 100, 'A10', 50, 'Data 100'),
(1199, 100, 'A11', 5000000, 'Data 100'),
(1200, 100, 'A12', 109, 'Data 100');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_atribut` varchar(255) DEFAULT NULL,
  `nama_nilai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_atribut`, `nama_nilai`) VALUES
(105, 'A12', 'Administrasi'),
(106, 'A12', 'Telemarketing'),
(107, 'A12', 'Accounting'),
(108, 'A12', 'Operator Produksi'),
(109, 'A12', 'Teknisi Mesin Industri'),
(110, 'A12', 'Quality Control'),
(111, 'A12', 'IT Support / IT Helper'),
(112, 'A12', 'Advertising'),
(113, 'A12', 'Editor Foto / Editor Video'),
(114, 'A12', 'Drafter Assistant');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nis` int(20) DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT '123456',
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `foto_user` text,
  `hak_akses` enum('adminit','siswa','pt','guru') DEFAULT NULL,
  `tempat_lahir` text,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `alamat` text,
  `no` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` enum('ya','no','adm','pt','wali','nowali') DEFAULT 'ya',
  `angkatan` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nis`, `username`, `password`, `nama_lengkap`, `foto_user`, `hak_akses`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no`, `email`, `status`, `angkatan`) VALUES
(1, 0, 'rahmatnur', '123456', 'Rahmat Nur Fitri', NULL, 'guru', NULL, NULL, '', '02182438539', 'rahmatnur@smkdp1.gmail.com', 'nowali', '0'),
(2, 0, 'riza', '123456', 'Riza', NULL, 'guru', NULL, NULL, '', '0217712838', 'riza.harmony@gmail.com', 'wali', '0'),
(3, 0, 'suwandi', '123456', 'Suwandi Hartono', NULL, 'guru', NULL, NULL, NULL, NULL, NULL, 'nowali', '0'),
(15, 0, 'admin', '123456', 'Roman Romanan', 'foto_user/701484Dwiki.JPG', 'adminit', 'Jakarta', '', 'Jakarta', '085536884201', 'romanbatavi98@gmail.com', 'adm', '0'),
(79, 2021112308, 'mandraajah', '123456', 'Mandra', 'foto_user/728790ww.png', 'siswa', 'Jakarta', '2003-05-14', 'Bekasi', '085534571245', 'mandraganteng98@gmail.com', 'ya', '2021'),
(114, 0, 'hekaland', '123456', 'PT.Heka Land Property Group', NULL, 'pt', NULL, NULL, 'Rukan Grand Galaxy , Rose Garden RRG 3 Nomor 27 Taman Galaxy – Kota Bekasi 17147', '02182739887', 'heka.properti@gmail.com', 'ya', '0'),
(115, 0, 'imperiaasia', '123456', 'PT.Imperia Asia', NULL, 'pt', NULL, NULL, 'Ruko Daan Mogot Baru, Blok KJE No.26A, Jl. Tampak Siring No.Raya, RT.8/RW.12, Kalideres, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11840, Indonesia', '081280100522', 'hi@imperiaasia.com', 'ya', '0'),
(116, 0, 'mitraekasarana', '123456', 'MitraComm Ekasarana', NULL, 'pt', NULL, NULL, 'The East Tower, Jl. DR. Ide Anak Agung Gde Agung Kav. E.3.2 No.1 Kawasan Mega Kuningan Jakarta 12950, Indonesia.', '02125556168', 'marketing@phintraco.com', 'ya', '0'),
(117, 0, 'sigmasolusi', '123456', 'PT.Sigma Solusi Servis', NULL, 'pt', NULL, NULL, 'Jl. Dr. Saharjo No.206, RT.4/RW.5, Menteng Dalam, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12960', '02183702410', 'info@pt3s.id', 'ya', '0'),
(118, 0, 'aio', '123456', 'PT.Amerta Indah Otsuka', NULL, 'pt', NULL, NULL, 'Pondok Indah Office Tower I 6th Floor. Jl. Sultan Iskandar Muda Kav. V-TA South Jakarta, DKI Jakarta 12310', '0217697475', 'halo@aio.com', 'ya', '0'),
(119, 0, 'alokapersada', '123456', 'PT.Aloka Persada', NULL, 'pt', NULL, NULL, 'Business Park Kebon Jeruk, Blok - H No.8 Jl. Raya Meruya Ilir No.88, Jakarta Barat - 11620', '622129325760', 'budi.aloka@gmail.com', 'ya', '0'),
(120, 0, 'ymmi', '123456', 'PT.Yamaha Music Manufacturing Indonesia', NULL, 'pt', NULL, NULL, 'Kawasan Industri Pulogadung, Jl. Pulobuaran Raya No.1, RW.9, Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13930', '0214613234', 'support@ymmi.com', 'ya', '0'),
(121, 0, 'wingsgroup', '123456', 'PT. Sayap Mas Utama (Wings)', NULL, 'pt', NULL, NULL, 'Jl. Tipar cakung Kav. F 5 - 7 East Jakarta 13910 Indonesia', '0214602696', 'hrd@wingscorp.com', 'ya', '0'),
(122, 0, 'saba', '123456', 'PT.Saba Indomedika', NULL, 'pt', NULL, NULL, 'Ruko Kedoya Elok Plaza DB-33 Jl. Panjang no. 7-9 Jakarta 11520 Indonesia', '02158356886', 'contact@sabaindomedika.com', 'ya', '0'),
(123, 0, 'adyawinsa', '123456', 'PT. ADYAWINSA TELECOMMUNICATION & ELECTRICA', NULL, 'pt', NULL, NULL, 'Jl. Pegangsaan Dua KM 2 No. 64 RT.005/RW.002 Kelapa Gading, Jakarta Utara 14250', '0214603353', 'info@adyawinsa.com', 'ya', '0'),
(124, 0, 'biznet', '123456', 'Biznet Networks', NULL, 'pt', NULL, NULL, 'MidPlaza 2, 8th Floor Jl Jenderal Sudirman 10-11 Jakarta 10220 - Indonesia', '1500988', 'hrd@biznetnetworks.com', 'ya', '0'),
(126, 0, 'sigmatech', '123456', 'PT.Sigmatech Tatakarsa', NULL, 'pt', NULL, NULL, 'Jl. Pengadegan Barat No. 2 Jakarta 12770 Indonesia', '02179195787', 'mail@sigmatech.co.id', 'ya', '0'),
(129, 2021112309, 'sabrina', '123456', 'Sabrina Julia', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'ya', '2021'),
(130, 2021112310, 'rizkikuy', '123456', 'Rizki Maulana', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'ya', '2021'),
(131, 2021112311, 'renaldiuhuy', '123456', 'Renaldi Ardian', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'ya', '2021'),
(132, 2021112312, 'wawa', '123456', 'Wawan Sunarmo', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'ya', '2021'),
(133, 2021112313, 'tatang', '123456', 'Tatang Gaming', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'ya', '2021'),
(134, 2021112314, 'kezia', '123456', 'Kezia Zudith', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'ya', '2021'),
(135, 2021112315, 'jojo123', '123456', 'Joseph Joestar', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'ya', '2021'),
(136, 2021112316, 'naoka', '123456', 'Naoka Ueno', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'ya', '2021'),
(137, 2021112317, 'kristoyanto', '123456', 'Kristo Yanto', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'no', '2021'),
(138, 2021112399, 'toto', '123456', 'Susanto', NULL, 'siswa', NULL, NULL, NULL, NULL, NULL, 'ya', '2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_knn`
--
ALTER TABLE `master_knn`
  ADD PRIMARY KEY (`id_master_knn`);

--
-- Indexes for table `master_nilai`
--
ALTER TABLE `master_nilai`
  ADD PRIMARY KEY (`id_master`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pm_aspek`
--
ALTER TABLE `pm_aspek`
  ADD PRIMARY KEY (`id_aspek`);

--
-- Indexes for table `pm_ekskul`
--
ALTER TABLE `pm_ekskul`
  ADD PRIMARY KEY (`kdnilai4`);

--
-- Indexes for table `pm_kegiatan`
--
ALTER TABLE `pm_kegiatan`
  ADD PRIMARY KEY (`kdnilai3`);

--
-- Indexes for table `pm_kemampuan`
--
ALTER TABLE `pm_kemampuan`
  ADD PRIMARY KEY (`kdnilai2`);

--
-- Indexes for table `pm_kriteria`
--
ALTER TABLE `pm_kriteria`
  ADD PRIMARY KEY (`kdkriteria`);

--
-- Indexes for table `pm_penilaian`
--
ALTER TABLE `pm_penilaian`
  ADD PRIMARY KEY (`kdnilai1`);

--
-- Indexes for table `pm_prestasi`
--
ALTER TABLE `pm_prestasi`
  ADD PRIMARY KEY (`kdnilai6`);

--
-- Indexes for table `pm_sikap`
--
ALTER TABLE `pm_sikap`
  ADD PRIMARY KEY (`kdnilai5`);

--
-- Indexes for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `tb_atribut`
--
ALTER TABLE `tb_atribut`
  ADD PRIMARY KEY (`id_atribut`);

--
-- Indexes for table `tb_dataset`
--
ALTER TABLE `tb_dataset`
  ADD PRIMARY KEY (`id_dataset`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_knn`
--
ALTER TABLE `master_knn`
  MODIFY `id_master_knn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `master_nilai`
--
ALTER TABLE `master_nilai`
  MODIFY `id_master` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pm_ekskul`
--
ALTER TABLE `pm_ekskul`
  MODIFY `kdnilai4` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pm_kegiatan`
--
ALTER TABLE `pm_kegiatan`
  MODIFY `kdnilai3` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pm_kemampuan`
--
ALTER TABLE `pm_kemampuan`
  MODIFY `kdnilai2` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pm_penilaian`
--
ALTER TABLE `pm_penilaian`
  MODIFY `kdnilai1` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `pm_prestasi`
--
ALTER TABLE `pm_prestasi`
  MODIFY `kdnilai6` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pm_sikap`
--
ALTER TABLE `pm_sikap`
  MODIFY `kdnilai5` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_lowongan`
--
ALTER TABLE `tbl_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tb_dataset`
--
ALTER TABLE `tb_dataset`
  MODIFY `id_dataset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1201;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
