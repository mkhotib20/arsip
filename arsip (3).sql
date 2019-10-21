-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 04:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip`
--

CREATE TABLE `tb_arsip` (
  `arsip_id` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `no_gedung` varchar(100) NOT NULL,
  `no_rak` varchar(100) NOT NULL,
  `departemen` int(11) NOT NULL,
  `jenis_dokumen` varchar(11) NOT NULL,
  `bantex` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_arsip`
--

INSERT INTO `tb_arsip` (`arsip_id`, `no_surat`, `no_gedung`, `no_rak`, `departemen`, `jenis_dokumen`, `bantex`) VALUES
(15, 'Audit/2019', '1212', '900', 1, 'audit', 'uuuiuiu'),
(16, 'Inv/2019', '1212', '2112', 1, 'as', 'sasa'),
(17, 'asas', '223', '3232', 1, 'sa', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `tb_currency`
--

CREATE TABLE `tb_currency` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_currency`
--

INSERT INTO `tb_currency` (`id`, `name`) VALUES
(1, 'Rp'),
(3, 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dep`
--

CREATE TABLE `tb_dep` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dep`
--

INSERT INTO `tb_dep` (`dep_id`, `dep_name`) VALUES
(1, 'Keuangan'),
(3, 'Pajak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `dok_id` varchar(100) NOT NULL,
  `tgl_akt_in` varchar(15) DEFAULT NULL,
  `verificator` varchar(15) DEFAULT NULL,
  `tgl_akt_out` varchar(15) DEFAULT NULL,
  `tgl_admin_in` varchar(15) DEFAULT NULL,
  `keterangan` varchar(15) DEFAULT NULL,
  `pengembalian` tinyint(1) NOT NULL,
  `tgl_pengarsipan` varchar(15) NOT NULL,
  `tgl_admin_out` varchar(15) NOT NULL,
  `sap_no` varchar(15) DEFAULT NULL,
  `tgl_bayar` varchar(15) DEFAULT NULL,
  `bantex` varchar(15) DEFAULT NULL,
  `unit_kerja` varchar(100) DEFAULT NULL,
  `no_surat` varchar(15) DEFAULT NULL,
  `no_dok_masuk` varchar(15) DEFAULT NULL,
  `tgl_keuangan` varchar(15) DEFAULT NULL,
  `vendor` varchar(100) DEFAULT NULL,
  `invoice` varchar(15) DEFAULT NULL,
  `currency` varchar(15) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `ppn` varchar(15) DEFAULT NULL,
  `tgl_pajak_in` varchar(15) DEFAULT NULL,
  `tgl_pajak_out` varchar(15) DEFAULT NULL,
  `jurnal` varchar(15) DEFAULT NULL,
  `pospk` varchar(15) DEFAULT NULL,
  `no_rak` varchar(100) DEFAULT '0',
  `no_gedung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`dok_id`, `tgl_akt_in`, `verificator`, `tgl_akt_out`, `tgl_admin_in`, `keterangan`, `pengembalian`, `tgl_pengarsipan`, `tgl_admin_out`, `sap_no`, `tgl_bayar`, `bantex`, `unit_kerja`, `no_surat`, `no_dok_masuk`, `tgl_keuangan`, `vendor`, `invoice`, `currency`, `nominal`, `perihal`, `ppn`, `tgl_pajak_in`, `tgl_pajak_out`, `jurnal`, `pospk`, `no_rak`, `no_gedung`) VALUES
('DOK156069019725822', '20/06/2019', '', '21/06/2019', '16/06/2019', 'Asasasas', 0, '', '18/06/2019', '', '', 'asasas', 'Mitra kerja Mal', '', 'asasas', '21/06/2019', 'Vendor Komputer', NULL, 'Rp', 0, '', '10929012', '18/06/2019', '20/06/2019', '', '', '', ''),
('DOK156069951126980', '', '', '10/12/2019', '10/03/2019', 'qwqqw', 0, '16/03/2019', '10/12/2019', '', '', 'qwqw', 'Unit kerja sura', 'Ada2019', 'qwqw', '10/12/2019', 'Vendor Kertas', NULL, 'wqwqw', 0, '', 'as', '10/12/2019', '', '', '', '900', '1212'),
('DOK156070068823203', '10/10/2019', '', '10/10/2019', '10/10/2019', 'asas', 0, '', '10/10/2019', '', '', '9102901920', NULL, '', '121212', '10/10/2019', NULL, NULL, 'Rp', 0, '', '', '10/10/2019', '10/10/2019', '', '', '', ''),
('DOK1560701028213', '', '', '', '10/03/2019', '111', 0, '', '10/12/2020', '', '', '111', 'Mitra Kerja Pus', '', '11', '', 'Vendor Komputer', '', '11', 0, '', '', '10/12/2020', '', '', '', '', ''),
('DOK156070671128906', '', '', '18/10/2019', '10/10/2019', 'kl', 0, '', '10/10/2019', '', '', 'oo', 'Mitra kerja Mal', '', 'kl', '18/10/2019', 'Vendor Komputer', '', 'kkll', 0, '', '', '10/10/2019', '', '', '', '', ''),
('DOK156070803931127', '', '', '', '10/03/2019', '11', 0, '', '10/12/2019', '', '', '11', 'Mitra kerja Mal', '', '21', '', 'Vendor Komputer', '', '12', 0, '', '', '10/12/2019', '', '', '', '', ''),
('DOK156071198626363', '', '', '', '10/02/2019', 'kl', 0, '', '10/02/2019', '', '', 'kl', NULL, '', 'kl', '', NULL, NULL, 'Rp', 0, '', '', '10/02/2019', '', '', '', '', ''),
('DOK156126292210097', '', '', '', '10/03/2020', 'Kuha', 0, '', '10/03/2020', '', '', 'Ahuy', 'Mitra kerja Mal', '', 'qwwq', '', 'Vendor Komputer', NULL, 'ar', 0, '', '', '10/03/2020', '', '', '', '', ''),
('DOK15651487855389213', '07/08/2019', '', '02/09/2019', '07/08/2019', 'coba', 1, '', '07/08/2019', '', '', '1223', NULL, '', '123213', '02/09/2019', NULL, NULL, 'Rp', 0, '', '', '07/08/2019', '07/08/2019', '', '', '', ''),
('DOK15694856924597110', '', '', '', '26/09/2019', 'Terang', 0, '', '30/09/2019', '', '', 'Jkjkj', 'Mitra kerja Malang', '', '87878', '', 'Vendor Komputer', NULL, 'Rp', 0, '', '', '30/09/2019', '', '', '', '8237', '728193'),
('DOK15694922397335967', '', 'Dendi', '', '20/09/2019', 'Terang', 0, '', '20/09/2019', '898989', '', 'Jkjkj', NULL, 'uy989', '87878', '', NULL, NULL, 'Rp', 0, 'okl', '989', '20/09/2019', '', '676767', '32323', '', ''),
('DOK15694932732389265', '03/10/2019', '', '10/10/2019', '29/09/2019', 'Terang', 0, '', '31/09/2019', '', '', 'iuui', NULL, '1211212', '87878', '10/10/2019', NULL, NULL, 'Rp', 90000, 'hgghg', '', '31/09/2019', '03/10/2019', '', '', '80', '80'),
('DOK1569493551382640402', '', '', '', '29/09/2019', '', 0, '', '29/09/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '29/09/2019', '', '', '', '', ''),
('DOK15700366951574840429', '05/10/2019', '', '09/10/2019', '01/09/2019', 'Terang', 0, '', '01/09/2019', '', '', 'iuui', NULL, '', '', '09/10/2019', NULL, NULL, 'Rp', 0, '', '', '01/09/2019', '05/10/2019', '', '', '1212', '2112'),
('DOK15707600641354378829', '10/10/2019', '', '10/10/2019', '10/10/2019', 'Klklk', 0, '', '10/10/2019', '', '', '', NULL, '', '77876', '10/10/2019', NULL, NULL, 'Rp', 0, '', '', '10/10/2019', '10/10/2019', '', '', '190', '190'),
('DOK1570765879602389050', '', '', '', '10/10/2019', '', 0, '', '10/10/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '10/10/2019', '', '', '', '', ''),
('DOK157076602038414084', '', '', '', '10/10/2019', '', 0, '', '11/10/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '', '', '', '', '', ''),
('DOK15707660491388096764', '', '', '', '21/12/2019', '', 0, '', '01/01/2020', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '', '', '', '', '', ''),
('DOK1570766085630440075', '', '', '', '10/10/2019', '', 0, '', '10/10/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '', '', '', '', '', ''),
('DOK15707661101709043677', '', '', '', '10/10/2019', '', 0, '', '10/10/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '', '', '', '', '', ''),
('DOK1570766136962837218', '', '', '', '10/10/2019', '', 0, '', '10/10/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '10/10/2019', '', '', '', '', ''),
('DOK1570766158926624842', '10/10/2019', '', '11/10/2019', '10/10/2019', '', 0, '', '10/10/2019', '', '', '', NULL, '', '', '11/10/2019', NULL, NULL, 'Rp', 0, '', '', '10/10/2019', '10/10/2019', '', '', '', ''),
('DOK1570771550430902654', '12/10/2019', '', '', '10/10/2019', 'Terang', 0, '', '10/10/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '10/10/2019', '12/10/2019', '', '', '', ''),
('DOK1570771670269191113', '11/10/2019', '', '', '10/10/2019', 'Terang', 0, '', '10/10/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '10/10/2019', '11/10/2019', '', '', '', ''),
('DOK15707718491070378400', '11/10/2019', '', '', '10/10/2019', 'Klklk', 0, '', '10/10/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '10/10/2019', '11/10/2019', '', '', '', ''),
('DOK15707723461224735107', '', '', '', '10/10/2019', '', 0, '', '10/10/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '', '', '', '', '', ''),
('DOK15707723521220450173', '11/10/2019', '', '', '10/01/2019', 'Terang', 0, '', '10/10/2019', '', '', '', 'Mitra Kerja Pusat', '', '', '', 'Vendor Komputer', NULL, 'Rp', 0, '', '', '10/10/2019', '11/10/2019', '', '', '', ''),
('DOK15707803671561930978', '11/10/2019', '', '', '10/10/2019', 'Terang', 0, '', '10/10/2019', '', '', '', 'Mitra kerja Malang', '', '', '', 'Vendor Kertas', NULL, 'Rp', 0, '', '', '10/10/2019', '11/10/2019', '', '', '', ''),
('DOK15716247271072671790', '', '', '', '10/02/2019', '', 0, '', '10/02/2019', '', '', '', NULL, '', '', '', NULL, NULL, 'Rp', 0, '', '', '10/02/2019', '', '', '', '0', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mitra`
--

CREATE TABLE `tb_mitra` (
  `mitra_id` int(11) NOT NULL,
  `mitra_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mitra`
--

INSERT INTO `tb_mitra` (`mitra_id`, `mitra_nama`) VALUES
(3, 'Mitra kerja Malang'),
(6, 'Unit kerja surabaya'),
(7, 'Mitra Kerja Pusat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_notification`
--

CREATE TABLE `tb_notification` (
  `notif_id` int(11) NOT NULL,
  `notif_doc` varchar(100) NOT NULL,
  `notif_status` tinyint(1) NOT NULL,
  `notif_timestamp` varchar(50) NOT NULL,
  `notif_user` int(11) NOT NULL,
  `notif_pengirim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_notification`
--

INSERT INTO `tb_notification` (`notif_id`, `notif_doc`, `notif_status`, `notif_timestamp`, `notif_user`, `notif_pengirim`) VALUES
(18, 'DOK156070671128906', 0, '1560706728', 6, NULL),
(21, 'DOK156071198626363', 0, '1560712005', 0, NULL),
(24, 'DOK1565148785538921377', 0, '1565148826', 4, NULL),
(26, 'DOK1569485692459711025', 0, '1569485736', 4, NULL),
(27, 'GAGA', 0, '1569492877', 4, NULL),
(28, 'GAGA', 0, '1569492883', 4, NULL),
(29, 'DOK1569493273238926529', 0, '1569493303', 4, NULL),
(47, 'DOK15707723521220450173', 1, '1570772364', 4, 1),
(49, 'DOK15707803671561930978', 1, '1570780405', 4, 1),
(50, 'DOK15707803671561930978', 1, '1570780695', 5, 4),
(51, 'DOK15716247271072671790', 0, '1571624741', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'super admin'),
(3, 'keuangan'),
(4, 'pajak'),
(5, 'akuntansi'),
(6, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama_lengkap`, `role`) VALUES
('admin', 'admin', 'Administrator', 1),
('akt', 'akt', 'akt', 5),
('keuangan', 'keuangan', 'Fian Fachru', 3),
('pajak', 'pajak', 'Pajak', 4),
('super', 'super', 'Muhammad Khotib', 2),
('user', 'user', 'user reguler', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_vendor`
--

CREATE TABLE `tb_vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_vendor`
--

INSERT INTO `tb_vendor` (`vendor_id`, `vendor_nama`) VALUES
(1, 'Vendor Komputer'),
(3, 'Vendor Kertas'),
(4, 'Vendor Kendaraan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD PRIMARY KEY (`arsip_id`);

--
-- Indexes for table `tb_currency`
--
ALTER TABLE `tb_currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dep`
--
ALTER TABLE `tb_dep`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`dok_id`);

--
-- Indexes for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD PRIMARY KEY (`mitra_id`);

--
-- Indexes for table `tb_notification`
--
ALTER TABLE `tb_notification`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
  MODIFY `arsip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_currency`
--
ALTER TABLE `tb_currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_dep`
--
ALTER TABLE `tb_dep`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  MODIFY `mitra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_notification`
--
ALTER TABLE `tb_notification`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_vendor`
--
ALTER TABLE `tb_vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
