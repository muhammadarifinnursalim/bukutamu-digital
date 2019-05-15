-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2019 pada 03.52
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

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
-- Struktur dari tabel `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `namaortu` varchar(50) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `alamatinstansi` varchar(50) NOT NULL,
  `notelepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list`
--

INSERT INTO `list` (`id`, `nama`, `namaortu`, `kelas`, `instansi`, `alamatinstansi`, `notelepon`, `email`, `komentar`) VALUES
(118, 'Nadia Patricia', 'Yusuf S.Kom', '9', 'BIG', 'BIG', '08123456789', 'arifin.nursalim354@gmail.com', 'Bismillah semoga manfaat dan barokah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
