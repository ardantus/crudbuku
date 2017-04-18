-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 09:47 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crudbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` tinyint(3) NOT NULL AUTO_INCREMENT,
  `nama_suplier` varchar(20) NOT NULL,
  `nama_penerbit` varchar(20) NOT NULL,
  `nama_kategori` varchar(10) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_suplier`, `nama_penerbit`, `nama_kategori`, `judul_buku`) VALUES
(1, 'Mukidi', 'Gramedia', 'Agama', 'Dakwah Kilat'),
(2, 'Mukidi', 'Gramedia', 'Agama', 'Durhaka sama Siapa');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` tinyint(3) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Agama'),
(2, 'Biologi'),
(3, 'Fisika'),
(4, 'Matematika'),
(5, 'PPKN');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

DROP TABLE IF EXISTS `penerbit`;
CREATE TABLE IF NOT EXISTS `penerbit` (
  `id_penerbit` tinyint(3) NOT NULL AUTO_INCREMENT,
  `nama_suplier` varchar(20) NOT NULL,
  `nama_penerbit` varchar(15) NOT NULL,
  `alamat_penerbit` varchar(40) NOT NULL,
  `telp_penerbit` varchar(15) NOT NULL,
  PRIMARY KEY (`id_penerbit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_suplier`, `nama_penerbit`, `alamat_penerbit`, `telp_penerbit`) VALUES
(1, 'mukidi', 'Gramedia', 'Jl.Raya1', '0274666'),
(2, 'mukidi', 'Toga Mas', 'Jl.Raya1', '0274666'),
(3, 'mukidi', 'Tiga Serangkai', 'Jl.Raya1', '0274666'),
(4, 'mukidi', 'Andi Offset', 'Jl.Raya1', '0274666'),
(5, 'mukidi', 'Erlangga', 'Jl.Raya1', '0274666');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

DROP TABLE IF EXISTS `suplier`;
CREATE TABLE IF NOT EXISTS `suplier` (
  `id_suplier` tinyint(3) NOT NULL AUTO_INCREMENT,
  `nama_suplier` varchar(15) NOT NULL,
  `alamat_suplier` varchar(40) NOT NULL,
  `telp_suplier` varchar(15) NOT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `alamat_suplier`, `telp_suplier`) VALUES
(1, 'Mukidi', 'Jl.raya Macet', '02749383'),
(2, 'Paijo', 'Jl.Gang Sempit', '0274999');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
