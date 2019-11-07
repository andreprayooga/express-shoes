-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 05:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_express-shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_toko`
--

CREATE TABLE `data_toko` (
  `id_toko` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `nama_pengelola` varchar(50) NOT NULL,
  `email_toko` varchar(50) NOT NULL,
  `alamat_toko` varchar(50) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `jam_toko` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_toko`
--

INSERT INTO `data_toko` (`id_toko`, `username`, `nama_toko`, `nama_pengelola`, `email_toko`, `alamat_toko`, `no_telpon`, `jam_toko`) VALUES
(1, 'agshazaka', 'Toko Fuzle', 'Mas Edo', 'fuzle@gmail.com', 'Jl.Dieng Atas no 10 Malang EDIT', '089123456111', 'Pukul 08.00-17.00 WIB'),
(2, 'agshazaka', 'Toko Lancar Jaya', 'Jimsus', 'lancarjaya@gmail.com', 'Jl.Akordion F-6 Malang', '089987654321', 'Pukul 09.00-17.00 WIB'),
(3, 'gandha', 'Toko Nusantara', 'Jimi', 'jiminusantaara@gmail.com', 'Jl.Candi Mendut 2B', '0812345678', 'Pukul 09.00-17.00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_servis`
--

CREATE TABLE `jenis_servis` (
  `id_service` int(11) NOT NULL,
  `nama_service` varchar(50) NOT NULL,
  `lama_service` int(11) NOT NULL,
  `harga_service` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_servis`
--

INSERT INTO `jenis_servis` (`id_service`, `nama_service`, `lama_service`, `harga_service`, `gambar`) VALUES
(1, 'EASY', 2, 20000, 'servis 1.png'),
(2, 'MEDIUM', 3, 45000, 'servis 2.jpeg'),
(3, 'HARD', 5, 60000, 'servis 3.jpeg'),
(4, 'LEATHER SHINING', 3, 35000, 'servis 4.jpeg'),
(5, 'PREMIUM SUEDE', 4, 40000, 'servis 5.jpeg'),
(6, 'ONE DAY SERVICE', 1, 65000, 'servis 6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `service_toko`
--

CREATE TABLE `service_toko` (
  `id_service` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `nama_service` varchar(50) NOT NULL,
  `lama_service` varchar(11) NOT NULL,
  `harga_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_toko`
--

INSERT INTO `service_toko` (`id_service`, `username`, `nama_toko`, `nama_service`, `lama_service`, `harga_service`) VALUES
(1, 'agshazaka', 'Toko Fuzle', 'Easy', '2-3 Hari', 30000),
(2, 'agshazaka', 'Toko Fuzle', 'Medium', '3-4 Hari', 20000),
(3, 'agshazaka', 'Toko Fuzle', 'Hard', '4-5 Hari', 30000),
(4, 'gandha', 'Toko Nusantara', 'Leather shining', '4-5 Hari', 40000),
(5, 'gandha', 'Toko Nusantara', 'Premium Suede', '5-6 Hari', 50000),
(6, 'gandha', 'Toko Nusantara', 'One Day Service', '1 Hari', 55000),
(9, 'agshazaka', 'Toko Lancar Jaya', 'Repair', '5-7 Hari', 100000),
(10, 'agshazaka', 'Toko Lancar Jaya', 'Repaint', '3-5 Hari', 150000),
(11, 'agshazaka', 'Toko Lancar Jaya', 'Unyellowing', '3-4 Hari', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `email`, `foto`, `username`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(9, 'Andre Prayoga', 'andreprayoga187@gmail.com', 'default.jpg', 'andre98', '$2y$10$A8tP6yL4ZzscA/aKE7pV7OhSizNVW0dcJRJQVq/0VG6ExDZ8q61YW', 1, 1, '2019-11-05 11:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `jenis_masukan` varchar(128) NOT NULL,
  `fk_toko` int(11) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengelola`
--

CREATE TABLE `tb_pengelola` (
  `id_pengelola` int(11) NOT NULL,
  `nama_pengelola` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL,
  `role_id` int(11) NOT NULL,
  `fk_toko` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_level` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id_level`, `keterangan`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `Gambar`) VALUES
(1, 'agshazaka', 'agshazaka', 'amazon.png'),
(3, 'gandha', 'gandha', 'erafone1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_toko`
--
ALTER TABLE `data_toko`
  ADD PRIMARY KEY (`id_toko`),
  ADD KEY `nama_toko` (`nama_toko`);

--
-- Indexes for table `jenis_servis`
--
ALTER TABLE `jenis_servis`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `service_toko`
--
ALTER TABLE `service_toko`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `nama_toko` (`nama_toko`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `role_id` (`role_id`) USING BTREE;

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  ADD PRIMARY KEY (`id_pengelola`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_toko`
--
ALTER TABLE `data_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_servis`
--
ALTER TABLE `jenis_servis`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_toko`
--
ALTER TABLE `service_toko`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`id_level`);

--
-- Constraints for table `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  ADD CONSTRAINT `tb_pengelola_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
