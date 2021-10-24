-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2021 at 05:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_atlit`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_atlit`
--

CREATE TABLE `calon_atlit` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `tinggi_badan` varchar(16) NOT NULL,
  `jenis_olahraga` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_atlit`
--

INSERT INTO `calon_atlit` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tinggi_badan`, `jenis_olahraga`) VALUES
(1, 'zaka', 'Jl. Sunangiri No. 3, Lamongan', 'Laki Laki', '150 cm', 'Lari Maraton'),
(3, 'fahmi', 'jl. sunan ampel , lamongan', 'laki-laki', '150 cm', 'renang'),
(4, 'serlok', 'gersik', 'laki-laki', '160 cm', 'balet'),
(5, 'zaka fahmi', 'lamongan', 'laki-laki', '150 cm', 'tiktok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_atlit`
--
ALTER TABLE `calon_atlit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_atlit`
--
ALTER TABLE `calon_atlit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
