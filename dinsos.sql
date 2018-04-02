-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 10:26 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dinsos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `no` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `no_regis` varchar(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(100) NOT NULL,
  `tinggi` varchar(100) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `rt` int(10) NOT NULL,
  `rw` int(10) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kode` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pend` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tahun_lulus` int(10) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `gaji` varchar(100) NOT NULL,
  `exp` date NOT NULL,
  PRIMARY KEY (`no_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_regis`, `no_ktp`, `nama`, `tempat`, `tanggal_lahir`, `jk`, `tinggi`, `berat`, `kota`, `kecamatan`, `kelurahan`, `rt`, `rw`, `telp`, `email`, `kode`, `status`, `agama`, `pend`, `jurusan`, `tahun_lulus`, `bahasa`, `jabatan`, `pt`, `lokasi`, `gaji`, `exp`) VALUES
('1209381209381029', '0928103928019381', 'ASDLAKSJD', 'PURBALINGGA', '1995-06-13', 'LAKI-LAKI', '1231', '12', 'PURBALINGGA', 'PURBALINGGA', 'PURBALINGGA', 12, 12, '919230192830', 'asd@gmail.com', 14515, 'BELUM MENIKAH', 'HINDU', 'SMA', 'IPA', 2013, 'Jepang', 'OP', '', 'Luar Negeri', '>Rp.5.000.000', '2016-09-13'),
('3303092091823098', '09Q820398102398102938109', 'LZKJDLKASD', 'LAJSLDK', '1994-06-14', 'PEREMPUAN', '123', '123', 'PURBALINGGA', 'KARANGMONCOL', 'AKLSJDLKASJD', 2, 2, '0192830123', '12093810', 912830, 'BELUM MENIKAH', 'ISLAM', 'SMA', 'IPA', 2014, '', 'OP', '', 'Lokasi Tempat Tinggal', 'Rp.2.500.000 - Rp.5.000.000', '2016-11-09'),
('1234567890', '367406091195014', 'PRAMADITYO PRASTOWO', 'BOGOR', '1993-01-20', 'LAKI-LAKI', '170', '47', 'TANGERANG SELATAN', 'PAMULANG', 'BENDA BARU', 7, 10, '085879845171', 'pramadityo.prastowo@gmail.com', 14516, 'BELUM MENIKAH', 'ISLAM', 'S-1', 'TEKNIK INFORMATIKA', 2016, 'Inggris', 'OB', 'PT.AN', 'Wilayah Lain', '>Rp.5.000.000', '2017-06-09'),
('1293817239871823', '98127938127318237', 'PRASTOWO', 'BOGOR', '1995-11-09', 'Laki-Laki', '170', '50', 'TANGERANG SELATAN', 'PAMULANG', 'BENDA BARU', 7, 11, '085878945171', 'pramadityo.prastowo@gmail.com', 14516, 'MENIKAH', 'ISLAM', 'S-1', 'TEKNIK INFORMATIKA', 2016, '', 'OB', 'PT. AS', 'Lokasi Tempat Tinggal', '>Rp.5.000.000', '2016-09-11'),
('aklsdjlaksdj', 'laskjdlaksjd', 'laksjdlkasj', 'alskdj', '1990-11-14', 'LAKI-LAKI', '180', '80', 'alskdjaslkd', 'slkdjalksd', 'askdj', 12, 12, '01921038', 'alskdjalksdj', 1234, 'BELUM MENIKAH', 'BUDHA', 'D-3', 'KESMAS', 2010, '', 'kajsldkajs', 'laksjdlaks', 'Wilayah Lain', '>Rp.5.000.000', '2016-09-11');

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `delete_data` ON SCHEDULE EVERY 1 SECOND STARTS '2016-09-01 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM pelanggan WHERE exp <=DATE_SUB(NOW(), INTERVAL 2 YEAR)$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
