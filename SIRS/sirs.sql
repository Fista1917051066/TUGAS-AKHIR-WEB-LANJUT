-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 05:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirs`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `kode_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(225) NOT NULL,
  `nohp_dokter` varchar(20) NOT NULL,
  `alamat_dokter` varchar(30) NOT NULL,
  `jadwal_praktek` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `kode_dokter`, `nama_dokter`, `spesialis`, `nohp_dokter`, `alamat_dokter`, `jadwal_praktek`) VALUES
(1, 'DR135', 'Dr. Listya Paramitha', 'Kulit', '085279779008', 'Bandar Lampung', 'Senin - Jum\'at : 08.00 - 15.00'),
(3, 'NK021', 'Dr. Niken', 'Kandungan', '085789209071', 'Pringsewu', 'Selasa - Sabtu : 13.00 - 23.00'),
(6, 'SPK312', 'Dr. Angel', 'Kulit dan Kelamin', '085375621661', 'Jakarta', 'Rabu - Sabtu : 15.00 - 20.00'),
(7, 'ID-123', 'Dr. Agung', 'Anak', '085279779008', 'Bandar Lampung', 'Senin - Minggu : 08.00 - 16.00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-11-17-142140', 'App\\Database\\Migrations\\Dokter', 'default', 'App', 1637209699, 1),
(2, '2021-11-17-154323', 'App\\Database\\Migrations\\Pasien', 'default', 'App', 1637209699, 1),
(3, '2021-11-17-160525', 'App\\Database\\Migrations\\Ruangan', 'default', 'App', 1637209699, 1),
(4, '2021-11-17-161111', 'App\\Database\\Migrations\\RawatInap', 'default', 'App', 1637209699, 1),
(5, '2021-11-18-043628', 'App\\Database\\Migrations\\Dokter', 'default', 'App', 1637210203, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `kode_pasien` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(30) NOT NULL,
  `no_rm_pasien` varchar(20) NOT NULL,
  `nohp_pasien` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `kode_pasien`, `nama_pasien`, `alamat_pasien`, `no_rm_pasien`, `nohp_pasien`) VALUES
(1, 'ID-23b', 'Dina', 'Bandar Lampung', '12EF', '085279712332'),
(2, 'ID-231', 'Umar', 'Kp. Baru', '21MWR', '08223311154666'),
(3, 'ID-002', 'Aldebaran', 'Bandar Lampung', 'MT001', '085279712002'),
(4, 'ID-19IB', 'Putri', 'Pringsewu', 'KM233', '085267511554');

-- --------------------------------------------------------

--
-- Table structure for table `rawatinap`
--

CREATE TABLE `rawatinap` (
  `id_rawatinap` int(11) UNSIGNED NOT NULL,
  `kode_rawatinap` varchar(50) NOT NULL,
  `kode_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `kode_pasien` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nohp_pasien` varchar(20) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `kode_ruangan` varchar(50) NOT NULL,
  `tglmasuk` date NOT NULL,
  `catatanmedis` varchar(225) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `lamarawat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rawatinap`
--

INSERT INTO `rawatinap` (`id_rawatinap`, `kode_rawatinap`, `kode_dokter`, `nama_dokter`, `kode_pasien`, `nama_pasien`, `nohp_pasien`, `alamat_pasien`, `kode_ruangan`, `tglmasuk`, `catatanmedis`, `nama_ruangan`, `harga`, `lamarawat`) VALUES
(18, 'RI-232', 'NK021', 'Dr. Niken', 'ID-231', 'Umar', '08223311154666', 'Kp. Baru', 'KB-002', '2021-12-01', 'Rutin Olahraga', 'Ruang Kamboja', 1500000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `kode_ruangan` varchar(50) NOT NULL,
  `nama_ruangan` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `kode_ruangan`, `nama_ruangan`, `harga`, `status`) VALUES
(2, 'ML-132', 'Ruang Mawar', 1500000, 'VIP'),
(3, 'KB-002', 'Ruang Kamboja', 12500000, 'VIP'),
(4, 'KN-012A', 'Ruang Kenanga', 500000, 'Ekonomi'),
(5, 'TR-113', 'Ruang Teratai', 1000000, 'Ekonomi'),
(6, 'MW-305', 'Ruang Mawar', 750000, 'Ekonomi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `rawatinap`
--
ALTER TABLE `rawatinap`
  ADD PRIMARY KEY (`id_rawatinap`),
  ADD KEY `id_dokter` (`kode_dokter`),
  ADD KEY `id_pasien` (`kode_pasien`),
  ADD KEY `id_ruangan` (`kode_ruangan`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rawatinap`
--
ALTER TABLE `rawatinap`
  MODIFY `id_rawatinap` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
