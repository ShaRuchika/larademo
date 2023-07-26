-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 09:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `address` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'KFC Resto', 'kfc@test.com', NULL, '$2y$10$lnjsAYBPa9T3V8OVE1gAPeMWfhFIfDR63lOVXwMkT8XR9JVwsrDbq', 'Delhi sector 11', NULL, '2023-05-23 05:09:58', '2023-06-15 06:04:13'),
(2, 'Pizza hut', 'phut@test.com', NULL, '$2y$10$FCDJPvst9cDhx6ji0qxvVeNeBMH4L/BwgTSSoMsoHee6uB3r2zyIa', 'noida sector 332', NULL, '2023-05-23 05:10:33', '2023-05-23 05:10:33'),
(3, 'Peter retso', 'peter@test.com', NULL, '$2y$10$ZPxXqshIdMLEH2Va/5A9NeoI3HR0BJkzTkh/Ca22dlQTsG86B0UWy', 'chennai', NULL, '2023-05-24 00:17:05', '2023-05-24 00:17:05'),
(4, 'stars Rstro', 'star@test.com', NULL, '$2y$10$eOz04xUswz41SU5dhM4sIu0Qi4CPVWWjdYTKiag/6HItcN6c5XTo.', 'noida sector 332', NULL, '2023-05-24 00:17:42', '2023-05-24 00:17:42'),
(5, 'Troy Owen Restro', 'owen@test.com', NULL, '$2y$10$4Yj51FiqBmBslvvoFGohNu.myuzmmVZcFYbrSSXAb4/KjcdWvirPi', 'banglore', NULL, '2023-05-24 00:19:09', '2023-05-24 00:19:09'),
(6, 'Tasha Becker', 'tasha@gmail.com', NULL, '$2y$10$HraDxpwIl/TF2YfoFrPmj.XyWbN70fIb0vbcH792NFqXuqNjKBtvO', 'Itaque ducimus sed', NULL, '2023-06-13 02:44:27', '2023-06-13 02:44:27'),
(7, 'Mia Clements', 'oman@gmail.com', NULL, '$2y$10$9WzH9xcy8oEvvEwDV7SS5.a1wNzx2Ay/mKD0O06l6NT3rm6nwsvyS', 'Sed eum a dolores am', NULL, '2023-06-13 02:45:44', '2023-06-13 02:45:44'),
(8, 'Veda Baldwin', 'xile@mailinator.com', NULL, '$2y$10$lMKf8W7AkbtNN72tJHs0/.vJIeli6VzcxH7t/hcKmzQnP6Ji3sKpG', 'Qui sunt velit facil', NULL, '2023-06-13 04:20:20', '2023-06-13 04:20:20'),
(9, 'Basil Rivera', 'abc@gmail.com', NULL, '$2y$10$lIZ8NQguo0Bnzjkzpb.cnOkFEFyMSyyfkt9MLx5AonGinF/5Xxi4G', 'Eum eveniet tempora', NULL, '2023-06-15 06:03:48', '2023-06-15 06:03:48'),
(10, 'Cameron Perry', 'pefuhutoso@mailinator.com', NULL, '$2y$10$0S/3CtXSXeodwjzO9IiqruZ2NveTa7THG9/f1B1gyH6UKAfIBsTnq', 'Aliqua Beatae vitae', NULL, '2023-07-26 01:59:20', '2023-07-26 01:59:20');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
