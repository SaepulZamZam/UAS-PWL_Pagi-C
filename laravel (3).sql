-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 04:02 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `judul`, `slug`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(15, 'Polri Presisi untuk Indonesia Emas', 'pemandangan-waduk-jatiluhur', '1720967409.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Peringati Hari Bhayangkara ke-78 Polres Purwakarta dan Pemkab Purwakarta gelar upacara di Taman Pasanggrahan Padjadjaran, Kompleks Kantor Pemkab Purwakarta, Senin, 1 Juli 2024.\r\n\r\nDalam kegiatan tersebut, Penjabat Bupati Purwakarta, Benni Irwan menjadi inspektur upacara yang membacakan sambutan Presiden Republik Indonesia, Joko Widodo.\r\n\r\n\"Setiap tanggal 1 Juli Indonesia memperingati hari Bhayangkara untuk memperingati berdirinya Kepolisian Republik Indonesia dan perannya dalam menjaga keamanan serta mendukung pembangunan sosial ekonomi negara. Pada tahun 2024 ini peringatan hari Bhayangkara mengambil tema Polri presisi mendukung transformasi ekonomi yang inklusif dan berkelanjutan menuju Indonesia emas,\" kata Benni.\r\n\r\nIa melanjutkan, tema ini menunjukkan gerak dinamis dan progresif serta mencerminkan semangat Polri yang terus berinovasi dan beradaptasi dengan perkembangan zaman, tema ini juga menekankan komitmen Polri dalam mendorong pertumbuhan ekonomi yang merata dan berkelanjutan untuk kebaikan semua lapisan masyarakat.\r\n\r\n\"Transformasi ekonomi yang inklusif selaras dengan salah satu prinsip tujuan pembangunan berkelanjutan yaitu no one left behind, jadi pertumbuhan ekonomi dapat menciptakan akses dan kesempatan yang memastikan seluruh lapisan masyarakat dapat berpartisipasi dan meningkatkan kesejahteraan nya hingga akhirnya mengurangi kesenjangan ekonomi antar kelompok dan antar wilayah,\" kata Benni. \r\n\r\nDalam kegiatan tersebut, Benni juga mengucapkan selamat Hari Bhayangkara ke-78 segenap anggota dan keluarga besar Kepolisian Negara Republik Indonesia, khususnya Polres Purwakarta. \r\n\r\n\"Saya atas nama pribadi dan Pemkab Purwakarta serta mewakili seluruh Masyarakat Purwakarta mengucapkan selamat Hari Bhayangkara ke-78 kepada seluruh jajaran Kepolisian Republik Indonesia secara umum dan khususnya kepada keluarga besar Polres Purwakarta,\" ucap Benni. \r\n\r\nPenjabat Bupati Purwakarta juga berharap, semoga kebersamaan tiga pilar di Kabupaten Purwakarta tetap terbangun komunikasi dan koordinasi, yang bagus, produktif serta harmonis. Sehingga setiap permasalahan yang terjadi di lapangan dapat diselesaikan secara bersamaan.</p>\n', '2024-07-13 19:53:26', '2024-07-14 07:30:09'),
(22, 'Pemkab Purwakarta Bersama Masyarakat Gelar Shalat Idul Adha 1445 H', 'one-piece', '1720955419.jpg', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<p>Pemerintah Kabupetan (Pemkab) Purwakarta bersama masyarakat melaksanakan Shalat Idul Adha 1445 Hijriah di halaman Masjid Agung Baing Yusuf, Senin 17 Juni 2024.\r\n\r\nPenjabat Bupati Purwakarta, Benni Irwan menyampaikan pesan, atas nama Pemerintah Kabupaten Purwakarta, Benni mengucapkan selamat Hari Raya Idul Adha dan selamat menunaikan ibadah kurban kepada segenap kaum muslimin dan muslimat di Kabupaten Purwakarta.</p>\n', '2024-07-14 03:27:58', '2024-07-14 04:10:19'),
(24, 'Sambut 1 Muharam dan Meriahkan Hari Jadi Purwakarta, Pemkab Gelar Doa Bersama dan Pawai Obor', 'sambut-1-muharam-dan-meriahkan-hari-jadi-purwakarta-pemkab-gelar-doa-bersama-dan-pawai-obor', '1720956363.jpg', '<p>Pemerintah Kabupaten (Pemkab) Purwakarta, Jawa Barat menggelar doa bersama dan pawai obor dalam menyambut Tahun Baru Islam 1 Muharam 1446 Hijriah pada Sabtu 6 Juli 2024.\r\n\r\nSelain menyambut Tahun Baru Islam 1446 Hijriah, pawai obor dan doa bersama juga dilaksanakan guna memeriahkan peringatan Hari Jadi Purwakarta ke-193 dan Kabupaten Purwakarta ke-56 di tahun 2024.\r\n\r\nPelaksanaan doa bersama menyambut Tahun Baru Islam 1446 Hijriah digelar di Masjid Agung Baing Yusuf sedangkan untuk pawai obor peserta mulai berjalan kaki dari depan MPP Bale Madukara hingga ke perempatan Pemda Kabupaten Purwakarta.</p>\n', '2024-07-14 04:26:03', '2024-07-14 04:26:03');

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
(4, '2024_07_11_044302_create_blogs_table', 1);

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
('j3g7hzJGOe8gAjND4S4zbtiKOgPEH4Y7HGqaw1aC', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWVY1cUUyalhJYTFEbGluck01MmZ3M0FMOG9XMHpGdVRReXNiY05tMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nL2NyZWF0ZSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1721134376),
('x5Sc8olgMxQTwKYlgVZ72c3YyzN34kyJZdfm08QB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHlTWm1tc0ZNZjNjNnFmT0JjbmJ1QnVPTVFQalFjanFNZGZJS1FoUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1721025926);

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
(1, 'Kelompok1', 'Kelompok1@gmail.com', NULL, '$2y$12$X5i2OYz.8.MsfFdN8UeVveSApXsm9uM7AOCLfYQXHmHgNj2uHGKqS', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
