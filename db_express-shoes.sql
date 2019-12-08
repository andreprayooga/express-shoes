-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 05:38 AM
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
-- Table structure for table `tb_gender`
--

CREATE TABLE `tb_gender` (
  `id_gender` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gender`
--

INSERT INTO `tb_gender` (`id_gender`, `keterangan`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `hari` varchar(128) NOT NULL,
  `jam_buka` varchar(256) NOT NULL,
  `jam_tutup` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(256) NOT NULL,
  `gender_id` int(1) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `gender_id`, `email`, `password`, `toko_id`, `foto`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Guardian', 1, 'nav1_guardian@gmail.com', '$2y$10$6X00HJVuTLNmIRfANeRMr.tJWPVq5v.5CV1fX5n698npFlyvUX6sG', 35, '00-08-5122.png', 3, 1, '2019-11-26 20:40:20'),
(3, 'Maria Gonzalez', 2, 'mariagonzalez12@gmail.com', '$2y$10$6jsXJwkaYfpDxDPqGttV5O9uMHA5RPoYhc9Q6/9XjpoWRZOqqAGfK', 35, 'Aunt-5121.png', 3, 1, '2019-11-27 09:34:45');

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
-- Table structure for table `tb_sepatu`
--

CREATE TABLE `tb_sepatu` (
  `id_sepatu` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `merk_sepatu` varchar(256) NOT NULL,
  `size` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `id_service` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `jenis_service` varchar(256) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_toko`
--

CREATE TABLE `tb_toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `logo` varchar(128) NOT NULL DEFAULT 'default.jpg',
  `latitude` varchar(256) NOT NULL,
  `longitude` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_toko`
--

INSERT INTO `tb_toko` (`id_toko`, `nama_toko`, `email`, `alamat`, `no_telp`, `logo`, `latitude`, `longitude`, `date_created`) VALUES
(35, 'Sepatu Bersih', 'sepatubersih_mlg@gmail.com', 'Jl. Mayjend. Panjaitan No.229, Penanggungan, Kec. Klojen, Kota Malang, Jawa Timur 65113', '081335833272', '00-08-5121.png', '-7.951579', '112.617594', '2019-11-26 20:29:07'),
(36, 'Monkey Laundry', 'monkey555@gmail.com', 'Jl. MT. Haryono No.195 - 197, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', '(0341) 560060', 'nkr11.jpg', '-7.937732', '112.607306', '2019-11-27 15:14:44'),
(37, 'Kribo Laundry', 'kribo_clean66@gmail.com', 'Jl. Kawi No.24, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65116', '(0341) 366366', 'nkr12.jpg', '-7.976135', '112.623892', '2019-11-27 15:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email`, `password`, `no_telp`, `alamat`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Prabu Jayabaya', 'jayabayakediri1950@gmail.com', '$2y$10$45ggJQC.StqKGEa1bhLNHesuuRiOFHMqoEINXQYC8ZueRZCWa6/ky', '085387098112', 'Jl. Selomangleng, Pojok, Kec. Mojoroto, Kota Kediri, Jawa Timur 64115', 2, 1, '2019-11-26 19:02:19');

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
-- Indexes for table `tb_gender`
--
ALTER TABLE `tb_gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `toko_id` (`toko_id`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `toko_id` (`toko_id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_sepatu`
--
ALTER TABLE `tb_sepatu`
  ADD PRIMARY KEY (`id_sepatu`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `toko_id` (`toko_id`);

--
-- Indexes for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

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
-- AUTO_INCREMENT for table `tb_gender`
--
ALTER TABLE `tb_gender`
  MODIFY `id_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sepatu`
--
ALTER TABLE `tb_sepatu`
  MODIFY `id_sepatu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_toko`
--
ALTER TABLE `tb_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`toko_id`) REFERENCES `tb_toko` (`id_toko`);

--
-- Constraints for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`id_level`),
  ADD CONSTRAINT `tb_pegawai_ibfk_2` FOREIGN KEY (`gender_id`) REFERENCES `tb_gender` (`id_gender`),
  ADD CONSTRAINT `tb_pegawai_ibfk_3` FOREIGN KEY (`toko_id`) REFERENCES `tb_toko` (`id_toko`);

--
-- Constraints for table `tb_sepatu`
--
ALTER TABLE `tb_sepatu`
  ADD CONSTRAINT `tb_sepatu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_sepatu_ibfk_2` FOREIGN KEY (`pegawai_id`) REFERENCES `tb_pegawai` (`id_pegawai`);

--
-- Constraints for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD CONSTRAINT `tb_service_ibfk_1` FOREIGN KEY (`toko_id`) REFERENCES `tb_toko` (`id_toko`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
