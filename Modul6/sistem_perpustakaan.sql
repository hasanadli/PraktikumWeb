-- phpMyAdmin SQL Dump
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2022 at 04:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Iron Man', 'Tony Stark', 'Marvel Studios', 2010),
(2, 'Iron Man 2', 'Tony Stark', 'Marvel Studios ', 2011),
(3, 'Captain America', 'Brie Larson', 'Marvel Studios ', 2011),
(4, 'The Incridible Hulk', 'Mark Ruffalo', 'Marvel Studios ', 2008),
(5, 'The Avengers', 'Tony Stark', 'Marvel Studios ', 2013),
(6, 'Iron Man 3', 'Tony Stark', 'Marvel Studios ', 2013),
(7, 'Doctor Strange', 'Bennedict Cumberbatch', 'Marvel Studios ', 2016),
(8, 'Black Panther', 'Josh Button', 'Marvel Studios ', 2018),
(9, 'Ant-Man', 'Kevin', 'Marvel Studios ', 2018),
(10, 'Spider-Man Homecoming', 'Sony Pictures', 'Marvel Studios ', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `nomor_member`, `password`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(1, 'Hasan', '001', '$2a$12$E5/xjG0P3fMsfnbOqAG3OuF/3Tl5BU.HSI1Fpi4yVF3RTAlg6De0i', 'Bahaur', '2022-05-14 12:12:12', '2022-05-20'),
(2, 'Difa', '002', '$2a$12$E5/xjG0P3fMsfnbOqAG3OuF/3Tl5BU.HSI1Fpi4yVF3RTAlg6De0i', 'Kotabaru 002', '2022-05-14 15:35:46', '2022-05-21'),
(3, 'Manda', '003', '$2a$12$E5/xjG0P3fMsfnbOqAG3OuF/3Tl5BU.HSI1Fpi4yVF3RTAlg6De0i', 'Banjarmasin 003', '2022-05-14 16:23:45', '2022-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2022-05-015', '2022-05-30'),
(2, '2022-05-15', '2022-05-30'),
(3, '2022-05-15', '2022-05-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
