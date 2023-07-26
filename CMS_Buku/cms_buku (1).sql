-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 12:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `buku_id` int(11) NOT NULL,
  `kategori_buku_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `file_buku` varchar(50) NOT NULL,
  `buku_cover` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`buku_id`, `kategori_buku_id`, `user_id`, `judul_buku`, `deskripsi`, `jumlah`, `file_buku`, `buku_cover`) VALUES
(3, 1, 1, 'Kiss of The Death', 'Buku yang menceritakan kehidupan dua orang pasangan yang berbeda dunia', 10, 'kiss PDF', 'KOD'),
(4, 2, 1, 'Nightmare on the dream', 'Buku yang mengisahkan sebuah keindahan dalam mimpi yang menjadi tak indah karena menjadi nyata', 15, 'NOTDpdf', 'cvrNOTD'),
(7, 1, 1, 'The Fallen Demon', 'Buku yang bercerita mengenai iblis yang sangat kejam namun jatuh karena cinta', 3, 'TFDPDF', 'TFDPNG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_buku`
--

CREATE TABLE `tbl_kategori_buku` (
  `kategori_buku_id` int(11) NOT NULL,
  `kategori_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_buku`
--

INSERT INTO `tbl_kategori_buku` (`kategori_buku_id`, `kategori_nama`) VALUES
(1, 'Drama'),
(2, 'Fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_status`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_password`, `role_id`) VALUES
(1, 'admin', '123', 1),
(2, 'riley', '123', 2),
(3, 'user', '123', 2),
(4, 'arthur', '123', 2),
(5, 'randy', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`buku_id`),
  ADD KEY `FKuser` (`user_id`),
  ADD KEY `FKkategori` (`kategori_buku_id`);

--
-- Indexes for table `tbl_kategori_buku`
--
ALTER TABLE `tbl_kategori_buku`
  ADD PRIMARY KEY (`kategori_buku_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FKrole` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kategori_buku`
--
ALTER TABLE `tbl_kategori_buku`
  MODIFY `kategori_buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD CONSTRAINT `FKkategori` FOREIGN KEY (`kategori_buku_id`) REFERENCES `tbl_kategori_buku` (`kategori_buku_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FKuser` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `FKrole` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
