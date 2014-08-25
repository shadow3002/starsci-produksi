-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Agu 2014 pada 18.20
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apeofrees`
--

CREATE TABLE IF NOT EXISTS `apeofrees` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `namafiledoc` varchar(255) NOT NULL,
  `namafilepdf` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_by` varchar(255) NOT NULL,
  `apeofree_category_id` int(11) NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `apeofrees`
--

INSERT INTO `apeofrees` (`id`, `name`, `namafiledoc`, `namafilepdf`, `category`, `create_date`, `create_by`, `update_by`, `apeofree_category_id`, `update_date`) VALUES
(5, 'Satu', 'project1 (1).doc', 'adobe-acrobat-xi-esign-pdf-file-tutorial-ue.pdf', '', '2013-12-26 20:40:05', 'shadow3002', 'shadow3002', 1, '2014-05-16 21:16:41'),
(2, 'Dua', 'project1 (1).doc', 'CakePHPPanelKawalanACL-AzrilNazli.pdf', '', '2013-12-26 00:48:46', 'shadow3002', 'shadow3002', 1, '0000-00-00 00:00:00'),
(4, 'cake', 'project1.doc', 'CakePHPPanelKawalanACL-AzrilNazli.pdf', '', '2013-12-26 20:33:18', 'shadow3002', 'shadow3002', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apeofree_categories`
--

CREATE TABLE IF NOT EXISTS `apeofree_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `apeofree_categories`
--

INSERT INTO `apeofree_categories` (`id`, `name`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(1, 'Salah', '2013-12-25 17:07:25', 'shadow3002', '0000-00-00 00:00:00', ''),
(2, 'Dua', '2013-12-25 17:22:23', 'shadow3002', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `coamasters`
--

CREATE TABLE IF NOT EXISTS `coamasters` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nocoa` varchar(22) DEFAULT NULL,
  `namaproduk` varchar(25) DEFAULT NULL,
  `lotno` varchar(12) DEFAULT NULL,
  `tanggaltes` date NOT NULL,
  `appunit` varchar(10) DEFAULT NULL,
  `appreq` varchar(35) DEFAULT NULL,
  `appresults` varchar(7) DEFAULT NULL,
  `appket` varchar(160) DEFAULT NULL,
  `produkunit` varchar(10) NOT NULL,
  `produkreq` varchar(35) NOT NULL,
  `produkresults` varchar(7) NOT NULL,
  `produkket` varchar(160) NOT NULL,
  `refracunit` varchar(10) NOT NULL,
  `refracreq` varchar(35) NOT NULL,
  `refracresults` varchar(7) NOT NULL,
  `refracket` varchar(160) NOT NULL,
  `phunit` varchar(10) NOT NULL,
  `phreq` varchar(35) NOT NULL,
  `phresults` varchar(7) NOT NULL,
  `phket` varchar(160) NOT NULL,
  `tscunit` varchar(10) NOT NULL,
  `tscreq` varchar(35) NOT NULL,
  `tscresults` varchar(7) NOT NULL,
  `tscket` varchar(160) NOT NULL,
  `freeunit` varchar(10) NOT NULL,
  `freereq` varchar(35) NOT NULL,
  `freeresults` varchar(7) NOT NULL,
  `freeket` varchar(160) NOT NULL,
  `triziunit` varchar(10) NOT NULL,
  `trizireq` varchar(35) NOT NULL,
  `triziresults` varchar(7) NOT NULL,
  `triziket` varchar(160) NOT NULL,
  `viscounit` varchar(10) NOT NULL,
  `viscoreq` varchar(35) NOT NULL,
  `viscoresults` varchar(7) NOT NULL,
  `viscoket` varchar(160) NOT NULL,
  `solunit` varchar(10) NOT NULL,
  `solreq` varchar(35) NOT NULL,
  `solresults` varchar(7) NOT NULL,
  `solket` varchar(160) NOT NULL,
  `densiunit` varchar(10) NOT NULL,
  `densireq` varchar(35) NOT NULL,
  `densiresults` varchar(7) NOT NULL,
  `densiket` varchar(160) NOT NULL,
  `namatmbh1` varchar(35) NOT NULL,
  `methodtmbh1` varchar(30) NOT NULL,
  `tmbh1unit` varchar(10) NOT NULL,
  `tmbh1req` varchar(35) NOT NULL,
  `tmbh1results` varchar(7) NOT NULL,
  `tmbh1ket` varchar(160) NOT NULL,
  `namatmbh2` varchar(35) NOT NULL,
  `methodtmbh2` varchar(30) NOT NULL,
  `tmbh2unit` varchar(10) NOT NULL,
  `tmbh2req` varchar(35) NOT NULL,
  `tmbh2results` varchar(7) NOT NULL,
  `tmbh2ket` varchar(160) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(25) NOT NULL,
  `update_date` datetime NOT NULL,
  `update_by` varchar(25) NOT NULL,
  `printcoa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nocoa` (`nocoa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `coamasters`
--

INSERT INTO `coamasters` (`id`, `nocoa`, `namaproduk`, `lotno`, `tanggaltes`, `appunit`, `appreq`, `appresults`, `appket`, `produkunit`, `produkreq`, `produkresults`, `produkket`, `refracunit`, `refracreq`, `refracresults`, `refracket`, `phunit`, `phreq`, `phresults`, `phket`, `tscunit`, `tscreq`, `tscresults`, `tscket`, `freeunit`, `freereq`, `freeresults`, `freeket`, `triziunit`, `trizireq`, `triziresults`, `triziket`, `viscounit`, `viscoreq`, `viscoresults`, `viscoket`, `solunit`, `solreq`, `solresults`, `solket`, `densiunit`, `densireq`, `densiresults`, `densiket`, `namatmbh1`, `methodtmbh1`, `tmbh1unit`, `tmbh1req`, `tmbh1results`, `tmbh1ket`, `namatmbh2`, `methodtmbh2`, `tmbh2unit`, `tmbh2req`, `tmbh2results`, `tmbh2ket`, `create_date`, `create_by`, `update_date`, `update_by`, `printcoa_id`) VALUES
(2, 'COA/404/SSCI/XI/12', 'STARES', '114024A3LI', '2012-11-09', '-', 'CLEAR LIQUID', 'OK', '-', '%', 'YELLOW LIQUID', 'OK', '-', '%', '21-23', '22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-05-16 21:19:45', 'shadow3002', '2014-06-24 20:50:10', 'aldwin', 0),
(3, 'tiga', 'Percobaan', 'tiga', '2014-03-12', 'alskdm', 'laksmdlm', 'aslkdml', 'sldkmaslm', 'asldkm', 'asldkmkl', 'asldkml', 'lakmsdl', 'lkasmdl', 'lamsdlkm', 'laskmdl', 'lamsdlk', 'lasmdlkm', 'asldkmlk', 'sldkmal', 'lkasmdlk', 'alsdkml', 'kasdlkml', 'laksmdl', 'lkamsdl', 'laskdmlk', 'masldkmlk', 'asldmlk', 'alsdkmalk', 'laksdml', 'lkmalskdmlk', 'laksmdl', 'lamsdlkm', 'lkamsdlm', 'laksmdlsakm', 'lkmakls', 'lkmlaksdm', 'lklmaslkdm', 'lkmasldkm', 'lkamsdk', 'laksmdlk', 'lkamsdlkm', 'lkmsldkml', 'lasmdkl', 'lskdmlaskm', 'lkasmdlm', 'laksdmlkm', 'aslkdmlk', 'lkmasldkm', 'lkmasdl', 'lkamsdlkm', 'lkamsdlk', 'lkmadslm', 'lkamsdlkm', 'laskmdlk', 'mlaksmd', 'lkmlkmasd', '2014-03-12 20:40:47', 'shadow3002', '2014-07-04 21:26:12', 'aldwin', 0),
(4, 'asmdl', 'lakmdkl', 'aslkdmkl', '2014-05-16', 'aksmdl', 'asldkm', 'lkamdlm', 'laskdmsalk', 'alsdkm', 'laksmdl', 'laskdml', 'lamsdkl', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-05-16 19:51:30', 'shadow3002', '0000-00-00 00:00:00', '', 0),
(5, 'kasmdl', 'lasmdlk', 'mlamsdlkm', '2014-05-16', 'laksdm', 'laskdm', 'laskmdl', 'lasdkmkl', 'alskdm', 'lkamsdl', 'laksmdl', 'lkamsdl', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-05-16 20:50:06', 'shadow3002', '0000-00-00 00:00:00', '', 0),
(6, 'alskdm', 'laskdm', 'lakmsdl', '2014-05-16', 'askldm', 'lasdml', 'lasdkml', 'laksdml', 'laksdm', 'lkasdm', 'laksdml', 'laksmdkl', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-05-16 20:53:48', 'shadow3002', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulas`
--

CREATE TABLE IF NOT EXISTS `formulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `raw_material` varchar(255) NOT NULL,
  `percentage` decimal(10,2) NOT NULL,
  `product_id` int(11) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `formulas`
--

INSERT INTO `formulas` (`id`, `raw_material`, `percentage`, `product_id`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'STAR RM 40 GL', '23.39', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(2, 'STAR CROSS/FORMALINE', '24.36', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(3, 'UREA', '9.50', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(4, 'THINER M.209', '3.82', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(5, 'THINER M.209', '3.82', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(6, 'PHOSPORIC ACID 85%', '1.05', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(7, 'CITRIC ACID', '0.40', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(8, 'SOD CHLORIDE', '9.33', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(9, 'DEMIN WATER', '8.54', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(10, 'STAR RM 01 / DEG', '13.42', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00'),
(11, 'SOD HYDROXIDE 20%', '2.37', 5, 'aldwin', '2014-08-16 19:59:10', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulations`
--

CREATE TABLE IF NOT EXISTS `formulations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `production_card_id` int(11) NOT NULL,
  `raw_material` varchar(50) NOT NULL,
  `percentage` int(11) NOT NULL,
  `std` int(11) NOT NULL,
  `actual` int(11) NOT NULL,
  `selisih` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `formulations`
--

INSERT INTO `formulations` (`id`, `product_id`, `production_card_id`, `raw_material`, `percentage`, `std`, `actual`, `selisih`, `note`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 4, 2, 'raw 01', 50, 5000, 4000, 1000, 'test pertama', 'aldwin', '2014-06-25 21:35:08', 'aldwin', '2014-08-07 21:04:10'),
(2, 4, 2, 'dua', 2, 2, 2, 2, 'dua', 'aldwin', '2014-06-25 23:12:50', '', '0000-00-00 00:00:00'),
(3, 4, 2, 'satu', 1, 1, 1, 1, 'satu', 'aldwin', '2014-06-25 23:19:38', '', '0000-00-00 00:00:00'),
(4, 4, 2, 'test1', 10, 20, 30, 10, 'satu', 'aldwin', '2014-08-07 19:58:06', '', '0000-00-00 00:00:00'),
(5, 4, 2, 'test2', 20, 30, 40, 20, 'dua', 'aldwin', '2014-08-07 19:58:06', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_menus`
--

CREATE TABLE IF NOT EXISTS `group_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_category_id` int(11) NOT NULL,
  `group_user_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data untuk tabel `group_menus`
--

INSERT INTO `group_menus` (`id`, `menu_category_id`, `group_user_id`, `create_date`, `create_by`, `update_date`, `update_by`, `menu_id`) VALUES
(13, 3, 3, '2014-01-13 20:48:09', 'shadow3002', '2014-06-24 20:55:26', 'aldwin', 5),
(14, 2, 3, '2014-01-20 23:27:28', 'shadow3002', '0000-00-00 00:00:00', '', 4),
(15, 3, 3, '2014-02-20 00:57:33', 'shadow3002', '0000-00-00 00:00:00', '', 6),
(16, 4, 3, '2014-02-20 00:57:59', 'shadow3002', '0000-00-00 00:00:00', '', 7),
(17, 4, 3, '2014-02-20 00:58:11', 'shadow3002', '0000-00-00 00:00:00', '', 8),
(18, 5, 3, '2014-02-20 00:58:21', 'shadow3002', '0000-00-00 00:00:00', '', 9),
(19, 5, 3, '2014-02-20 00:58:32', 'shadow3002', '0000-00-00 00:00:00', '', 10),
(20, 6, 3, '2014-02-20 00:58:42', 'shadow3002', '0000-00-00 00:00:00', '', 11),
(22, 7, 3, '2014-02-20 00:59:01', 'shadow3002', '0000-00-00 00:00:00', '', 15),
(23, 7, 3, '2014-02-20 00:59:13', 'shadow3002', '0000-00-00 00:00:00', '', 16),
(24, 8, 3, '2014-02-20 00:59:24', 'shadow3002', '0000-00-00 00:00:00', '', 13),
(25, 8, 3, '2014-02-20 00:59:34', 'shadow3002', '0000-00-00 00:00:00', '', 14),
(26, 6, 3, '2014-02-20 01:00:11', 'shadow3002', '0000-00-00 00:00:00', '', 12),
(30, 2, 5, '2014-05-01 21:47:46', 'shadow3002', '0000-00-00 00:00:00', '', 3),
(31, 4, 5, '2014-05-01 21:48:00', 'shadow3002', '0000-00-00 00:00:00', '', 8),
(32, 5, 5, '2014-05-01 21:48:10', 'shadow3002', '0000-00-00 00:00:00', '', 10),
(33, 6, 5, '2014-05-01 21:48:18', 'shadow3002', '0000-00-00 00:00:00', '', 11),
(34, 7, 5, '2014-05-01 21:48:26', 'shadow3002', '0000-00-00 00:00:00', '', 16),
(35, 8, 5, '2014-05-01 21:48:34', 'shadow3002', '0000-00-00 00:00:00', '', 14),
(36, 7, 7, '2014-05-01 21:49:11', 'shadow3002', '0000-00-00 00:00:00', '', 15),
(37, 7, 7, '2014-05-01 21:49:19', 'shadow3002', '0000-00-00 00:00:00', '', 16),
(38, 2, 7, '2014-05-01 21:49:30', 'shadow3002', '0000-00-00 00:00:00', '', 3),
(39, 8, 7, '2014-05-01 21:49:44', 'shadow3002', '0000-00-00 00:00:00', '', 14),
(40, 2, 6, '2014-05-01 21:50:00', 'shadow3002', '0000-00-00 00:00:00', '', 3),
(41, 4, 6, '2014-05-01 21:50:17', 'shadow3002', '0000-00-00 00:00:00', '', 8),
(42, 5, 6, '2014-05-01 21:50:27', 'shadow3002', '0000-00-00 00:00:00', '', 10),
(43, 6, 6, '2014-05-01 21:50:42', 'shadow3002', '0000-00-00 00:00:00', '', 11),
(44, 7, 6, '2014-05-01 21:50:49', 'shadow3002', '0000-00-00 00:00:00', '', 16),
(45, 8, 6, '2014-05-01 21:50:59', 'shadow3002', '0000-00-00 00:00:00', '', 14),
(48, 9, 3, '2014-05-18 14:27:25', 'aldwin', '0000-00-00 00:00:00', '', 18),
(57, 2, 3, '2014-05-18 21:48:19', 'aldwin', '0000-00-00 00:00:00', '', 3),
(58, 10, 3, '2014-07-24 22:59:15', 'aldwin', '0000-00-00 00:00:00', '', 19),
(59, 10, 3, '2014-07-25 00:22:32', 'aldwin', '0000-00-00 00:00:00', '', 20),
(60, 12, 3, '2014-07-25 00:22:56', 'aldwin', '0000-00-00 00:00:00', '', 21),
(61, 12, 3, '2014-07-25 00:23:13', 'aldwin', '0000-00-00 00:00:00', '', 22),
(62, 13, 3, '2014-07-25 00:23:26', 'aldwin', '0000-00-00 00:00:00', '', 23),
(63, 13, 3, '2014-07-25 00:23:41', 'aldwin', '0000-00-00 00:00:00', '', 24),
(64, 14, 3, '2014-07-25 00:23:55', 'aldwin', '0000-00-00 00:00:00', '', 25),
(65, 14, 3, '2014-07-25 00:24:05', 'aldwin', '0000-00-00 00:00:00', '', 26),
(66, 15, 3, '2014-07-25 00:24:19', 'aldwin', '0000-00-00 00:00:00', '', 27),
(67, 15, 3, '2014-07-25 00:24:30', 'aldwin', '0000-00-00 00:00:00', '', 28),
(68, 16, 3, '2014-07-25 00:24:43', 'aldwin', '0000-00-00 00:00:00', '', 29),
(70, 17, 3, '2014-07-25 00:25:11', 'aldwin', '0000-00-00 00:00:00', '', 31),
(71, 17, 3, '2014-07-25 00:25:30', 'aldwin', '0000-00-00 00:00:00', '', 32),
(72, 18, 3, '2014-07-25 00:25:46', 'aldwin', '0000-00-00 00:00:00', '', 33),
(73, 18, 3, '2014-07-25 00:25:58', 'aldwin', '0000-00-00 00:00:00', '', 34),
(74, 19, 3, '2014-07-25 00:26:16', 'aldwin', '0000-00-00 00:00:00', '', 35),
(75, 19, 3, '2014-07-25 00:26:27', 'aldwin', '0000-00-00 00:00:00', '', 36),
(76, 20, 3, '2014-07-25 00:26:34', 'aldwin', '0000-00-00 00:00:00', '', 37),
(77, 20, 3, '2014-07-25 00:26:45', 'aldwin', '0000-00-00 00:00:00', '', 38),
(78, 21, 3, '2014-07-25 00:27:02', 'aldwin', '0000-00-00 00:00:00', '', 39),
(79, 21, 3, '2014-07-25 00:27:16', 'aldwin', '0000-00-00 00:00:00', '', 40),
(80, 22, 3, '2014-07-25 00:27:24', 'aldwin', '0000-00-00 00:00:00', '', 41),
(81, 22, 3, '2014-07-25 00:27:32', 'aldwin', '0000-00-00 00:00:00', '', 42),
(84, 16, 3, '2014-08-07 21:21:08', 'aldwin', '0000-00-00 00:00:00', '', 44);

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_users`
--

CREATE TABLE IF NOT EXISTS `group_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `group_users`
--

INSERT INTO `group_users` (`id`, `name`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(3, 'Admin', '2013-12-24 18:49:52', 'shadow3002', '0000-00-00 00:00:00', ''),
(4, 'Guest', '2014-01-08 20:39:31', 'shadow3002', '0000-00-00 00:00:00', ''),
(5, 'CS', '2014-05-01 21:39:25', 'shadow3002', '0000-00-00 00:00:00', ''),
(6, 'Sales', '2014-05-01 21:39:34', 'shadow3002', '0000-00-00 00:00:00', ''),
(7, 'Laboratorium', '2014-05-01 21:39:41', 'shadow3002', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ikeas`
--

CREATE TABLE IF NOT EXISTS `ikeas` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `namafiledoc` varchar(200) NOT NULL,
  `ikea_category_id` varchar(20) NOT NULL,
  `namafilepdf` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `ikeas`
--

INSERT INTO `ikeas` (`id`, `name`, `namafiledoc`, `ikea_category_id`, `namafilepdf`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(1, 'lkasmdl', 'LA P web pert 2.docx', '1', 'CakePHPPanelKawalanACL-AzrilNazli.pdf', '2013-12-26 00:52:24', 'shadow3002', '2014-05-16 21:17:13', 'shadow3002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ikea_categories`
--

CREATE TABLE IF NOT EXISTS `ikea_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `ikea_categories`
--

INSERT INTO `ikea_categories` (`id`, `name`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(1, 'Robot', '2013-12-25 18:07:19', 'shadow3002', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `menu_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `name`, `url`, `controller`, `action`, `create_date`, `create_by`, `update_date`, `update_by`, `menu_category_id`) VALUES
(3, 'View MSDS', 'localhost/starsci/tbdownloads/index', 'Tbdownloads', 'index', '2013-12-26 00:29:33', 'shadow3002', '2013-12-28 23:32:52', 'shadow3002', 2),
(4, 'Upload MSDS', 'localhost/starsci/tbdownloads/add', 'Tbdownloads', 'add', '2013-12-26 00:29:33', 'shadow3002', '2013-12-25 14:53:00', 'shadow3002', 2),
(5, 'Form User', 'localhost/starsci/users/daftar', 'Users', 'daftar', '2013-12-26 00:29:03', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(6, 'Tabel User', 'localhost/starsci/users/tbluser', 'Users', 'tbluser', '2013-12-26 00:29:16', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(7, 'Input APEO FREE', 'localhost/starsci/apeofrees/add', 'Apeofrees', 'Add', '2013-12-26 00:28:44', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(8, 'View APEO FREE', 'localhost/starsci/apeofrees/index', 'Apeofrees', 'index', '2013-12-26 00:28:44', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(9, 'Input OEKOTEX', 'localhost/starsci/oekotexes/add', 'Oekotexes', 'Add', '2013-12-26 00:28:17', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5),
(10, 'View OEKOTEX', 'localhost/starsci/oekotexes/index', 'Oekotexes', 'index', '2013-12-26 00:28:17', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5),
(11, 'View IKEA', 'localhost/starsci/ikeas/index', 'Ikeas', 'Index', '2013-12-26 00:27:03', 'shadow3002', '2013-12-25 18:27:02', 'shadow3002', 6),
(12, 'Input IKEA', 'localhost/starsci/ikeas/add', 'Ikeas', 'Add', '2013-12-25 18:25:45', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6),
(13, 'Upload TDS', 'localhost/starsci/tdses/add', 'Tdses', 'add', '2014-02-20 00:54:47', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8),
(14, 'View TDS', 'localhost/starsci/tdses/index', 'Tdses', 'index', '2014-02-20 00:55:29', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8),
(15, 'Input COA', 'localhost/starsci/coamasters/add', 'coamasters', 'add', '2014-02-20 00:56:22', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7),
(16, 'View COA', 'localhost/starsci/coamasters/index', 'coamasters', 'index', '2014-02-20 00:57:19', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7),
(18, 'Add Access', 'localhost/starsci/groupmenuss/add', 'Group_menus', 'Add', '2014-03-12 19:10:21', 'shadow3002', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9),
(19, 'Add Production Schedule', 'localhost/starsci/productionschedules/add', 'ProductionSchedules', 'Add', '2014-07-24 22:32:37', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10),
(20, 'View Production Schedule', 'localhost/starsci/productionschedules/index', 'ProductionSchedules', 'Index', '2014-07-25 00:02:33', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10),
(21, 'Add Production Cost', 'localhost/starsci/productioncosts/add', 'ProductionCosts', 'Add', '2014-07-25 00:03:09', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12),
(22, 'View Production Cost', 'localhost/starsci/productioncosts/index', 'ProductionCosts', 'Index', '2014-07-25 00:03:32', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12),
(23, 'Add Formulation', 'localhost/starsci/formulations/add', 'Formulations', 'Add', '2014-07-25 00:07:31', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13),
(24, 'View Formulation', 'localhost/starsci/formulations/index', 'Formulations', 'Index', '2014-07-25 00:07:54', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13),
(25, 'Add Packaging', 'localhost/starsci/packagings/add', 'Packagings', 'Add', '2014-07-25 00:09:44', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 14),
(26, 'View Packaging', 'localhost/starsci/packagings/index', 'Packagings', 'Index', '2014-07-25 00:10:06', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 14),
(27, 'Add Product', 'localhost/starsci/products/add', 'Products', 'Add', '2014-07-25 00:11:53', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15),
(28, 'View Product', 'localhost/starsci/products/index', 'Products', 'Index', '2014-07-25 00:12:24', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15),
(29, 'Add Production Card', 'localhost/starsci/productioncards/add', 'ProductionCards', 'Add', '2014-07-25 00:13:03', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 16),
(31, 'Add Production Category', 'localhost/starsci/productioncategories/add', 'ProductionCategories', 'Add', '2014-07-25 00:14:14', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 17),
(32, 'View Production Category', 'localhost/starsci/productioncategories/index', 'ProductionCategories', 'Index', '2014-07-25 00:14:50', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 17),
(33, 'Add Production Report', 'localhost/starsci/productionreports/add', 'ProductionReports', 'Add', '2014-07-25 00:16:40', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 18),
(34, 'View Production Report', 'localhost/starsci/productionreports/index', 'ProductionReports', 'Index', '2014-07-25 00:17:12', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 18),
(35, 'Add Production Status', 'localhost/starsci/Productionstatuses/add', 'ProductionStatuses', 'Add', '2014-07-25 00:18:06', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 19),
(36, 'View Production Status', 'localhost/starsci/productionstatuses/index', 'ProductionStatuses', 'Index', '2014-07-25 00:18:38', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 19),
(37, 'Add Reactor', 'localhost/starsci/reactors/add', 'Reactors', 'Add', '2014-07-25 00:19:46', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20),
(38, 'View Reactor', 'localhost/starsci/reactors/index', 'Reactors', 'Index', '2014-07-25 00:20:11', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20),
(39, 'Add Shift', 'localhost/starsci/shifts/add', 'Shifts', 'Add', '2014-07-25 00:20:43', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 21),
(40, 'View Shift', 'localhost/starsci/shifts/index', 'Shifts', 'Index', '2014-07-25 00:21:03', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 21),
(41, 'Add Variable Cost', 'localhost/starsci/variablecosts/add', 'VariableCosts', 'Add', '2014-07-25 00:22:03', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 22),
(42, 'View Variable Cost', 'localhost/starsci/variablecosts/index', 'VariableCosts', 'Index', '2014-07-25 00:22:26', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 22),
(44, 'View Production Card', 'localhost/starsci/productioncards/index', 'ProductionCards', 'Index', '2014-08-07 21:20:19', 'aldwin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_categories`
--

CREATE TABLE IF NOT EXISTS `menu_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `modul_menu_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `menu_categories`
--

INSERT INTO `menu_categories` (`id`, `name`, `modul_menu_id`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(2, 'MSDS', 1, '2013-12-24 18:04:20', 'shadow3002', '0000-00-00 00:00:00', ''),
(3, 'User', 1, '2013-12-25 14:54:19', 'shadow3002', '0000-00-00 00:00:00', ''),
(4, 'APEO FREE', 1, '2013-12-25 18:17:17', 'shadow3002', '0000-00-00 00:00:00', ''),
(5, 'OEKOTEX', 1, '2013-12-25 18:17:33', 'shadow3002', '0000-00-00 00:00:00', ''),
(6, 'IKEA', 1, '2013-12-25 18:17:45', 'shadow3002', '0000-00-00 00:00:00', ''),
(7, 'COA', 1, '2014-02-20 00:53:15', 'shadow3002', '0000-00-00 00:00:00', ''),
(8, 'TDS', 1, '2014-02-20 00:53:28', 'shadow3002', '0000-00-00 00:00:00', ''),
(9, 'Menu', 1, '2014-03-12 18:53:33', 'shadow3002', '0000-00-00 00:00:00', ''),
(10, 'Production Schedule', 2, '2014-07-24 22:00:59', 'aldwin', '2014-07-24 22:02:52', 'aldwin'),
(12, 'Cost Production', 2, '2014-07-24 22:02:08', 'aldwin', '0000-00-00 00:00:00', ''),
(13, 'Formulation', 2, '2014-07-25 00:07:02', 'aldwin', '0000-00-00 00:00:00', ''),
(14, 'Packaging', 2, '2014-07-25 00:08:42', 'aldwin', '0000-00-00 00:00:00', ''),
(15, 'Product', 2, '2014-07-25 00:11:20', 'aldwin', '0000-00-00 00:00:00', ''),
(16, 'Production Card', 2, '2014-07-25 00:12:37', 'aldwin', '0000-00-00 00:00:00', ''),
(17, 'Production Category', 2, '2014-07-25 00:13:48', 'aldwin', '0000-00-00 00:00:00', ''),
(18, 'Production Report', 2, '2014-07-25 00:15:46', 'aldwin', '0000-00-00 00:00:00', ''),
(19, 'Production Status', 2, '2014-07-25 00:17:35', 'aldwin', '0000-00-00 00:00:00', ''),
(20, 'Reactor', 2, '2014-07-25 00:19:23', 'aldwin', '0000-00-00 00:00:00', ''),
(21, 'Shift', 2, '2014-07-25 00:20:22', 'aldwin', '0000-00-00 00:00:00', ''),
(22, 'Variable Cost', 2, '2014-07-25 00:21:28', 'aldwin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul_menus`
--

CREATE TABLE IF NOT EXISTS `modul_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `modul_menus`
--

INSERT INTO `modul_menus` (`id`, `name`, `create_date`, `create_by`, `modified_date`, `modified_by`) VALUES
(1, 'Utama', '2014-07-24 21:47:35', 'aldwin', '0000-00-00 00:00:00', ''),
(2, 'Produksi', '2014-07-24 21:52:12', 'aldwin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oekotexes`
--

CREATE TABLE IF NOT EXISTS `oekotexes` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `namafiledoc` varchar(20) NOT NULL,
  `oekotex_category_id` varchar(20) NOT NULL,
  `namafilepdf` varchar(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `oekotexes`
--

INSERT INTO `oekotexes` (`id`, `name`, `namafiledoc`, `oekotex_category_id`, `namafilepdf`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(1, 'madu', 'project1.doc', '1', 'adobe-acrobat-xi-esi', '2013-12-26 00:33:43', 'shadow3002', '2014-05-16 21:17:02', 'shadow3002'),
(2, 'duma', 'project1.doc', '1', 'CakePHPPanelKawalanA', '2014-02-22 21:52:39', 'shadow3002', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oekotex_categories`
--

CREATE TABLE IF NOT EXISTS `oekotex_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `oekotex_categories`
--

INSERT INTO `oekotex_categories` (`id`, `name`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(1, 'Tiga', '2013-12-25 17:42:40', 'shadow3002', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `packagings`
--

CREATE TABLE IF NOT EXISTS `packagings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pack_id` int(11) NOT NULL,
  `production_card_id` int(11) NOT NULL,
  `std` int(11) NOT NULL,
  `actual` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `packagings`
--

INSERT INTO `packagings` (`id`, `pack_id`, `production_card_id`, `std`, `actual`, `note`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 2, 5000, 4000, 'minus 1000', 'aldwin', '2014-06-25 21:49:30', 'aldwin', '2014-06-27 18:59:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `packs`
--

CREATE TABLE IF NOT EXISTS `packs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `packaging_code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `packs`
--

INSERT INTO `packs` (`id`, `packaging_code`, `name`, `create_date`, `create_by`, `modified_date`, `modified_by`) VALUES
(1, 'Packaging -  1', 'Drum 150 L', '0000-00-00 00:00:00', '', '2014-06-27 18:54:02', 'aldwin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `printcoas`
--

CREATE TABLE IF NOT EXISTS `printcoas` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nocoa` varchar(22) DEFAULT NULL,
  `namaproduk` varchar(25) DEFAULT NULL,
  `lotno` varchar(12) DEFAULT NULL,
  `tanggaltes` date NOT NULL,
  `appunit` varchar(10) NOT NULL,
  `appreq` varchar(35) NOT NULL,
  `appresults` varchar(7) NOT NULL,
  `appket` varchar(160) NOT NULL,
  `produkunit` varchar(10) NOT NULL,
  `produkreq` varchar(35) NOT NULL,
  `produkresults` varchar(7) NOT NULL,
  `produkket` varchar(160) NOT NULL,
  `refracunit` varchar(10) NOT NULL,
  `refracreq` varchar(35) NOT NULL,
  `refracresults` varchar(7) NOT NULL,
  `refracket` varchar(160) NOT NULL,
  `phunit` varchar(10) NOT NULL,
  `phreq` varchar(35) NOT NULL,
  `phresults` varchar(7) NOT NULL,
  `phket` varchar(160) NOT NULL,
  `tscunit` varchar(10) NOT NULL,
  `tscreq` varchar(35) NOT NULL,
  `tscresults` varchar(7) NOT NULL,
  `tscket` varchar(160) NOT NULL,
  `freeunit` varchar(10) NOT NULL,
  `freereq` varchar(35) NOT NULL,
  `freeresults` varchar(7) NOT NULL,
  `freeket` varchar(160) NOT NULL,
  `triziunit` varchar(10) NOT NULL,
  `trizireq` varchar(35) NOT NULL,
  `triziresults` varchar(7) NOT NULL,
  `triziket` varchar(160) NOT NULL,
  `viscounit` varchar(10) NOT NULL,
  `viscoreq` varchar(35) NOT NULL,
  `viscoresults` varchar(7) NOT NULL,
  `viscoket` varchar(160) NOT NULL,
  `solunit` varchar(10) NOT NULL,
  `solreq` varchar(35) NOT NULL,
  `solresults` varchar(7) NOT NULL,
  `solket` varchar(160) NOT NULL,
  `densiunit` varchar(10) NOT NULL,
  `densireq` varchar(35) NOT NULL,
  `densiresults` varchar(7) NOT NULL,
  `densiket` varchar(160) NOT NULL,
  `namatmbh1` varchar(35) NOT NULL,
  `methodtmbh1` varchar(30) NOT NULL,
  `tmbh1unit` varchar(10) NOT NULL,
  `tmbh1req` varchar(35) NOT NULL,
  `tmbh1results` varchar(7) NOT NULL,
  `tmbh1ket` varchar(10) NOT NULL,
  `namatmbh2` varchar(35) NOT NULL,
  `methodtmbh2` varchar(30) NOT NULL,
  `tmbh2unit` varchar(10) NOT NULL,
  `tmbh2req` varchar(35) NOT NULL,
  `tmbh2results` varchar(7) NOT NULL,
  `tmbh2ket` varchar(160) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL,
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nocoa` (`nocoa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `printcoas`
--

INSERT INTO `printcoas` (`id`, `nocoa`, `namaproduk`, `lotno`, `tanggaltes`, `appunit`, `appreq`, `appresults`, `appket`, `produkunit`, `produkreq`, `produkresults`, `produkket`, `refracunit`, `refracreq`, `refracresults`, `refracket`, `phunit`, `phreq`, `phresults`, `phket`, `tscunit`, `tscreq`, `tscresults`, `tscket`, `freeunit`, `freereq`, `freeresults`, `freeket`, `triziunit`, `trizireq`, `triziresults`, `triziket`, `viscounit`, `viscoreq`, `viscoresults`, `viscoket`, `solunit`, `solreq`, `solresults`, `solket`, `densiunit`, `densireq`, `densiresults`, `densiket`, `namatmbh1`, `methodtmbh1`, `tmbh1unit`, `tmbh1req`, `tmbh1results`, `tmbh1ket`, `namatmbh2`, `methodtmbh2`, `tmbh2unit`, `tmbh2req`, `tmbh2results`, `tmbh2ket`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(2, 'COA/404/SSCI/XI/12', 'STARES', '114024A3LI', '2012-11-09', '-', 'CLEAR LIQUID', 'OK', '-', '%', 'YELLOW LIQUID', 'OK', '-', '%', '21-23', '22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '2014-06-24 20:50:10', 'aldwin'),
(3, 'tiga', 'Percobaan', 'tiga', '2014-03-12', 'alskdm', 'laksmdlm', 'aslkdml', 'sldkmaslm', 'asldkm', 'asldkmkl', 'asldkml', 'lakmsdl', 'lkasmdl', 'lamsdlkm', 'laskmdl', 'lamsdlk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'lkamsdlm', 'laksmdlsakm', 'lkmakls', 'lkmlaksdm', 'lklmaslkdm', 'lkmasldkm', 'lkamsdk', 'laksmdlk', '', '', '', '', 'lkasmdlm', 'laksdmlkm', 'aslkdmlk', 'lkmasldkm', 'lkmasdl', 'lkamsdlkm', '', '', '', '', '', '', '2014-03-12 20:40:47', 'shadow3002', '2014-07-04 21:26:12', 'aldwin'),
(4, 'asmdl', 'lakmdkl', 'aslkdmkl', '2014-05-16', 'aksmdl', 'asldkm', 'lkamdlm', 'laskdmsalk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-05-16 19:51:30', 'shadow3002', '0000-00-00 00:00:00', ''),
(5, 'kasmdl', 'lasmdlk', 'mlamsdlkm', '2014-05-16', 'laksdm', 'laskdm', 'laskmdl', 'lasdkmkl', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-05-16 20:50:06', 'shadow3002', '0000-00-00 00:00:00', ''),
(6, 'alskdm', 'laskdm', 'lakmsdl', '2014-05-16', 'askldm', 'lasdml', 'lasdkml', 'laksdml', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-05-16 20:53:48', 'shadow3002', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `production_cards`
--

CREATE TABLE IF NOT EXISTS `production_cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `standard_batch` int(11) NOT NULL,
  `lot_no` varchar(50) NOT NULL,
  `production_status_id` int(11) NOT NULL,
  `production_time` int(11) NOT NULL,
  `nitrogen` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `reactor_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `production_categories`
--

CREATE TABLE IF NOT EXISTS `production_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `production_categories`
--

INSERT INTO `production_categories` (`id`, `name`, `note`, `create_date`, `create_by`, `modified_date`, `modified_by`) VALUES
(1, 'Finish Good', 'ditunda untuk sementara', '2014-06-24 22:13:18', 'aldwin', '2014-06-24 22:14:47', 'aldwin'),
(2, 'Tooling', 'tooling', '2014-07-03 21:58:27', 'aldwin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `production_costs`
--

CREATE TABLE IF NOT EXISTS `production_costs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `month` varchar(15) NOT NULL,
  `year` varchar(10) NOT NULL,
  `note` varchar(255) NOT NULL,
  `variable_cost_id` int(11) DEFAULT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `production_costs`
--

INSERT INTO `production_costs` (`id`, `amount`, `month`, `year`, `note`, `variable_cost_id`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 50000, 'January', '2000', 'variable cost pertama', 1, 'aldwin', '2014-06-24 23:05:07', 'aldwin', '2014-06-24 23:10:17'),
(2, 1000, 'August', '2014', 'satu', 1, 'aldwin', '2014-08-07 19:44:38', '', '0000-00-00 00:00:00'),
(3, 2000, 'August', '2014', 'dua', 2, 'aldwin', '2014-08-07 19:44:38', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `production_rejects`
--

CREATE TABLE IF NOT EXISTS `production_rejects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `production_report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qc_passed_qty` int(11) NOT NULL,
  `qc_rejected_qty` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `production_rejects`
--

INSERT INTO `production_rejects` (`id`, `production_report_id`, `product_id`, `qc_passed_qty`, `qc_rejected_qty`, `create_date`, `create_by`, `modified_date`, `modified_by`) VALUES
(2, 2, 4, 1900, 100, '2014-07-04 22:17:11', 'aldwin', '0000-00-00 00:00:00', ''),
(3, 3, 4, 2000, 100, '2014-07-04 22:25:53', 'aldwin', '2014-07-04 23:20:56', 'aldwin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `production_reports`
--

CREATE TABLE IF NOT EXISTS `production_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_kp` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `lot_number` varchar(20) NOT NULL,
  `standart_quantity` int(11) NOT NULL,
  `actual_quantity` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `production_category_id` int(11) NOT NULL,
  `qc_passed_qty` int(11) NOT NULL,
  `qc_rejected_qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `production_reports`
--

INSERT INTO `production_reports` (`id`, `no_kp`, `product_id`, `lot_number`, `standart_quantity`, `actual_quantity`, `note`, `create_date`, `create_by`, `modified_date`, `modified_by`, `production_category_id`, `qc_passed_qty`, `qc_rejected_qty`) VALUES
(2, 'KP-01', 4, '21/21/12', 3000, 2000, 'tidak lewat 100 ton', '2014-07-04 22:17:11', 'aldwin', '0000-00-00 00:00:00', '', 1, 1900, 100),
(3, 'KP-02', 4, '21/21/12', 4000, 3000, 'tidak lewat 100 ton', '2014-07-04 22:25:53', 'aldwin', '2014-07-04 23:20:56', 'aldwin', 2, 2000, 100),
(4, 'KP-03', 4, '21/21/12', 4000, 3000, 'tidak lewat 100 ton', '2014-06-05 21:35:17', 'aldwin', '0000-00-00 00:00:00', '', 1, 2900, 100),
(5, 'KP-03', 4, '21/21/12', 4000, 3000, 'tidak lewat 100 ton', '2014-07-05 21:37:02', 'aldwin', '0000-00-00 00:00:00', '', 1, 2900, 100),
(6, 'KP-04', 4, '21/21/12', 5000, 4000, 'tidak lewat 1000 ton', '2014-07-05 21:37:36', 'aldwin', '0000-00-00 00:00:00', '', 2, 3000, 1000),
(7, 'KP-01', 4, '21/21/12', 4000, 3000, 'tidak ada yang tidak lewat', '2014-08-01 23:10:18', 'aldwin', '0000-00-00 00:00:00', '', 1, 3000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `production_schedules`
--

CREATE TABLE IF NOT EXISTS `production_schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shift_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `week` varchar(20) NOT NULL,
  `reactor_id` int(11) NOT NULL,
  `lot_no` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `production_schedules`
--

INSERT INTO `production_schedules` (`id`, `shift_id`, `product_id`, `week`, `reactor_id`, `lot_no`, `note`, `create_date`, `create_by`, `modified_date`, `modified_by`) VALUES
(1, 2, 4, '2', 1, '12/32/23', 'test produksi pertama', '2014-06-25 00:31:47', 'aldwin', '2014-06-25 00:35:16', 'aldwin'),
(2, 2, 4, '2', 2, '123123', 'dua', '2014-06-26 22:40:04', 'aldwin', '2014-06-27 00:52:50', 'aldwin'),
(3, 2, 4, '1', 1, '1213131', 'satu', '2014-06-26 22:40:18', 'aldwin', '0000-00-00 00:00:00', ''),
(4, 2, 4, '3', 1, '12124124', 'tiga', '2014-06-26 22:40:33', 'aldwin', '0000-00-00 00:00:00', ''),
(5, 2, 4, '1', 1, '123123', 'test produksi pertama', '2014-07-02 22:23:24', 'aldwin', '0000-00-00 00:00:00', ''),
(6, 3, 4, '1', 1, '12/32/23', 'dua', '2014-07-02 22:23:48', 'aldwin', '0000-00-00 00:00:00', ''),
(7, 3, 4, '1', 2, '12/32/23', 'testshift', '2014-07-03 00:13:51', 'aldwin', '0000-00-00 00:00:00', ''),
(8, 2, 4, '1', 1, '123321', 'satu', '2014-08-09 20:02:57', 'aldwin', '0000-00-00 00:00:00', ''),
(9, 2, 4, '1', 2, '321321', 'dua', '2014-08-09 20:03:15', 'aldwin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `production_statuses`
--

CREATE TABLE IF NOT EXISTS `production_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `production_statuses`
--

INSERT INTO `production_statuses` (`id`, `name`, `note`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'Remake', 'Pembuatan Ulang', 'aldwin', '2014-06-24 21:44:04', 'aldwin', '2014-06-24 21:45:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(30) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_code`, `name`, `create_date`, `create_by`, `modified_date`, `modified_by`) VALUES
(4, 'STAR-01', 'STAR-RES', '2014-06-24 21:32:25', 'aldwin', '2014-06-24 21:34:53', 'aldwin'),
(5, 'STAR-02', 'STARRES MT', '2014-08-16 19:47:34', 'aldwin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reactors`
--

CREATE TABLE IF NOT EXISTS `reactors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `reactors`
--

INSERT INTO `reactors` (`id`, `name`, `note`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'R-01', 'Reactor Pertama', 'aldwin', '2014-06-24 21:40:48', 'aldwin', '2014-06-24 21:41:12'),
(2, 'R-02', 'Reactor Kedua', 'aldwin', '2014-06-26 23:51:10', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shifts`
--

CREATE TABLE IF NOT EXISTS `shifts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `shifts`
--

INSERT INTO `shifts` (`id`, `code`, `note`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(2, 'Shift 1', '08.00 - 14.00', 'aldwin', '2014-06-25 00:02:56', 'aldwin', '2014-06-25 00:03:21'),
(3, 'Shift 2', '15.00 - 20.00', 'aldwin', '2014-06-26 23:50:45', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdownloads`
--

CREATE TABLE IF NOT EXISTS `tbdownloads` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `namaproduk` varchar(20) NOT NULL,
  `namafiledoc` varchar(100) NOT NULL,
  `namafilepdf` varchar(100) NOT NULL,
  `tbdownload_category_id` varchar(20) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `namaproduk` (`namaproduk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data untuk tabel `tbdownloads`
--

INSERT INTO `tbdownloads` (`id`, `namaproduk`, `namafiledoc`, `namafilepdf`, `tbdownload_category_id`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(42, 'STARLEV CO-30', 'MSDS STARLEV CO - 30', 'MSDS STARLEV CO - 30', 'Dyeing', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(5, 'STARSOFT DA SOLID', 'MSDS STARSOFT DA SOL', 'MSDS STARSOFT DA SOL', 'Finishing', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(3, 'STARSOFT C1 AS', 'MSDS STARSOFT C1-AS.', 'MSDS STARSOFT C1-AS.', 'Finishing', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(2, 'STARDISP NFD', 'MSDS STARDISP NFD.do', 'MSDS STARDISP NFD.pd', 'Pretreatment', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(1, 'STAR MOBA01', 'MSDS ANTIFOAM NS.doc', 'MSDS ANTIFOAM NS.pdf', 'Pnetreatmen', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(43, 'STAR TT-20', 'MSDS STAR TT-20.doc', 'MSDS STAR TT-20.pdf', 'Lain-Lain', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(44, 'STARSOFT ELS-U', 'MSDS STARSOFT ELS-U.', 'MSDS STARSOFT ELS-U.', 'Finishing', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(45, 'STARSOFT PE-EC NEW', 'MSDS STARSOFT PE-EC ', 'MSDS STARSOFT PE-EC ', 'Finishing', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(46, 'STAR INT - PK', 'MSDS STAR INT-PK.doc', 'MSDS STAR INT-PK.pdf', 'Dyeing', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(47, 'STARSCOUR LPC', 'MSDS STARSCOUR LPC.d', 'MSDS STARSCOUR LPC.p', 'Pretreatment', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(78, 'asmdklm', 'project1.doc', 'CakePHPPanelKawalanACL-AzrilNazli.pdf', 'amskdmla', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(79, 'satusatu', 'project1.doc', 'CakePHPPanelKawalanACL-AzrilNazli.pdf', 'duadua', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0'),
(85, 'adsklmlk', 'project1.doc', 'adobe-acrobat-xi-esign-pdf-file-tutorial-ue.pdf', 'lakmsdl', '2013-12-16 00:00:00', 'admin', '0000-00-00 00:00:00', ''),
(84, 'admin', 'project1.doc', 'CakePHPPanelKawalanACL-AzrilNazli.pdf', 'admin', '2013-11-30 00:00:00', 'shadow3002', '2013-11-30 00:00:00', 'admin'),
(87, 'Susu', 'Curriculum Vitae.docx', 'adobe-acrobat-xi-esign-pdf-file-tutorial-ue.pdf', '1', '2013-12-25 21:47:04', 'shadow3002', '2014-05-16 21:16:17', 'shadow3002'),
(88, 'sas', 'project1.doc', 'CakePHPPanelKawalanACL-AzrilNazli.pdf', '1', '2014-02-20 00:33:28', 'shadow3002', '0000-00-00 00:00:00', ''),
(89, 'a', 'project1.doc', 'CakePHPPanelKawalanACL-AzrilNazli.pdf', '1', '2014-02-20 00:33:55', 'shadow3002', '0000-00-00 00:00:00', ''),
(90, 'b', 'b', 'c', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(91, 'c', 'c', 'c', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(92, 'd', 'd', 'd', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(93, 'e', 'e', 'e', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(94, 'f', 'f', 'f', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(95, 'g', 'g', 'g', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(96, 'h', 'h', 'h', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(97, 'i', 'i', 'i', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(98, 'j', 'j', 'j', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(99, 'k', 'k', 'k', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', ''),
(100, 'l', 'l', 'l', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdownload_categories`
--

CREATE TABLE IF NOT EXISTS `tbdownload_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbdownload_categories`
--

INSERT INTO `tbdownload_categories` (`id`, `name`, `create_date`, `create_by`, `update_date`, `update_by`) VALUES
(1, 'Flash', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdses`
--

CREATE TABLE IF NOT EXISTS `tdses` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `namafiledoc` varchar(255) NOT NULL,
  `namafilepdf` varchar(255) NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tds_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data untuk tabel `tdses`
--

INSERT INTO `tdses` (`id`, `name`, `namafiledoc`, `namafilepdf`, `create_by`, `create_date`, `update_by`, `update_date`, `tds_category_id`) VALUES
(8, 'STARWHITE RSW', 'TDS STARWHITE RSW.DO', 'TDS STARWHITE RSW.pd', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(7, 'STARWHITE NFW LIQ', 'TDS STARWHITE NFW LI', 'TDS STARWHITE NFW LI', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(6, 'STARWHITE BAM LIQ', 'TDS STARWHITE BAM LI', 'TDS STARWHITE BAM LI', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(9, 'STARDISP NFD', 'TDS STARDISP NFD.doc', 'TDS STARDISP NFD.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(10, 'STARLEV CO', 'TDS STARLEV CO.doc', 'TDS STARLEV CO.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(11, 'STARSOFT DA SOLID', 'TDS STARSOFT DA SOLI', 'TDS STARSOFT DA SOLI', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(12, 'STARTEX CS', 'TDS STARTEX CS.doc', 'TDS STARTEX CS.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(13, 'STARFIX LFF', 'TDS STARFIX LFF.doc', 'TDS STARFIX LFF.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(14, 'STARMERC - 01', 'TDS STARMERC-01.doc', 'TDS STARMERC-01.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(15, 'STARMERC - 02', 'TDS STARMERC-02.doc', 'TDS STARMERC-02.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(16, 'STARMERC BC - 03', 'TDS STARMERC BC-03.d', 'TDS STARMERC BC-03.p', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(17, 'STARRES ULF', 'TDS STARRES ULF.doc', 'TDS STARRES ULF.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(18, 'STARES ULF-C', 'TDS STARRES ULF-C.do', 'TDS STARRES ULF-C.pd', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(19, 'STARSOFT PE-EC NEW', 'TDS STARSOFT PE - EC', 'TDS STARSOFT PE - EC', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(26, 'STARFIX NFL', 'TDS STARFIX NFL.DOC', 'TDS STARFIX NFL.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(21, 'STARSOFT BC-03', 'TDS STARMERC BC-03.d', 'TDS STARMERC BC-03.p', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(22, 'STARSOFT C-13 LIQUID', 'TDS STARSOFT C13 LIQ', 'TDS STARSOFT C13 LIQ', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(23, 'STARSIL BAY-01', 'TDS STARSIL BAY-01.d', 'TDS STARSIL BAY-01.p', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(24, 'STARSILC MS', 'TDS STARSILC MS.doc', 'TDS STARSILC MS.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(25, 'STARSOFT P', 'TDS STARSOFT P.DOC', 'TDS STARSOFT P.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(27, 'STARFIX WS LIQ', 'TDS STARFIX WS LIQ.d', 'TDS STARFIX WS LIQ.p', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(28, 'STARRES MLF / MLF NE', 'TDS STARRES MLF-MLF ', 'TDS STARRES MLF-MLF ', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(29, 'STARRES MT', 'TDS STARRES MT.doc', 'TDS STARRES MT.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(30, 'STARPROOF NY', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(31, 'STARCAT MO LIQ', 'TDS STARCAT MO LIQ.d', 'TDS STARCAT MO LIQ.p', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(32, 'STARTEX AL', 'TDS STARTEX AL.doc', 'TDS STARTEX AL.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(35, 'STARTEX RM', 'TDS STARTEX RM.doc', 'TDS STARTEX RM.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(34, 'STARTEX PC', 'TDS STARTEX PC.DOC', 'TDS STARTEX PC.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(36, 'STARSTAB OX-25', 'TDS STARSTAB OX-25.d', 'TDS STARSTAB OX-25.p', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(37, 'STARSOFT WP', 'TDS STARSOFT WP.doc', 'TDS STARSOFT WP.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(38, 'STARSOFT NI LIQ', 'TDS STARSOFT NI LIQ.', 'TDS STARSOFT NI LIQ.', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(39, 'STARCAT ZH', 'TDS STARCAT ZH.doc', 'TDS STARCAT ZH.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(40, 'STARRES NF', 'TDS STARRES NF.DOC', 'TDS STARRES NF.pdf', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(41, 'STARLEV CO-30', 'TDS STARLEV CO - 30.', 'TDS STARLEV CO - 30.', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(42, 'STARSOFT ELS-U', 'TDS STARSOFT ELS-U.d', 'TDS STARSOFT ELS-U.p', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(43, 'STARPRINT WPP', 'TDS STARPRINT WPP (O', 'TDS STARPRINT WPP _O', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(44, 'STARSPAN WRP', 'TDS STARSPAN WRP (Ok', 'TDS STARSPAN WRP _Ok', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(45, 'STARSPEC GRM NEW', 'TDS STARSPEC GRM New', 'TDS STARSPEC GRM New', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(46, 'STARSCOUR LPC', 'TDS STARSCOUR LPC.do', 'TDS STARSCOUR LPC.pd', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(47, 'STARTEX GH-AR', 'TDS STARTEX GH-AR.do', 'TDS STARTEX GH-AR.pd', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0),
(50, 'Satu', 'LA P web pert 2.docx', 'CakePHPPanelKawalanACL-AzrilNazli.pdf', 'shadow3002', '2013-12-25 16:39:11', 'shadow3002', '2014-05-16 21:17:27', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tds_categories`
--

CREATE TABLE IF NOT EXISTS `tds_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tds_categories`
--

INSERT INTO `tds_categories` (`id`, `name`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
(2, 'Satu', 'shadow3002', '2013-12-25 16:02:09', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(15) NOT NULL,
  `password` char(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `group_user_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_by` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `id`, `first_name`, `last_name`, `email`, `phone`, `group_user_id`, `create_date`, `create_by`, `update_date`, `update_by`, `alamat`) VALUES
('test', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 1, '', '', '', '', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', ''),
('CS', 'd033e22ae348aeb5660fc2140aec35850c4da997', 2, '', '', '', '', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', ''),
('Sales', 'd033e22ae348aeb5660fc2140aec35850c4da997', 3, '', '', '', '', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', ''),
('Laboratorium', 'd033e22ae348aeb5660fc2140aec35850c4da997', 4, '', '', '', '', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', ''),
('Gudang', 'd033e22ae348aeb5660fc2140aec35850c4da997', 5, '', '', '', '', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', ''),
('Trial', '069fd3a44db682e9a4ea4bf495c0ffbee58c8431', 6, '', '', '', '', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', ''),
('qwerty', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 8, '', '', '', '', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', ''),
('admin', 'f7f9efa1dc899956b92fa618431bf95c2f0594f7', 9, '', '', '', '', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', ''),
('didi.wahyu', '3afc4a97ff036dea7ce71c49dd0b2973d8632de4', 10, '', '', '', '', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', ''),
('trying', 'f7f9efa1dc899956b92fa618431bf95c2f0594f7', 23, 'jelly', 'thomas', '', '', 5, '2014-05-01 21:51:59', 'shadow3002', '0000-00-00 00:00:00', '', ''),
('shadow3002', '0064b0c9f557e8142e6f92ff613a9c368bf188ac', 13, 'Jelly', 'Thomas', '', '', 3, '2013-12-25 21:10:15', '', '2014-05-16 21:16:36', 'shadow3002', ''),
('shadow', 'f7f9efa1dc899956b92fa618431bf95c2f0594f7', 20, 'jelly', 'thomas', '', '', 4, '2014-01-08 20:39:56', 'shadow3002', '0000-00-00 00:00:00', '', ''),
('aldwin', 'f7f9efa1dc899956b92fa618431bf95c2f0594f7', 21, 'Aldwin', 'Handriana', '', '', 3, '2014-03-21 15:05:38', 'shadow3002', '0000-00-00 00:00:00', '', ''),
('sistem', 'f7f9efa1dc899956b92fa618431bf95c2f0594f7', 24, 'jelly', 'thomas', '', '', 7, '2014-05-02 21:50:43', 'shadow3002', '0000-00-00 00:00:00', '', ''),
('lkmasldm', 'f7f9efa1dc899956b92fa618431bf95c2f0594f7', 25, 'adslamkl', 'lkdsmaklsd', '', '', 3, '2014-05-02 22:29:58', 'shadow3002', '0000-00-00 00:00:00', '', ''),
('testing', 'f7f9efa1dc899956b92fa618431bf95c2f0594f7', 26, 'amlksdm', 'lkamslkdm', 'satu@yahoo.com', 'testing', 3, '2014-05-02 22:32:42', 'shadow3002', '0000-00-00 00:00:00', '', 'lkamskdl'),
('erwin', 'f7f9efa1dc899956b92fa618431bf95c2f0594f7', 27, 'asd', 'dsa', 'satu@yahoo.com', '098098908', 3, '2014-05-17 22:55:06', 'aldwin', '2014-05-17 22:56:34', 'aldwin', 'jalan jalan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `variable_costs`
--

CREATE TABLE IF NOT EXISTS `variable_costs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `variable_cost_category_id` int(11) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `variable_costs`
--

INSERT INTO `variable_costs` (`id`, `name`, `note`, `variable_cost_category_id`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'Var-01', 'Variable Cost Pertama', 5, 'aldwin', '2014-07-22 00:35:07', '', '0000-00-00 00:00:00'),
(2, 'Var-02', 'Variable Cost Kedua', 5, 'aldwin', '2014-07-22 00:35:20', '', '0000-00-00 00:00:00'),
(3, 'Fixed - 01', 'Fixed Cost Pertama', 6, 'aldwin', '2014-07-22 00:35:39', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `variable_cost_categories`
--

CREATE TABLE IF NOT EXISTS `variable_cost_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `variable_cost_categories`
--

INSERT INTO `variable_cost_categories` (`id`, `name`, `note`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(5, 'Variable Cost', 'Pembayaran Bulanan', '', '0000-00-00 00:00:00', 'aldwin', '2014-07-22 00:11:47'),
(6, 'Fixed Cost', 'Pembayaran Bulanan', 'aldwin', '2014-07-22 00:06:34', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
