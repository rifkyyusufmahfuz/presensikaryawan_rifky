-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 10:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `presensikaryawan_rifky`
--

CREATE TABLE `presensikaryawan_rifky` (
  `nip` varchar(10) NOT NULL,
  `namakaryawan` varchar(50) NOT NULL,
  `kehadiran` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `jammasuk` time NOT NULL,
  `keterangan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensikaryawan_rifky`
--

INSERT INTO `presensikaryawan_rifky` (`nip`, `namakaryawan`, `kehadiran`, `tanggal`, `jammasuk`, `keterangan`) VALUES
('1806192100', 'Rifky Yusuf Mahfuz', 'Hadir', '2022-07-14', '08:00:00', 'Tepat Waktu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
