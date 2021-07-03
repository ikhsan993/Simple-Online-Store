-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2011 at 11:15 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(3) NOT NULL,
  `username` varchar(9) NOT NULL,
  `password` varchar(9) NOT NULL,
  `nama_admin` varchar(27) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `nama_admin`) VALUES
(993, 'admin', 'admin', 'Admin Keren');

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE IF NOT EXISTS `bayar` (
  `idbayar` int(7) NOT NULL AUTO_INCREMENT,
  `idorder` int(9) NOT NULL,
  `idmember` int(7) NOT NULL,
  `norek` varchar(25) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jumlah` int(9) NOT NULL,
  `bb` varchar(100) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idbayar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bayar`
--


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `idcart` int(11) NOT NULL AUTO_INCREMENT,
  `idproduk` int(7) NOT NULL,
  `idmember` int(7) NOT NULL,
  `jumlah` int(7) NOT NULL,
  `tglcart` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idcart`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `detailpesanan`
--

CREATE TABLE IF NOT EXISTS `detailpesanan` (
  `idorder` int(7) NOT NULL,
  `idproduk` int(7) NOT NULL,
  `idmember` int(7) NOT NULL,
  `jumlahbeli` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailpesanan`
--

INSERT INTO `detailpesanan` (`idorder`, `idproduk`, `idmember`, `jumlahbeli`) VALUES
(1, 12, 1, 2),
(1, 13, 1, 1),
(2, 14, 1, 2),
(2, 12, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `idmember` int(7) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `pp` varchar(100) NOT NULL,
  PRIMARY KEY (`idmember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `username`, `password`, `nama`, `email`, `alamat`, `nohp`, `pp`) VALUES
(1, 'amirul', 'ikhsan', 'Amirul Ikhsan', 'amirul@ikhsan.net', 'Buayan kecamatan batang anai', '081565656565', 'pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `idjual` int(7) NOT NULL AUTO_INCREMENT,
  `idmember` int(7) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jumlah` int(9) NOT NULL,
  PRIMARY KEY (`idjual`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idjual`, `idmember`, `tgl`, `jumlah`) VALUES
(12, 1, '2017-05-03 08:27:47', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `idorder` int(7) NOT NULL AUTO_INCREMENT,
  `idmember` int(7) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `torder` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`idorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idorder`, `idmember`, `alamat`, `total`, `torder`, `status`) VALUES
(1, 1, 'Buayan kecamatan batang anai ', 300000, '2017-05-03 07:03:17', 2),
(2, 1, 'Buayan kecamatan batang anai ', 262000, '2011-05-16 22:02:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(7) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `harga` int(7) NOT NULL,
  `hargapromo` int(7) NOT NULL DEFAULT '0',
  `stok` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `idadmin` int(3) NOT NULL,
  `tinput` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idproduk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `nama`, `foto`, `harga`, `hargapromo`, `stok`, `keterangan`, `idadmin`, `tinput`) VALUES
(6, 'molaska', 'IMG_20170421_112313.jpg', 140000, 0, 12, 'Baju molaska warna abu-abu lengan panjang ', 993, '2017-05-02 14:07:38'),
(7, 'winody', 'IMG_20170421_112321.jpg', 100000, 0, 9, 'baju winody lengan panjang warna krem', 993, '2017-05-02 14:09:39'),
(8, 'lindy', 'IMG_20170421_112337.jpg', 120000, 0, 7, 'baju lindy lengan panjang dasar tebal warna abu-abu garis cocok untuk daerah dingin', 993, '2017-05-02 14:11:57'),
(9, 'oniva', 'IMG_20170421_112350.jpg', 90000, 0, 7, 'oniva toska tampilan trendi cocok untuk wanita remaja masa kini', 993, '2017-05-02 14:14:44'),
(10, 'miss e', 'IMG_20170421_112403.jpg', 140000, 0, 0, 'miss e krem 2 kantong dengan kancing yang menarik', 993, '2017-05-02 14:22:54'),
(11, 'gaiya', 'IMG_20170421_112421.jpg', 120000, 105000, 5, 'gaiya hitam lengan panjang bintik putih yang menawan', 993, '2017-05-02 14:24:49'),
(12, 'assyah', 'IMG_20170421_112507.jpg', 95000, 80000, 3, 'assyah motif pita kupu-kupu cantik', 993, '2017-05-02 14:26:21'),
(13, 'molaska', 'IMG_20170421_112526.jpg', 140000, 0, 5, 'molaska merah jreng corak warna berani', 993, '2017-05-02 14:27:39'),
(14, 'angel', 'IMG_20170421_112620.jpg', 100000, 85000, 7, 'angel motif garis anggun menawan ', 993, '2017-05-02 14:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `profinsi`
--

CREATE TABLE IF NOT EXISTS `profinsi` (
  `idprof` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `biaya` int(11) NOT NULL,
  PRIMARY KEY (`idprof`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `profinsi`
--

INSERT INTO `profinsi` (`idprof`, `nama`, `biaya`) VALUES
(1, 'Sumatera Barat', 10000),
(2, 'Riau', 12000),
(3, 'Sumatera Selatan', 12000),
(4, 'Jawa Barat', 15000),
(5, 'DKI Jakarta', 15000),
(6, 'Sulawesi Utara', 30000),
(7, 'Kalimantan Barat', 25000),
(8, 'Lombok', 30000),
(9, 'Sulawesi Selatan', 25000),
(10, 'Papua', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `idpromo` int(5) NOT NULL AUTO_INCREMENT,
  `idproduk` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(7) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `hargapromo` int(7) NOT NULL,
  `tinput` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idpromo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`idpromo`, `idproduk`, `nama`, `harga`, `foto`, `hargapromo`, `tinput`) VALUES
(2, 12, 'assyah', 95000, 'IMG_20170421_112507.jpg', 80000, '2017-05-02 14:31:08'),
(3, 11, 'gaiya', 120000, 'IMG_20170421_112421.jpg', 105000, '2017-05-02 14:31:24'),
(4, 14, 'angel', 100000, 'IMG_20170421_112620.jpg', 85000, '2017-05-02 14:31:38');
