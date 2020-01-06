-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 04:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `league`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `work_start` time NOT NULL,
  `work_end` time NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `about_us` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `about_description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`id`, `name`, `year`) VALUES
(1, 'Egyptian League', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `url` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `name`, `url`) VALUES
(1, 'Leagues', 'league'),
(2, 'Teams', 'team'),
(3, 'Stadiums', 'stadium'),
(4, 'Messages', 'messages'),
(5, 'Contact us', 'contact-us');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_team` bigint(20) UNSIGNED NOT NULL,
  `away_team` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `stadium_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `match_details`
--

CREATE TABLE `match_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `winer` bigint(20) UNSIGNED NOT NULL,
  `loser` bigint(20) UNSIGNED NOT NULL,
  `result` tinyint(1) UNSIGNED NOT NULL,
  `winer_goals` tinyint(3) UNSIGNED NOT NULL,
  `loser_goals` tinyint(3) UNSIGNED NOT NULL,
  `matches_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `second_name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `subject` varchar(150) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '(no Subject)',
  `message` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `message_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `first_name`, `second_name`, `email`, `subject`, `message`, `message_status`) VALUES
(1, 'Abdo', 'Mohammed', 'ssoda3@gmail.com', 'ffffff', 'Helllooo theeeree test message', 1);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ssoda3@gmail.com', '$2y$10$HrR3uxlCBt05mHkm55IQn.R79tVQJFQxxGLZCaTp7D7wD65N012dG', '2019-10-05 23:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `stadium`
--

CREATE TABLE `stadium` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `stadium`
--

INSERT INTO `stadium` (`id`, `name`) VALUES
(1, 'Cairo'),
(2, 'Alexandria');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `num_of_players` tinyint(2) NOT NULL,
  `league_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `photo`, `num_of_players`, `league_id`) VALUES
(1, 'Zamalek SC', NULL, 23, 1),
(2, 'Al Ahly SC', NULL, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'abdo', 'ssoda3@gmail.com', NULL, '$2y$10$0UPuniIDrueOb93JQmT9/.CI/LIcsANyfEcqvIRodOT7TgXdBz2YS', 0, 'wfeYKDQWpCoxPXlodlARbW5DKj2mMNC5AD3NLlkwCt5elXD6IVnEWQs0WU1c', '2019-10-05 23:42:19', '2019-10-05 23:42:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `home_team` (`home_team`,`away_team`),
  ADD UNIQUE KEY `home_team_3` (`home_team`,`away_team`),
  ADD KEY `home_team_2` (`home_team`,`away_team`),
  ADD KEY `away_team_id` (`away_team`),
  ADD KEY `stadium_id` (`stadium_id`);

--
-- Indexes for table `match_details`
--
ALTER TABLE `match_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matches_id_2` (`matches_id`),
  ADD KEY `matches_id` (`matches_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `stadium`
--
ALTER TABLE `stadium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `league_id` (`league_id`);

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
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `league`
--
ALTER TABLE `league`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `match_details`
--
ALTER TABLE `match_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stadium`
--
ALTER TABLE `stadium`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_team` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `away_team_id` FOREIGN KEY (`away_team`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `home_team_id` FOREIGN KEY (`home_team`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `match_stadium` FOREIGN KEY (`stadium_id`) REFERENCES `stadium` (`id`);

--
-- Constraints for table `match_details`
--
ALTER TABLE `match_details`
  ADD CONSTRAINT `match_id` FOREIGN KEY (`matches_id`) REFERENCES `matches` (`id`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_belong_to_league` FOREIGN KEY (`league_id`) REFERENCES `league` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
