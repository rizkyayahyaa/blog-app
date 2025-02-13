-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 10:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `parent_comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `parent_comment_id`, `content`, `created_at`, `updated_at`) VALUES
(6, 26, 12, NULL, 'makan muluu luu', '2025-02-12 11:37:49', '2025-02-12 11:37:49'),
(10, 27, 2, NULL, 'meeting meeting', '2025-02-12 22:34:09', '2025-02-12 22:34:09'),
(11, 26, 2, 6, 'gapapa laa', '2025-02-13 00:46:03', '2025-02-13 00:46:03'),
(12, 24, 2, NULL, 'haloo sayangg', '2025-02-13 01:31:50', '2025-02-13 01:31:50'),
(14, 25, 2, NULL, 'kangen siapa', '2025-02-13 08:14:48', '2025-02-13 08:14:48'),
(16, 26, 16, NULL, 'makan bang', '2025-02-13 09:57:51', '2025-02-13 09:57:51'),
(17, 26, 2, 16, 'iyaa donggggg', '2025-02-13 10:03:21', '2025-02-13 10:03:21'),
(18, 21, 2, NULL, 'cantik', '2025-02-13 10:04:54', '2025-02-13 10:04:54'),
(19, 27, 13, 10, 'yawww', '2025-02-13 10:07:11', '2025-02-13 10:07:11'),
(21, 27, 18, NULL, 'lagi meeting dimana?', '2025-02-13 10:31:39', '2025-02-13 10:31:39'),
(22, 25, 18, NULL, 'siapa', '2025-02-13 10:36:24', '2025-02-13 10:36:24'),
(23, 27, 13, 21, 'gatau nihh dia', '2025-02-13 10:37:40', '2025-02-13 10:37:40');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 13, 2, 'hallo kiaaaa', '2025-02-13 04:22:14', '2025-02-13 04:22:14'),
(2, 2, 13, 'hallo araaaa', '2025-02-13 04:22:55', '2025-02-13 04:22:55'),
(3, 2, 13, 'halooo azzahra salsabila', '2025-02-13 04:37:17', '2025-02-13 04:37:17'),
(4, 2, 13, 'halooo azzahra salsabila', '2025-02-13 04:37:19', '2025-02-13 04:37:19'),
(5, 2, 13, 'test', '2025-02-13 04:37:32', '2025-02-13 04:37:32'),
(6, 13, 2, 'halooo kia ganteng', '2025-02-13 04:38:04', '2025-02-13 04:38:04'),
(7, 13, 2, 'halooo kia ganteng', '2025-02-13 04:38:05', '2025-02-13 04:38:05'),
(8, 16, 15, 'haloo kakkkk', '2025-02-13 09:59:43', '2025-02-13 09:59:43'),
(9, 16, 2, 'halo rizkyaaaa', '2025-02-13 10:00:11', '2025-02-13 10:00:11'),
(10, 2, 16, 'halooo araaaa', '2025-02-13 10:03:57', '2025-02-13 10:03:57'),
(11, 2, 16, 'ehh sorry wildani ya nama kamu?', '2025-02-13 10:04:08', '2025-02-13 10:04:08'),
(12, 2, 16, 'ehh sorry wildani ya nama kamu?', '2025-02-13 10:04:12', '2025-02-13 10:04:12'),
(13, 18, 13, 'haloo kak araa', '2025-02-13 10:34:06', '2025-02-13 10:34:06'),
(14, 18, 2, 'haloo kak rizkyaa', '2025-02-13 10:34:40', '2025-02-13 10:34:40'),
(15, 13, 18, 'haloo kenapa?', '2025-02-13 10:38:52', '2025-02-13 10:38:52'),
(16, 2, 18, 'yowww', '2025-02-13 10:40:10', '2025-02-13 10:40:10');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_08_095652_create_posts_table', 2),
(5, '2025_02_08_122432_create_comments_table', 3),
(6, '2025_02_08_185530_add_role_to_users_table', 4),
(7, '2025_02_10_071305_add_image_to_posts_table', 5),
(8, '2025_02_10_100133_add_image_to_users_table', 6),
(9, '2025_02_12_171124_add_index_to_comments_table', 7),
(10, '2025_02_12_200304_add_is_archived_to_posts_table', 8),
(11, '2025_02_13_054445_create_messages_table', 9),
(12, '2025_02_13_131920_create_statistics_table', 10),
(13, '2025_02_13_142257_create_reports_table', 11);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_archived` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `image`, `created_at`, `updated_at`, `is_archived`) VALUES
(20, 13, 'WITH INTANN', 'vlog aku di hari libur', 'posts/Xa6WGvfPRsW1l9v9TAbMIBi4ruJyXfjYV1oueA5f.jpg', '2025-02-12 11:31:11', '2025-02-12 11:31:11', 0),
(21, 13, 'B&W', 'gatauuu tapi aku cantik bangett', 'posts/fepAB49bqe4vtEcZlDHHod764i8m4R79lyLV2rjd.jpg', '2025-02-12 11:31:37', '2025-02-12 11:31:37', 0),
(22, 13, 'AKU CANTIK GAA', 'tapi aku pede sihh', 'posts/ZwD3NHVWP5cwApBt5XTEkPjg69dcvZMdnOnjKq1S.jpg', '2025-02-12 11:32:07', '2025-02-12 11:32:07', 0),
(23, 13, 'DRESS WELLLL', 'apa yaa', 'posts/SwlRXgcaozjt1LW86ziTKyCuQXNyn6vCKrMg1WHg.jpg', '2025-02-12 11:32:40', '2025-02-12 11:32:40', 0),
(24, 13, 'MIRRORRRR', 'aku lucu gaa', 'posts/a6tkGVnKL14IWzBV8yJL2AJIbsW8pYlJf6ObHhnd.jpg', '2025-02-12 11:33:46', '2025-02-12 11:33:46', 0),
(25, 13, 'kangeennn', 'rizkya wildani yahya', 'posts/X2DftXb9UZaB4PlX59wiD1K9V1TFonOgbR8WH67w.jpg', '2025-02-12 11:34:12', '2025-02-12 11:34:12', 0),
(26, 2, 'makannn bwanggg', 'batagorrr', 'posts/0aeedLZ5drgOL7IDVXqqEzJd8DpFVvDyfr4IYCSM.jpg', '2025-02-12 11:35:10', '2025-02-12 13:06:35', 1),
(27, 2, 'MEETING', 'biar dikira kerja', 'posts/v8B8kcvpO4DSZVjvJgl7DjbHpa2oI0iiBOdSkPzt.jpg', '2025-02-12 11:35:56', '2025-02-12 11:35:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_count` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `post_count`, `created_at`, `updated_at`) VALUES
(2, 2, 2, '2025-02-13 07:35:25', '2025-02-13 07:35:25'),
(4, 13, 6, '2025-02-13 07:35:56', '2025-02-13 07:35:56'),
(6, 18, 1, '2025-02-13 10:43:56', '2025-02-13 10:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Qyr7mU5tl03a0GYYf1yVtQr8mjRtYHK2oCIGz2ia', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNHRKaExnWWNVZ3BWU1N1MEFiWFFvd1ZaeVlhNEpJaVBZN3NkSEdETSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1739468666);

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_count` int(11) NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `image`) VALUES
(2, 'rizkya', 'rizkyayahya@gmail.com', NULL, '$2y$12$3FoOrTIcySIoDydo/LLfKerp2hu6NVqQuwdvgLDkbj/Lih2CrdO9a', NULL, '2025-02-08 04:16:35', '2025-02-10 03:41:11', 'user', 'users/SIll3lmjTCjkBujwq3lmbddfwNJBkdGQVeFE46Pi.jpg'),
(7, 'admin', 'admin@gmail.com', NULL, '$2y$12$uLLs5B5/Hz7iI6vEQL32Qu97O/THLiXLeA4DisXSRBG8bGdbagFoC', NULL, '2025-02-08 12:05:41', '2025-02-12 11:16:42', 'admin', 'users/JMzwVqMK9HKbnuWjIrz6Hb07sfvTJlSbKtCOlpkS.png'),
(11, 'salsabila', 'salsabila@gmail.com', NULL, '$2y$12$MVArePKyhrcdErj.EKnR.u39LvciCGQBS4UgNmlvRNXysazbp0MbK', NULL, '2025-02-10 03:24:42', '2025-02-10 03:24:42', 'user', 'users/ohRToLPk2GdHUxKoQEQMtF7CqZUovJUQ56gXBHuP.jpg'),
(12, 'nenan', 'nenan@gmail.com', NULL, '$2y$12$L9jT9E.HdbHvlALiJxL9SOh3HcIC4zgrMGwh8COy22COP05r6DrK6', NULL, '2025-02-10 03:34:17', '2025-02-10 03:39:30', 'user', 'users/xZvmJnT1VdhS07LedjEFmGXVUZ7kJYLmwm6EMODG.jpg'),
(13, 'araa', 'azzahra@gmail.com', NULL, '$2y$12$2B7qfhXJh/zg2KjpEIBujuQzH8wOG.Yd.tWbprRnSiWCQ0PnOp7ve', NULL, '2025-02-10 11:17:37', '2025-02-10 11:20:44', 'user', 'users/dbumyKXfoeR2V9BWqulX3E5xohE4W41e6EnJcW0f.jpg'),
(14, 'rizkyaa', 'rizkyaa@gmail.com', NULL, '$2y$12$fSu2RWWbiojM.pFFyCARMOLzdWhYAISfQNSAhkE1BdZ4zeYF.vmzW', NULL, '2025-02-13 09:49:22', '2025-02-13 09:53:51', 'user', 'users/6IW7sQgvU3uZnYUVwKsCnXOKKales8Zd8jbghzRh.jpg'),
(15, 'kiaa', 'kiaa@gmail.com', NULL, '$2y$12$gwBC3THBQLh8dtYWzysx..fZ.b7/7cdr1mxtG2Lo3BJSDlFrYKwhm', NULL, '2025-02-13 09:51:33', '2025-02-13 09:53:34', 'user', 'users/kJZiixC9cvEG2PiIsYxyQMjFi8wYfQyDXnMKQ77n.jpg'),
(16, 'wildani', 'wildani@gmail.com', NULL, '$2y$12$YWr9ArJvzXr9XQJYQJd3C.qJZatDQAMVhjycypQWqC2.rQ40mq9Dm', NULL, '2025-02-13 09:55:22', '2025-02-13 09:55:22', 'user', 'users/X0Thr3Txlssl9iGibYHp6Rfjdhoa2zc12IxjMIn9.jpg'),
(18, 'user', 'user@gmail.com', NULL, '$2y$12$q0GoHWL6Svlkt0pyNizHNOc9kmfcGai5vRxBKdqrQyDP3OaAiAPaW', NULL, '2025-02-13 10:29:43', '2025-02-13 10:42:04', 'user', 'users/8dLI89F3LteB0bZwFj6px3kYB6QTe3rQILzetFXT.jpg'),
(19, 'andre', 'andre@gmail.com', NULL, '$2y$12$qOksNuYlHBkp3WdImS.3R.FLZWKMW0q/6cg9lPPoPw1wqdKWICrWy', NULL, '2025-02-13 10:43:02', '2025-02-13 10:43:02', 'user', 'users/3NvVcO7OKOF7jIwGNHLwtXq71UL95shom0McwyG7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_parent_comment_id_index` (`parent_comment_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statistics_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_parent_comment_id_foreign` FOREIGN KEY (`parent_comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `statistics`
--
ALTER TABLE `statistics`
  ADD CONSTRAINT `statistics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
