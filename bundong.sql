-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 04:08 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bundong`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `borang`
--

CREATE TABLE `borang` (
  `nama` varchar(100) NOT NULL,
  `mykad` int(100) NOT NULL,
  `lorong` varchar(100) NOT NULL,
  `telephone` int(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `asal` text NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tarikh` date NOT NULL,
  `pejabat` varchar(100) NOT NULL,
  `gajipokok` varchar(100) NOT NULL,
  `isterinama` varchar(100) NOT NULL,
  `isterikad` int(100) NOT NULL,
  `isteripekerjaan` varchar(100) NOT NULL,
  `isterialamat` text NOT NULL,
  `isteriasal` text NOT NULL,
  `isteripenddikan` varchar(100) NOT NULL,
  `isteritempat` varchar(100) NOT NULL,
  `isterigaji` int(100) NOT NULL,
  `isteritele` int(100) NOT NULL,
  `bil` text NOT NULL,
  `namaanak` text NOT NULL,
  `mykid` text NOT NULL,
  `pesekolahan` text NOT NULL,
  `rumah` varchar(100) NOT NULL,
  `kereta` varchar(100) NOT NULL,
  `motorsikal` varchar(100) NOT NULL,
  `tv` varchar(100) NOT NULL,
  `komputer` varchar(100) NOT NULL,
  `tanah` varchar(100) NOT NULL,
  `nyatakan` varchar(100) NOT NULL,
  `latiyanpertanian` varchar(100) NOT NULL,
  `latiyanternakan` varchar(100) NOT NULL,
  `parikanan` varchar(100) NOT NULL,
  `keusahawaan` varchar(100) NOT NULL,
  `kti` varchar(100) NOT NULL,
  `kp` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `politeknik` varchar(100) NOT NULL,
  `vokasional` varchar(100) NOT NULL,
  `ikm` varchar(100) NOT NULL,
  `ilp` varchar(100) NOT NULL,
  `ppks` varchar(100) NOT NULL,
  `giatmara` varchar(100) NOT NULL,
  `lain` varchar(100) NOT NULL,
  `tiada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borang`
--

INSERT INTO `borang` (`nama`, `mykad`, `lorong`, `telephone`, `pekerjaan`, `alamat`, `asal`, `pendidikan`, `tempat`, `tarikh`, `pejabat`, `gajipokok`, `isterinama`, `isterikad`, `isteripekerjaan`, `isterialamat`, `isteriasal`, `isteripenddikan`, `isteritempat`, `isterigaji`, `isteritele`, `bil`, `namaanak`, `mykid`, `pesekolahan`, `rumah`, `kereta`, `motorsikal`, `tv`, `komputer`, `tanah`, `nyatakan`, `latiyanpertanian`, `latiyanternakan`, `parikanan`, `keusahawaan`, `kti`, `kp`, `kk`, `politeknik`, `vokasional`, `ikm`, `ilp`, `ppks`, `giatmara`, `lain`, `tiada`) VALUES
('fhdfyhh', 12, '', 0, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
