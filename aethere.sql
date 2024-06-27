-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2024 pada 02.07
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aethere`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(5, 'cekk', '2024-05-05 02:32:22', '2024-05-05 02:32:22'),
(6, 'cekks', '2024-05-05 02:32:29', '2024-05-05 02:32:29'),
(7, 'ww', '2024-05-05 02:32:49', '2024-05-05 02:32:49'),
(8, 'wws', '2024-05-05 02:32:55', '2024-05-05 02:32:55'),
(9, 'sssh', '2024-05-05 02:34:02', '2024-05-05 02:34:02'),
(10, 'ssshfff', '2024-05-05 02:34:12', '2024-05-05 02:34:12'),
(11, 'ff', '2024-05-05 02:34:51', '2024-05-05 02:34:51'),
(12, 'fffff', '2024-05-05 02:35:39', '2024-05-05 02:35:39'),
(13, 'lalal', '2024-05-05 02:36:07', '2024-05-05 02:36:07'),
(14, 'lalalddd', '2024-05-05 02:36:16', '2024-05-05 02:36:16'),
(15, 'kia', '2024-05-05 02:39:44', '2024-05-05 02:39:44'),
(16, 'kiala', '2024-05-05 02:39:49', '2024-05-05 02:39:49'),
(17, 'jkdndjshkjh', '2024-05-05 02:47:45', '2024-05-05 02:47:45'),
(18, 'jkdndjshkjhLLL', '2024-05-05 02:48:41', '2024-05-05 02:48:41'),
(19, 'mamali', '2024-05-05 02:50:12', '2024-05-05 02:50:17'),
(20, 'djhdkh;;;', '2024-05-05 02:53:37', '2024-05-05 02:53:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2024_05_05_080316_create_categories_table', 2),
(8, '2014_10_12_000000_create_users_table', 3),
(9, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(10, '2014_10_12_100000_create_password_resets_table', 3),
(11, '2019_08_19_000000_create_failed_jobs_table', 3),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(13, '2024_05_05_080435_create_products_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_foto` varchar(255) NOT NULL,
  `product_desc` varchar(5000) NOT NULL,
  `product_varian` varchar(255) NOT NULL,
  `product_varian_desc` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_foto`, `product_desc`, `product_varian`, `product_varian_desc`, `product_price`, `product_stock`, `created_at`, `updated_at`) VALUES
(1, 'Cushion', '1715039959.jpg', 'Cushion ini menawarkan berbagai macam pilihan shade yang tentunya sesuai dengan kulit orang Indonesia. Pilihan warna ini dibuat untuk mencocokkan berbagai jenis kulit, dari yang pucat hingga yang gelap, serta berbagai tone kulit, mulai dari yang warm hingga yang cool.', 'Shade', 'Ivory, Light, Bijoux', 117000, 150, '2024-05-06 10:53:03', '2024-05-06 16:59:19'),
(2, 'Lips Cream', '1715039392.jpg', 'Lip cream adalah produk pewarna bibir dengan tekstur yang cair namun sedikit kental atau creamy. Oleh sebab itu, biasanya lip cream juga sering disebut sebagai liquid lipstick atau lipstik cair.', 'Shade', 'Chic, Classy, Posh, Spark, Fancy', 70000, 200, '2024-05-06 10:54:28', '2024-05-06 16:49:52'),
(3, 'Eye Mascara', '1715039531.jpg', 'Maskara adalah kosmetik yang umumnya digunakan untuk memperindah mata. Fungsinya antara lain untuk mempergelap, mempertebal, memperpanjang, dan/atau memperjelas bulu mata.', 'Proof', 'Waterproof', 50000, 500, '2024-05-06 10:56:17', '2024-05-06 16:52:12'),
(4, 'Powder', '1715039631.jpg', 'Bedak sendiri adalah untuk menutupi kekurangan pada wajah hingga menyempurnakan makeup. Dengan bedak, kamu bisa meratakan warna kulit, menyamarkan noda pada kulit, menyerap minyak berlebih dan membuat wajah terlihat lebih mulus dan halus.', 'Shade', 'Ivory, Light', 20000, 100, '2024-05-06 10:58:02', '2024-05-06 16:53:51'),
(5, 'Blush On', '1715039715.jpg', 'Blush on atau perona pipi merupakan salah satu sediaan kosmetika yang digunakan untuk memberikan warna atau menambah estetika pada rias wajah. Perona pipi mengandung pigmen yang rendah hingga tinggi sehingga warna yang dihasilkan cenderung bervariasi.', 'Shade', 'Coral Peach, Sweet Salmon, Pink Candy', 23000, 100, '2024-05-06 16:55:15', '2024-05-06 16:55:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Athalia Athea', 'admin@aethre.com', NULL, '$2y$10$oUiNVVvx2sm3dEEQYMgA0uO4a7hs2iwlip345PhcJ3Sp1cFPpJqKa', NULL, '2024-05-06 10:38:18', '2024-05-06 10:38:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
