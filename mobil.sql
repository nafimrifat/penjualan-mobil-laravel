-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 03:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobil_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penjualan` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `bayar` varchar(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`id`, `id_penjualan`, `tgl`, `bayar`, `metode`, `status`) VALUES
(771, '661', '2023-01-23', '210.000.000', 'Transfer', 'Lunas'),
(772, '662', '2023-01-23', '538.900.000', 'Transfer', 'Lunas'),
(773, '663', '2023-02-06', '313.700.000', 'Transfer', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `beli_mobil`
--

CREATE TABLE `beli_mobil` (
  `kode` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `pabrikan` varchar(255) NOT NULL,
  `mobil` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beli_mobil`
--

INSERT INTO `beli_mobil` (`kode`, `tgl`, `pabrikan`, `mobil`, `harga`) VALUES
('551', '2022-12-02', 'Toyota', 'Avanza', '190.000.000'),
('552', '2022-12-02', 'Honda', 'Hr-v', '528.000.000'),
('553', '2022-12-02', 'Hyundai', 'Creta', '309.000.000'),
('554', '2022-12-02', 'Wuling', 'Alvez', '269.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_09_180411_create_mobils_table', 1),
(6, '2023_12_17_084143_create_pegawais_table', 2),
(9, '2024_01_04_122440_create_pembelis_table', 3),
(10, '2024_01_05_075051_create_penjualans_table', 4),
(11, '2024_01_06_095324_create_bayars_table', 4),
(12, '2024_01_06_125007_create_beli_mobils_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `kode` varchar(255) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `seat` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `bbm` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`kode`, `merek`, `tipe`, `warna`, `seat`, `tahun`, `bbm`, `harga`) VALUES
('1001', 'Toyota', 'Avanza', 'hitam', 7, '2021', 'bensin', '210.000.000'),
('1002', 'honda', 'Hr-v', 'hitam', 7, '2022', 'bensin', '538.900.000'),
('1003', 'hyundai', 'Creta', 'putih', 5, '2022', 'bensin', '313.700.000'),
('1004', 'wuling', 'Alvez', 'putih', 5, '2022', 'bensin', '275.000.000'),
('1005', 'honda', 'Br-v', 'putih', 7, '2023', 'bensin', '340.000.000'),
('1006', 'Mitsubishi', 'Xpander', 'Merah', 7, '2022', 'Bensin', '270.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jns_kelamin` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jns_kelamin`, `no_tlp`, `username`, `password`) VALUES
(221, 'Diki', 'Pria', '085710234321', 'admin', 'abcd'),
(222, 'Billy', 'Pria', '087918203456', 'admin2', 'asdf'),
(223, 'Lily', 'Wanita', '089072513846', 'admin3', 'efghi'),
(224, 'Arya', 'Wanita', '085920777321', 'admin4', 'klmn');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `jns_kel` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `nik`, `jns_kel`, `usia`, `alamat`, `no_tlp`, `email`, `pekerjaan`) VALUES
(331, 'Tony', '1234561234561234', 'Pria', '42', 'Malang', '82723164229', 'tony@gmail.com', 'pekerjaan'),
(332, 'Robert', '1234561234561234', 'Pria', '43', 'Surakarta', '85999345621', 'robert@gmail.com', 'pekerjaan'),
(333, 'Sansa', '1234512345123456', 'Wanita', '39', 'Karanganyar', '082590723164', 'sansa@gmail.com', 'pekerjaan'),
(334, 'John', '1234512345123456', 'Pria', '36', 'Semarang', '087222621791', 'john@gmail.com', 'pekerjaan'),
(335, 'Alysa', '1234561234561234', 'Wanita', '29', 'Wonogiri', '087209184567', 'alysa@gmail.com', 'pekerjaan');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `id_mobil` varchar(255) NOT NULL,
  `id_pembeli` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `tgl`, `id_mobil`, `id_pembeli`, `harga`, `status`) VALUES
(661, '2023-01-17', 'Avanza', 'Tony', '210.000.000', 'lunas'),
(662, '2023-01-23', 'Hr-v', 'Robert', '538.900.000', 'lunas'),
(663, '2023-02-06', 'Creta', 'Sansa', '313.700.000', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beli_mobil`
--
ALTER TABLE `beli_mobil`
  ADD UNIQUE KEY `beli_mobil_kode_unique` (`kode`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD UNIQUE KEY `mobil_kode_unique` (`kode`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=774;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=664;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
