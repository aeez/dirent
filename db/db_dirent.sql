-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 01:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dirent`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `kota` varchar(60) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nik`, `nama_lengkap`, `alamat`, `no_telp`, `kota`, `kode_pos`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(5, 2147483647, 'Angga Warjaya', 'Jl.Durung No.5 Kec. Medan Barat', '08126464210', 'Medan', 20111, 'angga@gmail.com', '$2y$10$/J8FaoFaz8qKnbI1X75dTuF8UwD7gOhFd1c1frpaZw0qEQ5vSnQoC', 'customer', '2022-11-16 12:26:37', '2022-11-16 12:26:37'),
(6, 2147483647, 'Ahmad Taufiq Ramadhan', 'Jl. Karya Jaya No.55', '082588996688', 'Medan', 20145, 'ahmad@gmail.com', '$2y$10$38/ApeQVS1URXSbIYIwp4uj5w8Wusvuq8Zx0M1N.ltR7rGNnHFLNa', 'customer', '2022-11-16 12:34:42', '2022-11-16 12:34:42'),
(7, 2147483647, 'Padli Husaini', 'Jl. Krakatau No.105 Kec. Medan Timur ', '085598375570', 'Medan', 20231, 'padli@gmail.com', '$2y$10$UDTR71JPk4tdIKpGjnfnU.C4V7E0c8tZoYEQtPUd0.kObX3Fm74Gi', 'customer', '2022-11-16 12:46:49', '2022-11-16 12:46:49'),
(8, 2147483647, 'Dania Margaret', 'Jl. Jamin Ginting No.390, Padang Bulan, Kec. Medan Baru', '082566449669', 'Medan', 20157, 'dania@gmail.com', '$2y$10$NHjIfMhyovv1BLhEz0vvtu5lAeI9a8kn9yNe/aNCl8JgN2tCP4XJ2', 'customer', '2022-11-16 12:54:17', '2022-11-16 12:54:17'),
(9, 2147483647, 'Putri Harliana', 'HPH2+5HM, Jl. Puri, Kota Matsum II, Kec. Medan Area', '085578871511', 'Medan', 20211, 'putri@gmail.com', '$2y$10$wemWmnGP75cML5KQTEnUYeNn3EWyvlCCrSURn6OjPmh9BY0RgMdSS', 'customer', '2022-11-16 13:00:35', '2022-11-16 13:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_customer`, `komentar`, `created_at`, `updated_at`) VALUES
(4, 6, 'Layanan yang diberikan sangat baik. Mobil yang direntalkan juga dalam kondisi yang baik meskipun begitu harga yang diberikan tidak terlalu mahal. Saya sangat puas', '2022-11-16 13:03:50', '2022-11-16 13:03:50'),
(5, 5, 'Saya puas dengan rental mobil ini. Mobil yang disewakan tidak dengan tahun yang rendah dan mobil yang disewakan juga dalam kondisi yang bagus.', '2022-11-16 13:12:01', '2022-11-16 13:12:01'),
(6, 7, 'Saya sangat puas dengan layanan yang diberikan. mobil yang disewakan cukup bervariasi dengan kondisi yang baik. Selain itu harga yang diberikan juga tidak terlalu mahal.', '2022-11-16 13:16:26', '2022-11-16 13:16:26'),
(7, 8, 'Rental mobil ini sangat baik dalam hal pelayanan dan juga kondisi mobil. Harga yang ditawarkan juga tidak terlalu mahal. Saya sangat puas dengan hal ini.', '2022-11-16 13:20:45', '2022-11-16 13:20:45'),
(8, 9, 'Saya berterima kasih atas pelayanan yang diberikan, karena pelayanannya sangat baik. Kondisi mobil sangat baik dengan harga yang terjangkau. saya sangat puas, terimakasih.', '2022-11-16 13:27:39', '2022-11-16 13:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama_mobil` varchar(60) NOT NULL,
  `tahun_mobil` varchar(11) NOT NULL,
  `kursi` int(2) NOT NULL,
  `transmisi` varchar(25) NOT NULL,
  `bensin` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `gambar`, `nama_mobil`, `tahun_mobil`, `kursi`, `transmisi`, `bensin`, `stok`, `harga`, `created_at`, `updated_at`) VALUES
(2, '636f0f2367a44.png', ' Avanza', '2015', 6, 'Manual/Matic', 'Pertamax', 5, '350000', '2022-11-12 03:12:35', '2022-11-12 03:27:34'),
(3, '636f113dba511.png', ' Innova', '2016', 6, 'Matic', 'Pertamax', 3, '500000', '2022-11-12 03:21:33', '2022-11-12 03:21:33'),
(4, '636f128e4c172.png', ' Alphard', '2020', 6, 'Matic', 'Pertamax', 2, '1300000', '2022-11-12 03:27:10', '2022-11-12 03:27:10'),
(5, '636f13b375a6a.png', ' Camry', '2015', 4, 'Matic', 'Pertamax', 1, '850000', '2022-11-12 03:32:03', '2022-11-12 03:32:03'),
(6, '6374d0097fa67.png', ' Pajero Sport', '2017', 6, 'Matic', 'Dexlite', 2, '1700000', '2022-11-16 11:56:57', '2022-11-16 11:56:57'),
(7, '6374d09b1ed2f.png', ' Fortuner', '2017', 6, 'Manual', 'Solar', 1, '1750000', '2022-11-16 11:59:23', '2022-11-16 11:59:23'),
(8, '6374d29895a5d.png', ' CR-V', '2021', 7, 'Matic', 'pertamax', 3, '700000', '2022-11-16 12:07:52', '2022-11-16 12:07:52'),
(9, '6374d327f14f1.png', ' Civic', '2021', 4, 'Matic', 'Pertamax', 2, '1200000', '2022-11-16 12:10:15', '2022-11-16 12:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `dari_tanggal` date NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `jumlah_hari` int(3) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `link_drive` varchar(255) NOT NULL,
  `status` enum('Belum Disetujui','Dipinjam','Dikembalikan') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_customer`, `id_mobil`, `nama`, `alamat`, `no_telp`, `dari_tanggal`, `sampai_tanggal`, `jumlah_hari`, `tujuan`, `link_drive`, `status`, `created_at`, `updated_at`) VALUES
(6, 6, 4, 'Ahmad Taufiq Ramadhan', 'Jl. Karya Jaya No.55 Medan Johor', '081252253442', '2022-11-30', '2022-12-04', 30, 'Luar Kota (Aceh)', 'https://drive.google.com/file/d/1EEVI2RjUl29faW0g_eOKXPvZyklwqO8x/view?usp=share_link', 'Belum Disetujui', '2022-11-27 11:58:47', '2022-11-27 11:58:47'),
(7, 5, 9, 'Angga Warjaya', 'Jl.Durung No.5 Kec. Medan Barat', '082273734565', '2022-11-27', '2022-11-28', 1, 'Dalam Kota', 'https://drive.google.com/file/d/1EEVI2RjUl29faW0g_eOKXPvZyklwqO8x/view?usp=share_link', 'Dipinjam', '0000-00-00 00:00:00', '2022-11-27 12:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`, `created_at`, `updated_at`) VALUES
(5, 'petugas', '$2y$10$JxH0lnCn4Pq4V6PqrgpZW.b4Lm4QjKCUihtq/CNo.u476kknvQpuq', 'petugas', 'petugas', '2021-05-16 04:58:55', '2021-05-18 15:06:21'),
(6, 'admin', '$2y$10$6iLu1XIutxpZZ1N.6VW.uuwB5WdWpzTWMkjxQRXguxRMqLKN0xYw.', 'admin', 'admin', '2021-05-18 15:06:44', '2021-05-18 15:06:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
