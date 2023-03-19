-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 19, 2023 at 03:41 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwd_simulasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_beasiswa`
--

CREATE TABLE `daftar_beasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `ipk_terakhir` decimal(10,2) NOT NULL,
  `pilihan_beasiswa` int(11) NOT NULL,
  `berkas_file` varchar(255) NOT NULL,
  `status_ajuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daftar_beasiswa`
--

INSERT INTO `daftar_beasiswa` (`id`, `nama`, `email`, `no_hp`, `semester`, `ipk_terakhir`, `pilihan_beasiswa`, `berkas_file`, `status_ajuan`) VALUES
(1, 'Dimas', 'masdidi00@gmail.com', '089605958073', 6, '4.00', 1, '/Applications/MAMP/tmp/php/phpBQyfdl', 'belum verifikasi'),
(2, 'Priyandi', 'masdidi00@gmail.com', '089605958073', 8, '3.50', 2, '/Applications/MAMP/tmp/php/phpah4UWZ', 'belum verifikasi'),
(3, 'Adrian', 'masdidi00@gmail.com', '089605958073', 5, '3.55', 2, '/Applications/MAMP/tmp/php/phprgQWr6', 'belum verifikasi'),
(4, 'Ramadhan', 'masdidi00@gmail.com', '12345', 5, '3.25', 2, '/Applications/MAMP/tmp/php/phpzLSrMo', 'belum verifikasi'),
(5, 'Farhan', 'masdidi00@gmail.com', '12345', 7, '3.58', 1, '/Applications/MAMP/tmp/php/php10aaMU', 'belum verifikasi'),
(6, 'Nafis', 'masdidi00@gmail.com', '12345', 6, '3.79', 1, '/Applications/MAMP/tmp/php/phpagpVgl', 'belum verifikasi'),
(7, 'Damar', 'damar@gmail.com', '123455', 8, '3.89', 1, '/Applications/MAMP/tmp/php/php3kxyxg', 'belum verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `ipk_terakhir` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama_mahasiswa`, `semester`, `ipk_terakhir`) VALUES
(1, 'Dimas', 6, '3.80'),
(2, 'Alex', 6, '2.90'),
(3, 'Priyandi', 8, '3.50'),
(4, 'Ramadhan', 5, '3.25'),
(5, 'Adrian', 5, '3.55'),
(6, 'Farhan', 7, '3.58'),
(7, 'Nafis', 6, '3.79'),
(8, 'Damar', 8, '3.89');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan_beasiswa`
--

CREATE TABLE `pilihan_beasiswa` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `ketentuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pilihan_beasiswa`
--

INSERT INTO `pilihan_beasiswa` (`id`, `kategori`, `image`, `ketentuan`) VALUES
(1, 'Akademik', 'beasiswa_akademik.png', '<p>1. Memiliki IPK >3.5</p>\r\n<p>2. Aktif</p>\r\n<p>3. Mau Belajar & Bekerja Keras</p>\r\n<p>4. Kemampuan Bahasa Inggris Advance</p>\r\n\r\n\r\n'),
(2, 'Non Akademik', 'non_akademik.png', '<p>1. Aktif</p>\r\n<p>2.Minimal Juara Tingkat Provinsi/Nasional</p>\r\n<p>3.Mau Belajar & Bekerja Keras</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_beasiswa`
--
ALTER TABLE `daftar_beasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilihan_beasiswa`
--
ALTER TABLE `pilihan_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_beasiswa`
--
ALTER TABLE `daftar_beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pilihan_beasiswa`
--
ALTER TABLE `pilihan_beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
