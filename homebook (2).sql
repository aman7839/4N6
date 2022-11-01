-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 03:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `awards_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `awards_name`, `created_at`, `updated_at`) VALUES
(13, 'many rewards', '2022-10-19 06:57:46', '2022-10-27 06:53:01'),
(16, 'national rewards', '2022-10-20 01:32:51', '2022-10-20 01:32:51'),
(30, 'national rewards', '2022-10-20 04:18:40', '2022-10-20 04:18:40'),
(35, 'many rewards', '2022-10-20 07:09:13', '2022-10-20 07:09:13'),
(36, 'national rewards', '2022-10-21 00:54:00', '2022-10-21 00:54:00'),
(37, 'national rewards', '2022-10-25 23:09:32', '2022-10-25 23:09:32'),
(38, 'many', '2022-10-25 23:22:34', '2022-10-25 23:22:34'),
(39, 'national rewards', '2022-10-25 23:49:47', '2022-10-25 23:49:47'),
(40, 'many rewards', '2022-10-25 23:57:37', '2022-10-25 23:57:37'),
(41, 'many', '2022-10-25 23:59:33', '2022-10-25 23:59:33'),
(42, 'national', '2022-10-26 05:32:20', '2022-10-26 05:32:20'),
(43, 'many rewards', '2022-10-27 06:36:07', '2022-10-27 06:36:07'),
(44, 'many', '2022-10-27 06:36:53', '2022-10-27 06:36:53'),
(45, 'national', '2022-10-27 23:08:34', '2022-10-27 23:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_10_18_050032_create_role_table', 1),
(5, '2022_10_18_054819_create_awards_table', 1),
(6, '2022_10_19_052532_create_users_guides_table', 2),
(7, '2022_10_27_131917_add_role_column_to_users', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `mobile`, `location`, `password`, `role_as`, `created_at`, `updated_at`) VALUES
(43, 'vishal', 'amansingh7887399@gmail.com', '1666855063-4.jpg', '9803822968', 'target', '$2y$10$5bM3I/J3LVKM3c.5GKIC7eS9ZSqZsSX2qlX2NXo/jixESDlymllki', 0, '2022-10-20 05:10:55', '2022-10-27 01:47:43'),
(45, 'aman kumar', 'amansingh7838799@gmail.com', '1666859045-1.jpg', '9803822968', 'location manner', '$2y$10$5Fq8Ao6MEW0UpFi1vdrgquqW1Txotm5JrDvBa5cNX58sBKLJlm6pW', 0, '2022-10-20 07:04:13', '2022-10-27 02:54:05'),
(48, 'aman kumar', 'amansingh783799@gmail.com', '1666325939-admin.jpg', '9803822968', 'location', '$2y$10$ptBa1fsj/W7CeSCl1ofKVeso8TalUrSfmmIHQwfnmCr.mW3hKL6Fy', 0, '2022-10-20 22:48:59', '2022-10-20 22:48:59'),
(49, 'neeraj sharma', 'amansingh178399@gmail.com', '1666855032-64-2.jpg', '9803822969', 'location manner', '$2y$10$96rC2jU3jsmJEn8qBGLGeeHGuo8TB/HMxbMb2qwNP0LB1JhDt14Y.', 0, '2022-10-20 22:54:47', '2022-10-27 01:47:12'),
(50, 'aman kumar', 'amansingh777839@yahoo.com', '1666758996-admin.jpg', '9803822982', 'location', '$2y$10$0iwbvl9MZIwF8j6TkBZCHurIPrxt6bbYv42ikYyaLHVY83mrz/782', 0, '2022-10-25 23:06:37', '2022-10-25 23:06:37'),
(51, 'aman kumar', 'amansingh7839@gmail.com', '1666958222-64-1.jpg', '9803822968', 'location manner', '$2y$10$YBCGHRJfHv9kebAQySRiZOkdrDAFcCr7JDmmOnzlYsGNaJOUPUd8G', 1, '2022-10-26 23:25:18', '2022-10-28 06:27:22'),
(52, 'deepak kumar', 'singh78399@gmail.com', '1666865225-3.jpg', '7986847826', 'location manner', '$2y$10$GmTv.JUrsExtUqBkEorYVuNYwNTHu6u2velbt.hV6S9T1W62IfOBq', 0, '2022-10-27 04:37:05', '2022-10-27 04:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `users_guides`
--

CREATE TABLE `users_guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_guides`
--

INSERT INTO `users_guides` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(43, 'aman kumar', '1666872330-3.jpg', '2022-10-20 05:12:07', '2022-10-27 06:35:30'),
(44, 'DEV', '1666262559-Extemp Topic Generator Instructions 8-14-22.pdf', '2022-10-20 05:12:39', '2022-10-20 05:12:39'),
(48, 'aman kumar', '1666262612-Extemp Topic Generator Instructions 8-14-22 (2).pdf', '2022-10-20 05:13:32', '2022-10-20 05:13:32'),
(49, 'aman kumar', '1666262715-W-9 Form - Mooney - 4N6 Fanatics -5-14-2022 (1).pdf', '2022-10-20 05:15:15', '2022-10-20 05:15:15'),
(50, 'aman kumar', '1666269209-admin.jpg', '2022-10-20 07:03:29', '2022-10-20 07:03:29'),
(51, 'aman kumar', '1666759167-mariano_fav.png', '2022-10-25 23:09:27', '2022-10-25 23:09:27'),
(52, 'aman kumar', '1666872317-3.jpg', '2022-10-27 06:35:17', '2022-10-27 06:35:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_guides`
--
ALTER TABLE `users_guides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users_guides`
--
ALTER TABLE `users_guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
