-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2024 at 11:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disiplin`
--

-- --------------------------------------------------------

--
-- Table structure for table `comparisons`
--

CREATE TABLE `comparisons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numbers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`numbers`)),
  `results` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`results`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jurusanpplg`
--

CREATE TABLE `jurusanpplg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelas_jurusan` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `no_telp_ibu` varchar(15) NOT NULL,
  `no_telp_ayah` varchar(15) NOT NULL,
  `no_telp_wali` varchar(15) DEFAULT NULL,
  `foto_siswa` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusanpplg`
--

INSERT INTO `jurusanpplg` (`id`, `nis`, `nama`, `kelas_jurusan`, `nama_ibu`, `nama_ayah`, `nama_wali`, `no_telp_ibu`, `no_telp_ayah`, `no_telp_wali`, `foto_siswa`, `created_at`, `updated_at`) VALUES
(2, 12311, 'daniel', 'pengembangan perangkat lunak', 'ernida', 'rahudi', '--', '3274235823', '328344857', '-', 'C:\\xampp\\tmp\\php3906.tmp', '2024-04-28 18:40:15', '2024-05-25 02:23:58'),
(3, 30122, 'rully', 'BCT', 'pasha', 'islami', '-', '083150780664', '086737373737', '-', '-', '2024-04-28 20:14:39', '2024-04-29 19:31:23'),
(4, 34438, 'majid jago', 'rpl', 'panji', 'rudi', '-', 'p40459i2349', '3408865853-6', '-', '-', '2024-04-28 20:20:21', '2024-05-26 21:32:02'),
(6, 1671, 'subhan hadi', 'animasi', 'dadang', 'wati', '-', '92484583865', '713673754', '-', '-', '2024-04-29 19:30:00', '2024-05-26 19:15:37'),
(8, 23499, 'Panji', 'TKI', 'siti', 'muhammad', '-', '3924328588', '2398498239', '-', '-', '2024-04-29 19:33:44', '2024-05-25 02:17:20'),
(11, 138384, 'nabil', 'peksos', 'raida', 'richo', '-', '329842029735', '435757475749', '-', '-', '2024-05-26 06:01:23', '2024-05-26 06:01:54'),
(13, 1987, 'rully', 'rpl', 'raida', 'hadi', '-', '29842985957', '3498359735', '-', '-', '2024-05-26 20:29:30', '2024-05-26 20:29:30');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_01_165804_create_jurusanpplg_table', 1),
(6, '2024_04_29_011910_poins', 1),
(8, '2024_05_22_083307_create_poons_table', 2),
(9, '2024_05_22_091225_studentpoin', 2),
(10, '2024_05_23_025923_create_comparisons_table', 2),
(11, '2024_05_22_061157_create_nomerpoin_table', 3),
(12, '2024_05_22_063111_create_point_table', 3),
(13, '2024_05_22_070054_create_student_points_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `poins`
--

CREATE TABLE `poins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `riwayat` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poins`
--

INSERT INTO `poins` (`id`, `riwayat`, `user_id`, `created_at`, `updated_at`) VALUES
(30, 'tidak bawa topi', 4, '2024-05-25 00:47:10', '2024-05-25 00:47:10'),
(31, 'merokok', 7, '2024-05-25 03:24:18', '2024-05-25 03:24:18'),
(32, 'tidak memakai dasi', 8, '2024-05-26 06:03:08', '2024-05-26 06:03:08'),
(33, 'merusak fasilitas sekolah', 12, '2024-05-26 19:09:59', '2024-05-26 19:09:59'),
(34, 'terlambat', 2, '2024-05-26 20:34:04', '2024-05-26 20:34:04'),
(35, 'belanja di kantin', 2, '2024-05-26 20:34:46', '2024-05-26 20:34:46'),
(36, 'topi', 2, '2024-05-26 20:40:45', '2024-05-26 20:40:45');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yani silawati cantik', 'yanicantik@gmail.com', NULL, '$2y$10$fToXBvdLImDCKW76Gu/rDOTHP.43muhLH6aIYrjIGElWEn7KJ4mnG', NULL, NULL, NULL),
(2, 'majid', 'majidaja@gmail.com', '2024-05-27 07:48:25', '$2y$10$bctftZH9HLjG4Yq6n//ntOQzIA3equZ2rRf5H0VFjBcQc1e91xgeO', NULL, NULL, NULL),
(3, 'daniel', 'daniel@gmail.com', NULL, '$2y$10$eahu8HSZLlw74A.27hj0s.FZ6KfRjkgvzQyWHGjK7cg/QhGTn3PAG', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comparisons`
--
ALTER TABLE `comparisons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurusanpplg`
--
ALTER TABLE `jurusanpplg`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `poins`
--
ALTER TABLE `poins`
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
-- AUTO_INCREMENT for table `comparisons`
--
ALTER TABLE `comparisons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusanpplg`
--
ALTER TABLE `jurusanpplg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poins`
--
ALTER TABLE `poins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
