-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 12:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitirta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(6) NOT NULL,
  `waktu` text NOT NULL,
  `datasensor` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `waktu`, `datasensor`) VALUES
(75, '10-10-2022 20:00:03', '0.00'),
(76, '10-10-2022 20:04:17', '0.00'),
(77, '10-10-2022 20:05:28', '0.07'),
(78, '10-10-2022 20:05:49', '1.82'),
(79, '10-10-2022 20:06:10', '2.13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'pengguna', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
