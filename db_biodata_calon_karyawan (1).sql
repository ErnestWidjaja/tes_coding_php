-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 09:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_biodata_calon_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posisi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan_darah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_tinggal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orang_terdekat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ditempatkan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodatas`
--

INSERT INTO `biodatas` (`id`, `user_id`, `nama`, `posisi`, `no_ktp`, `ttl`, `jk`, `agama`, `golongan_darah`, `status`, `alamat_ktp`, `alamat_tinggal`, `email`, `telp`, `orang_terdekat`, `skill`, `ditempatkan`, `penghasilan`, `created_at`, `updated_at`) VALUES
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-09 01:45:21', '2021-03-09 01:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_09_061736_create_biodatas_table', 1),
(5, '2021_03_09_065912_create_pendidikans_table', 1),
(6, '2021_03_09_073542_create_pelatihans_table', 1),
(7, '2021_03_09_073644_create_pekerjaans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `perusahaan1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posisi1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendapatan1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perusahaan2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posisi2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendapatan2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `user_id`, `perusahaan1`, `posisi1`, `pendapatan1`, `tahun1`, `perusahaan2`, `posisi2`, `pendapatan2`, `tahun2`, `created_at`, `updated_at`) VALUES
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-09 01:45:22', '2021-03-09 01:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihans`
--

CREATE TABLE `pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `kursus1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sertifikat1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kursus2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sertifikat2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelatihans`
--

INSERT INTO `pelatihans` (`id`, `user_id`, `kursus1`, `sertifikat1`, `tahun1`, `kursus2`, `sertifikat2`, `tahun2`, `created_at`, `updated_at`) VALUES
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-09 01:45:22', '2021-03-09 01:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikans`
--

CREATE TABLE `pendidikans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pendidikan1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institusi1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lulus1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipk1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institusi2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lulus2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipk2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikans`
--

INSERT INTO `pendidikans` (`id`, `user_id`, `pendidikan1`, `institusi1`, `jurusan1`, `lulus1`, `ipk1`, `pendidikan2`, `institusi2`, `jurusan2`, `lulus2`, `ipk2`, `created_at`, `updated_at`) VALUES
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-09 01:45:21', '2021-03-09 01:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$.zl1RpXf7rbi2SfmqZMjkORa39T7EIY0Q//bJeIfhPAjgSYdkV1FO', NULL, NULL, NULL),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$Ltg/93nO5e3AR/.pc53p8OZO/h8eKrJ9hHAINmBWUHCSRuBFiWxji', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihans`
--
ALTER TABLE `pelatihans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikans`
--
ALTER TABLE `pendidikans`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelatihans`
--
ALTER TABLE `pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendidikans`
--
ALTER TABLE `pendidikans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
