-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2021 at 12:55 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `bertemu_dengan` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `tanggal`, `waktu`, `alamat`, `no_hp`, `bertemu_dengan`, `keperluan`, `foto`) VALUES
('602ea3681e0fa', 'sfsfsf', '2021-01-01', '01:00:00', 'sffsfs', '232323', 'FEEFWF', 'gdgd', 'dggd'),
('602ea38012f8e', '', '0000-00-00', '00:00:00', '', '', '', '', ''),
('602ea3ab310d8', '', '0000-00-00', '00:00:00', '', '', '', '', ''),
('602f38d8e5bb4', 'waawwa', '2021-01-31', '00:00:00', 'sffsfs', 'wrrwrw', 'estew', 'setest', ''),
('602f38e351a44', 'waawwa', '2021-01-31', '00:00:00', 'sffsfs', 'wrrwrw', 'estew', 'setest', ''),
('602f38e82e4bc', 'waawwa', '2021-01-31', '00:00:00', 'sffsfs', 'wrrwrw', 'estew', 'setest', ''),
('602f38fe35b94', 'waawwa', '2021-01-31', '00:00:00', 'sffsfs', 'wrrwrw', 'estew', 'setest', ''),
('602f399735b00', 'waawwa', '2021-01-31', '00:00:00', 'sffsfs', 'wrrwrw', 'estew', 'setest', ''),
('602f399c35839', 'waawwa', '2021-01-31', '00:00:00', 'sffsfs', 'wrrwrw', 'estew', 'setest', ''),
('602f39a01ecec', 'waawwa', '2021-01-31', '00:00:00', 'sffsfs', 'wrrwrw', 'estew', 'setest', ''),
('602f3aa0367ca', 'wawrara', '2021-01-01', '00:00:00', 'wrawar', '22', 'fsaasf', 'asfasfsfa', ''),
('602f3abf37d74', 'war', '2021-01-01', '00:00:00', 'wrawra', '232323', 'warwra', 'warwra', 'warwar'),
('602f3db924ffd', 'dgsgsdsdgdsg', '2021-02-17', '13:49:00', '3w5', '36553553', 'fesdf', '355335', ''),
('fesdfesfds', 'Abu', '2021-02-08', '02:19:20', 'Jl Batu', '0852', 'Ikhwal', 'Konsultasi', 'www'),
('swrdwrw', 'Bedu', '2021-02-08', '02:19:21', 'fdfddfdfdffd', '0852', 'dffdfd', 'fddffddf', 'gdgdgdgdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
