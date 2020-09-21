-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 06:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`id`, `room_id`, `booking_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 23, 1, 1, '2020-09-17 04:07:11', '2020-09-17 04:07:11'),
(2, 24, 2, 1, '2020-09-17 07:20:45', '2020-09-17 07:20:45'),
(3, 39, 3, 1, '2020-09-17 07:37:12', '2020-09-17 07:37:12'),
(4, 18, 4, 1, '2020-09-18 04:22:44', '2020-09-18 04:22:44'),
(5, 23, 5, 1, '2020-09-19 10:58:52', '2020-09-19 10:58:52'),
(6, 29, 6, 1, '2020-09-19 11:10:40', '2020-09-19 11:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `adult` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `checkin`, `checkout`, `adult`, `children`, `total`, `status`, `note`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2020-09-18', '2020-09-18', '2', '1', '65000', 1, 'kjhdryuiokpl', 7, '2020-09-17 04:07:11', '2020-09-20 21:02:32'),
(2, '2020-09-19', '2020-09-25', '2', '0', '70000', 1, 'asdf', 7, '2020-09-17 07:20:44', '2020-09-20 09:07:14'),
(3, '2020-09-25', '2020-09-29', '2', '1', '80000', 0, 'nice', 7, '2020-09-17 07:37:12', '2020-09-17 07:37:12'),
(4, '2020-09-17', '2020-09-19', '3', '1', '65000', 0, 'nice', 7, '2020-09-18 04:22:44', '2020-09-18 04:22:44'),
(5, '2020-09-12', '2020-09-13', '2', '2', '65000', 0, 'ewrdt', 7, '2020-09-19 10:58:52', '2020-09-19 10:58:52'),
(6, '2020-09-26', '2020-09-25', '2', '1', '75000', 0, 'rtyui', 8, '2020-09-19 11:10:40', '2020-09-19 11:10:40'),
(7, '2020-09-18', '2020-09-19', '1', '1', '130000', 0, 'asdfgnm', 8, '2020-09-19 20:47:10', '2020-09-19 20:47:10'),
(8, '2020-09-25', '2020-09-29', '2', '1', '260000', 0, 'vbnmzxc', 8, '2020-09-19 20:49:37', '2020-09-19 20:49:37'),
(9, '2020-09-24', '2020-09-27', '2', '1', '210000', 0, 'nice to meet you', 8, '2020-09-19 20:54:10', '2020-09-19 20:54:10'),
(10, '2020-09-25', '2020-09-27', '2', '1', '130000', 1, 'beautiful', 6, '2020-09-19 21:28:40', '2020-09-20 09:03:38'),
(11, '2020-09-08', '2020-09-13', '2', '1', '375000', 1, 'bny', 6, '2020-09-19 21:40:16', '2020-09-20 09:04:15'),
(12, '2020-09-18', '2020-09-22', '2', '1', '260000', 1, 'dfhgjhkjk', 6, '2020-09-20 09:32:22', '2020-09-20 21:18:42'),
(13, '2020-09-17', '2020-09-19', '2', '1', '130000', 0, 'beautiful room', 6, '2020-09-20 21:30:33', '2020-09-20 21:30:33');

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
(4, '2020_09_13_030917_create_roomtypes_table', 1),
(6, '2020_09_13_031106_create_services_table', 1),
(9, '2020_09_14_050636_create_room_service_table', 3),
(10, '2020_09_14_054416_create_rooms_table', 4),
(11, '2020_09_13_031130_create_bookings_table', 5),
(12, '2020_09_13_031157_create_bookingdetails_table', 5),
(13, '2020_09_14_054418_create_permission_tables', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 6),
(1, 'App\\User', 7),
(1, 'App\\User', 8),
(2, 'App\\User', 5);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Customer', 'web', '2020-09-16 21:42:04', '2020-09-16 21:42:04'),
(2, 'Admin', 'web', '2020-09-16 21:42:04', '2020-09-16 21:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomtype_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `price`, `photo`, `description`, `roomtype_id`, `created_at`, `updated_at`) VALUES
(17, 'DELUXE ROOM', 60000, 'backend/roomimg/1600151376.jpeg', 'From 30m² in size, the Deluxe Room comes in king-size or twin bed configurations and is equipped with a large ergonomic working area for attending to all your business matters', 1, '2020-09-14 23:59:36', '2020-09-17 00:31:28'),
(18, 'DELUXE SUITE ROOM', 65000, 'backend/roomimg/1600151420.jpeg', 'The Deluxe Suite Room, with its separate living area, comfortable sofa, bathtub and rainfall shower experience will meet all your business and leisure requirements.From 70m² in size.', 1, '2020-09-15 00:00:20', '2020-09-17 00:31:50'),
(19, 'EXECUTIVE SUITE ROOM', 70000, 'backend/roomimg/1600151477.jpeg', 'Inclusive of breakfast and with access to our  fitness center, swimming pool and tennis court on the terrace.From 70m² in size.', 1, '2020-09-15 00:01:17', '2020-09-17 00:32:19'),
(20, 'PREMIER SUITE ROOM', 75000, 'backend/roomimg/1600259215.jpeg', 'At an expansive 95m², the well-appointed  Adjacent room sleeps six and is an ideal option for a family break, offering plenty of space in which to chill out together and enjoy the ‘suite life\'.', 1, '2020-09-15 00:01:51', '2020-09-17 00:32:45'),
(21, 'PRESIDENTIAL SUITE', 80000, 'backend/roomimg/1600221256.jpeg', 'An impressive 317m² in size, our sumptuous Adjoining room offers ample room and everything you could possibly wish for in a perfect home away from home.', 1, '2020-09-15 00:02:27', '2020-09-17 00:33:02'),
(22, 'DELUXE ROOM', 60000, 'backend/roomimg/1600153231.jpeg', 'From 30m² in size, the Master Room comes in king-size or twin bed configurations and is equipped with a large ergonomic working area for attending to all your business matters', 2, '2020-09-15 00:30:31', '2020-09-17 00:33:24'),
(23, 'DELUXE SUITE ROOM', 65000, 'backend/roomimg/1600153299.webp', 'The Deluxe Suite Room, with its separate living area, comfortable sofa, bathtub and rainfall shower experience will meet all your business and leisure requirements.From 70m² in size.', 2, '2020-09-15 00:31:39', '2020-09-17 00:33:43'),
(24, 'EXECUTIVE SUITE ROOM', 70000, 'backend/roomimg/1600153353.webp', 'Inclusive of breakfast and with access to our  fitness center, swimming pool and tennis court on the terrace.From 70m² in size.', 2, '2020-09-15 00:32:33', '2020-09-17 00:34:08'),
(25, 'PRESIDENTIAL SUITE', 75000, 'backend/roomimg/1600259145.jpeg', 'An impressive 317m² in size, our sumptuous PRESIDENTIAL SUITE ROOM offers ample room and everything you could possibly wish for in a perfect home away from home.', 2, '2020-09-15 00:33:20', '2020-09-17 00:34:29'),
(26, 'PREMIER SUITE ROOM', 65000, 'backend/roomimg/1600153435.jpeg', 'At an expansive 95m², the well-appointed PREMIER SUITE ROOM  sleeps six and is an ideal option for a family break, offering plenty of space in which to chill out together and enjoy the ‘suite life\'.', 2, '2020-09-15 00:33:55', '2020-09-17 00:35:09'),
(27, 'DELUXE ROOM', 60000, 'backend/roomimg/1600153505.jpeg', 'From 30m² in size, the Deluxe Room comes in king-size or twin bed configurations and is equipped with a large ergonomic working area for attending to all your business matters', 6, '2020-09-15 00:35:05', '2020-09-15 04:28:56'),
(28, 'DELUXE SUITE ROOM', 70000, 'backend/roomimg/1600175703.jpeg', 'The Deluxe Suite Room, with its separate living area, comfortable sofa, bathtub and rainfall shower experience will meet all your business and leisure requirements.From 70m² in size.', 6, '2020-09-15 00:35:45', '2020-09-17 00:38:29'),
(29, 'EXECUTIVE SUITE ROOM', 75000, 'backend/roomimg/1600153584.jpeg', 'Inclusive of breakfast and with access to our  fitness center, swimming pool and tennis court on the terrace.From 70m² in size.', 6, '2020-09-15 00:36:24', '2020-09-17 00:39:13'),
(30, 'PREMIER SUITE ROOM', 80000, 'backend/roomimg/1600175537.jpeg', 'At an expansive 95m², the well-appointed PREMIER SUITE ROOM sleeps six and is an ideal option for a family break, offering plenty of space in which to chill out together and enjoy the ‘suite life\'.', 6, '2020-09-15 00:36:59', '2020-09-17 00:39:45'),
(31, 'PRESIDENTIAL SUITE', 85000, 'backend/roomimg/1600153670.jpeg', 'An impressive 317m² in size, our sumptuous PRESIDENTIAL SUITE ROOM offers ample room and everything you could possibly wish for in a perfect home away from home.', 6, '2020-09-15 00:37:50', '2020-09-17 00:40:10'),
(32, 'DELUXE ROOM', 55000, 'backend/roomimg/1600153721.jpeg', 'From 30m² in size, the Deluxe Room comes in king-size or twin bed configurations and is equipped with a large ergonomic working area for attending to all your business matters', 11, '2020-09-15 00:38:41', '2020-09-17 00:40:34'),
(33, 'DELUXE SUITE ROOM', 60000, 'backend/roomimg/1600175756.jpeg', 'The Deluxe Suite Room, with its separate living area, comfortable sofa, bathtub and rainfall shower experience will meet all your business and leisure requirements.From 70m² in size.', 11, '2020-09-15 00:39:33', '2020-09-17 00:40:50'),
(34, 'EXECUTIVE SUITE ROOM', 65000, 'backend/roomimg/1600153818.jpeg', 'Inclusive of breakfast and with access to our  fitness center, swimming pool and tennis court on the terrace.From 70m² in size.', 11, '2020-09-15 00:40:18', '2020-09-17 00:41:18'),
(35, 'PREMIER SUITE ROOM', 70000, 'backend/roomimg/1600153853.jpeg', 'At an expansive 95m², the well-appointed  PREMIER SUITE ROOM sleeps six and is an ideal option for a family break, offering plenty of space in which to chill out together and enjoy the ‘suite life\'.', 11, '2020-09-15 00:40:53', '2020-09-17 00:41:41'),
(36, 'PRESIDENTIAL SUITE', 80000, 'backend/roomimg/1600153886.jpeg', 'An impressive 317m² in size, our sumptuous PRESIDENTIAL SUITE ROOM offers ample room and everything you could possibly wish for in a perfect home away from home.', 11, '2020-09-15 00:41:26', '2020-09-17 00:42:00'),
(37, 'DELUXE ROOM', 60000, 'backend/roomimg/1600153935.jpeg', 'From 30m² in size, the Deluxe Room comes in king-size or twin bed configurations and is equipped with a large ergonomic working area for attending to all your business matters', 12, '2020-09-15 00:42:15', '2020-09-15 04:31:18'),
(38, 'DELUXE SUITE ROOM', 70000, 'backend/roomimg/1600153988.jpeg', 'The Deluxe\r\n Suite Room, with its separate living area, comfortable sofa, bathtub and rainfall shower experience will meet all your business and leisure requirements.From 70m² in size.', 12, '2020-09-15 00:43:08', '2020-09-17 00:42:40'),
(39, 'EXECUTIVE SUITE ROOM', 80000, 'backend/roomimg/1600221472.jpeg', 'Inclusive of breakfast and with access to our  fitness center, swimming pool and tennis court on the terrace.From 70m² in size.', 12, '2020-09-15 00:44:13', '2020-09-17 00:43:13'),
(40, 'PREMIER SUITE ROOM', 85000, 'backend/roomimg/1600154107.webp', 'At an expansive 95m², the well-appointed PREMIER SUITE ROOM sleeps six and is an ideal option for a family break, offering plenty of space in which to chill out together and enjoy the ‘suite life\'.', 12, '2020-09-15 00:45:07', '2020-09-17 00:43:36'),
(41, 'PRESIDENTIAL SUITE', 90000, 'backend/roomimg/1600154147.jpeg', 'An impressive 317m² in size, our sumptuous PRESIDENTIAL SUITE ROOM offers ample room and everything you could possibly wish for in a perfect home away from home.', 12, '2020-09-15 00:45:47', '2020-09-17 00:44:01'),
(42, 'DELUXE ROOM', 55000, 'backend/roomimg/1600154184.png', 'From 30m² in size, the Deluxe Room comes in king-size or twin bed configurations and is equipped with a large ergonomic working area for attending to all your business matters', 13, '2020-09-15 00:46:24', '2020-09-17 00:44:28'),
(43, 'DELUXE SUITE ROOM', 65000, 'backend/roomimg/1600154226.jpeg', 'The Deluxe Suite Room, with its separate living area, comfortable sofa, bathtub and rainfall shower experience will meet all your business and leisure requirements.From 70m² in size.', 13, '2020-09-15 00:47:06', '2020-09-17 00:44:47'),
(44, 'PREMIER SUITE ROOM', 75000, 'backend/roomimg/1600154270.jpeg', 'At an expansive 95m², the well-appointed  PREMIER SUITE ROOM sleeps six and is an ideal option for a family break, offering plenty of space in which to chill out together and enjoy the ‘suite life\'.', 13, '2020-09-15 00:47:50', '2020-09-17 00:45:30'),
(45, 'PRESIDENTIAL SUITE', 90000, 'backend/roomimg/1600154296.jpeg', 'An impressive 317m² in size, our sumptuous PRESIDENTIAL SUITE ROOM offers ample room and everything you could possibly wish for in a perfect home away from home.', 13, '2020-09-15 00:48:16', '2020-09-17 00:46:14'),
(46, 'EXECUTIVE SUITE ROOM', 70000, 'backend/roomimg/1600154412.png', 'Inclusive of breakfast and with access to our  fitness center, swimming pool and tennis court on the terrace.From 70m² in size.', 13, '2020-09-15 00:50:12', '2020-09-17 00:46:49'),
(47, 'EXECUTIVE ROOM', 60000, 'backend/roomimg/1600167093.jpeg', 'Located on the higher floors, the 30m² Luxury Executive rooms offer a choice of either one king-size or two twin bed configurations, and in addition to all standard benefits provide superior amenities, an espresso machine and complimentary laundry service', 1, '2020-09-15 04:21:33', '2020-09-17 00:37:06'),
(48, 'SUPERIOR ROOM', 50000, 'backend/roomimg/1600259360.jpeg', 'With facilities including free high speed WiFi, satellite/cable TV, a working area, safety deposit box, Multimedia hub and blackout curtain, our stylish Superior room offers everything you could possibly and comfort during your stay in Yangon.', 1, '2020-09-15 04:24:13', '2020-09-17 00:30:16'),
(49, 'EXECUTIVE ROOM', 60000, 'backend/roomimg/1600221360.jpeg', 'Located on the higher floors, the 30m² Luxury Executive rooms offer a choice of either one king-size or two twin bed configurations, and in addition to all standard benefits provide superior amenities, an espresso machine and complimentary laundry service', 2, '2020-09-15 04:49:14', '2020-09-15 19:26:00'),
(50, 'EXECUTIVE ROOM', 60000, 'backend/roomimg/1600168807.jpeg', 'Located on the higher floors, the 30m² Luxury Executive rooms offer a choice of either one king-size or two twin bed configurations, and in addition to all standard benefits provide superior amenities, an espresso machine and complimentary laundry service', 6, '2020-09-15 04:50:07', '2020-09-15 04:50:07'),
(51, 'SUPERIOR ROOM', 55000, 'backend/roomimg/1600169132.jpeg', 'With facilities including free high speed WiFi, satellite/cable TV, a working area, safety deposit box, Multimedia hub and blackout curtain, our stylish Superior room offers everything you could possibly need for convenience', 2, '2020-09-15 04:55:32', '2020-09-17 00:30:58'),
(52, 'SUPERIOR ROOM', 60000, 'backend/roomimg/1600175573.jpeg', 'With facilities including free high speed WiFi, satellite/cable TV, a working area, safety deposit box, Multimedia hub and blackout curtain, our stylish Superior room offers everything you could possibly need for convenience', 6, '2020-09-15 04:56:18', '2020-09-15 06:42:53'),
(53, 'SUPERIOR ROOM', 60000, 'backend/roomimg/1600169222.jpeg', 'With facilities including free high speed WiFi, satellite/cable TV, a working area, safety deposit box, Multimedia hub and blackout curtain, our stylish Superior room offers everything you could possibly need for convenience', 11, '2020-09-15 04:57:02', '2020-09-17 00:36:08'),
(54, 'SUPERIOR ROOM', 55000, 'backend/roomimg/1600175921.jpeg', 'With facilities including free high speed WiFi, satellite/cable TV, a working area, safety deposit box, Multimedia hub and blackout curtain, our stylish Superior room offers everything you could possibly need for convenience', 12, '2020-09-15 04:57:53', '2020-09-17 00:36:27'),
(55, 'SUPERIOR ROOM', 55000, 'backend/roomimg/1600169310.jpeg', 'With facilities including free high speed WiFi, satellite/cable TV, a working area, safety deposit box, Multimedia hub and blackout curtain, our stylish Superior room offers everything you could possibly need for convenience', 13, '2020-09-15 04:58:30', '2020-09-15 04:58:30'),
(56, 'EXECUTIVE ROOM', 60000, 'backend/roomimg/1600259319.jpeg', 'Located on the higher floors, the 30m² Luxury Executive rooms offer a choice of either one king-size or two twin bed configurations, and in addition to all standard benefits provide superior amenities, an espresso machine and complimentary laundry service', 12, '2020-09-15 05:00:25', '2020-09-17 00:37:29'),
(57, 'EXECUTIVE ROOM', 55000, 'backend/roomimg/1600175811.jpeg', 'Located on the higher floors, the 30m² Luxury Executive rooms offer a choice of either one king-size or two twin bed configurations, and in addition to all standard benefits provide superior amenities, an espresso machine and complimentary laundry service', 11, '2020-09-15 05:01:52', '2020-09-17 00:37:46'),
(58, 'EXECUTIVE ROOM', 55000, 'backend/roomimg/1600169562.webp', 'Located on the higher floors, the 30m² Luxury Executive rooms offer a choice of either one king-size or two twin bed configurations, and in addition to all standard benefits provide superior amenities, an espresso machine and complimentary laundry service', 13, '2020-09-15 05:02:42', '2020-09-15 05:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `roomtypes`
--

CREATE TABLE `roomtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Single Room', 'backend/roomtypeimg/1600148337.jpeg', '2020-09-12 22:24:30', '2020-09-14 23:08:57'),
(2, 'Double Room', 'backend/roomtypeimg/1600148381.jpeg', '2020-09-12 22:24:31', '2020-09-14 23:09:41'),
(6, 'Triple Room', 'backend/roomtypeimg/1600148689.jpeg', '2020-09-13 01:36:00', '2020-09-14 23:14:49'),
(11, 'Double Double Room', 'backend/roomtypeimg/1600148041.jpeg', '2020-09-14 23:04:01', '2020-09-14 23:04:01'),
(12, 'Studio Room', 'backend/roomtypeimg/1600148077.jpeg', '2020-09-14 23:04:37', '2020-09-14 23:04:37'),
(13, 'Quad Room', 'backend/roomtypeimg/1600148781.jpeg', '2020-09-14 23:12:54', '2020-09-14 23:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `room_service`
--

CREATE TABLE `room_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_service`
--

INSERT INTO `room_service` (`id`, `room_id`, `service_id`, `created_at`, `updated_at`) VALUES
(54, 17, 1, NULL, NULL),
(55, 17, 2, NULL, NULL),
(57, 17, 4, NULL, NULL),
(60, 18, 1, NULL, NULL),
(61, 18, 2, NULL, NULL),
(63, 18, 4, NULL, NULL),
(64, 18, 6, NULL, NULL),
(66, 19, 1, NULL, NULL),
(67, 19, 2, NULL, NULL),
(69, 19, 4, NULL, NULL),
(70, 19, 6, NULL, NULL),
(71, 20, 1, NULL, NULL),
(72, 20, 2, NULL, NULL),
(74, 20, 4, NULL, NULL),
(75, 20, 6, NULL, NULL),
(76, 21, 1, NULL, NULL),
(77, 21, 2, NULL, NULL),
(79, 21, 4, NULL, NULL),
(80, 21, 6, NULL, NULL),
(81, 22, 2, NULL, NULL),
(83, 22, 4, NULL, NULL),
(84, 22, 6, NULL, NULL),
(86, 23, 4, NULL, NULL),
(87, 23, 6, NULL, NULL),
(88, 23, 7, NULL, NULL),
(89, 24, 2, NULL, NULL),
(91, 24, 6, NULL, NULL),
(92, 24, 7, NULL, NULL),
(93, 25, 1, NULL, NULL),
(94, 25, 2, NULL, NULL),
(96, 25, 4, NULL, NULL),
(97, 25, 6, NULL, NULL),
(99, 26, 4, NULL, NULL),
(100, 26, 6, NULL, NULL),
(101, 26, 7, NULL, NULL),
(102, 27, 2, NULL, NULL),
(104, 27, 4, NULL, NULL),
(105, 27, 6, NULL, NULL),
(106, 28, 2, NULL, NULL),
(107, 28, 4, NULL, NULL),
(108, 28, 6, NULL, NULL),
(109, 28, 7, NULL, NULL),
(111, 29, 6, NULL, NULL),
(112, 29, 7, NULL, NULL),
(113, 30, 1, NULL, NULL),
(114, 30, 2, NULL, NULL),
(116, 30, 6, NULL, NULL),
(117, 31, 1, NULL, NULL),
(118, 31, 2, NULL, NULL),
(120, 31, 6, NULL, NULL),
(121, 32, 1, NULL, NULL),
(123, 32, 4, NULL, NULL),
(124, 32, 6, NULL, NULL),
(126, 33, 4, NULL, NULL),
(127, 33, 6, NULL, NULL),
(128, 33, 7, NULL, NULL),
(129, 34, 1, NULL, NULL),
(130, 34, 2, NULL, NULL),
(132, 34, 6, NULL, NULL),
(134, 35, 4, NULL, NULL),
(135, 35, 6, NULL, NULL),
(136, 35, 7, NULL, NULL),
(137, 36, 2, NULL, NULL),
(139, 36, 6, NULL, NULL),
(140, 36, 7, NULL, NULL),
(141, 37, 1, NULL, NULL),
(142, 37, 2, NULL, NULL),
(144, 37, 4, NULL, NULL),
(145, 38, 1, NULL, NULL),
(146, 38, 2, NULL, NULL),
(147, 38, 4, NULL, NULL),
(148, 38, 7, NULL, NULL),
(149, 39, 1, NULL, NULL),
(151, 39, 4, NULL, NULL),
(152, 39, 6, NULL, NULL),
(153, 39, 7, NULL, NULL),
(154, 40, 4, NULL, NULL),
(155, 40, 6, NULL, NULL),
(156, 40, 7, NULL, NULL),
(157, 41, 1, NULL, NULL),
(158, 41, 2, NULL, NULL),
(160, 41, 4, NULL, NULL),
(161, 42, 2, NULL, NULL),
(162, 42, 4, NULL, NULL),
(163, 42, 7, NULL, NULL),
(164, 43, 1, NULL, NULL),
(165, 43, 2, NULL, NULL),
(167, 43, 4, NULL, NULL),
(168, 44, 1, NULL, NULL),
(169, 44, 2, NULL, NULL),
(171, 44, 4, NULL, NULL),
(173, 45, 4, NULL, NULL),
(174, 45, 6, NULL, NULL),
(175, 46, 1, NULL, NULL),
(176, 46, 2, NULL, NULL),
(178, 46, 4, NULL, NULL),
(179, 47, 1, NULL, NULL),
(180, 47, 2, NULL, NULL),
(182, 47, 4, NULL, NULL),
(183, 47, 6, NULL, NULL),
(184, 48, 2, NULL, NULL),
(186, 48, 4, NULL, NULL),
(188, 49, 4, NULL, NULL),
(189, 49, 6, NULL, NULL),
(191, 50, 4, NULL, NULL),
(192, 50, 6, NULL, NULL),
(193, 51, 2, NULL, NULL),
(194, 51, 4, NULL, NULL),
(195, 51, 6, NULL, NULL),
(197, 52, 4, NULL, NULL),
(198, 52, 6, NULL, NULL),
(199, 53, 2, NULL, NULL),
(200, 53, 4, NULL, NULL),
(201, 53, 7, NULL, NULL),
(202, 54, 2, NULL, NULL),
(204, 54, 6, NULL, NULL),
(205, 55, 1, NULL, NULL),
(206, 55, 2, NULL, NULL),
(208, 55, 4, NULL, NULL),
(209, 56, 2, NULL, NULL),
(211, 56, 4, NULL, NULL),
(212, 57, 2, NULL, NULL),
(214, 57, 4, NULL, NULL),
(215, 58, 2, NULL, NULL),
(217, 58, 6, NULL, NULL),
(218, 19, 7, NULL, NULL),
(219, 20, 8, NULL, NULL),
(220, 21, 7, NULL, NULL),
(221, 21, 8, NULL, NULL),
(222, 23, 2, NULL, NULL),
(223, 24, 1, NULL, NULL),
(224, 24, 4, NULL, NULL),
(225, 25, 7, NULL, NULL),
(226, 25, 8, NULL, NULL),
(227, 26, 2, NULL, NULL),
(228, 52, 7, NULL, NULL),
(229, 54, 4, NULL, NULL),
(230, 56, 6, NULL, NULL),
(231, 29, 2, NULL, NULL),
(232, 29, 4, NULL, NULL),
(233, 29, 8, NULL, NULL),
(234, 30, 4, NULL, NULL),
(235, 30, 7, NULL, NULL),
(236, 31, 4, NULL, NULL),
(237, 31, 7, NULL, NULL),
(238, 31, 8, NULL, NULL),
(239, 33, 2, NULL, NULL),
(240, 34, 7, NULL, NULL),
(241, 35, 2, NULL, NULL),
(242, 35, 8, NULL, NULL),
(243, 36, 1, NULL, NULL),
(244, 36, 4, NULL, NULL),
(245, 36, 8, NULL, NULL),
(246, 39, 2, NULL, NULL),
(247, 40, 1, NULL, NULL),
(248, 40, 2, NULL, NULL),
(249, 40, 8, NULL, NULL),
(250, 41, 6, NULL, NULL),
(251, 41, 7, NULL, NULL),
(252, 41, 8, NULL, NULL),
(253, 43, 6, NULL, NULL),
(254, 44, 6, NULL, NULL),
(255, 44, 7, NULL, NULL),
(256, 45, 1, NULL, NULL),
(257, 45, 2, NULL, NULL),
(258, 45, 7, NULL, NULL),
(259, 45, 8, NULL, NULL),
(260, 46, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Car rental service', 'backend/serviceimg/1600257137.jpeg', '2020-09-12 22:27:07', '2020-09-16 05:23:33'),
(2, 'Catering service', 'backend/serviceimg/1600256967.jpeg', '2020-09-12 22:27:07', '2020-09-16 05:23:41'),
(4, 'Courier service', 'backend/serviceimg/1600255750.jpeg', '2020-09-12 22:27:07', '2020-09-16 05:23:47'),
(6, 'Doctor on call service', 'backend/serviceimg/1600255643.jpeg', '2020-09-13 02:07:36', '2020-09-16 05:23:09'),
(7, 'Dry cleaning service', 'backend/serviceimg/1600255544.jpeg', '2020-09-13 04:19:53', '2020-09-16 05:24:00'),
(8, 'Gift shop service', 'backend/serviceimg/1600256831.jpeg', '2020-09-16 05:17:11', '2020-09-16 05:24:14');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Minnie Lind', 'vjohnson@example.org', '2020-09-12 22:23:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PktUEzwSjs', '2020-09-12 22:23:59', '2020-09-12 22:23:59'),
(2, 'Addison Haag', 'kelvin00@example.com', '2020-09-12 22:23:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cSktHkK9jn', '2020-09-12 22:23:59', '2020-09-12 22:23:59'),
(3, 'Scotty Ondricka', 'greenholt.marcia@example.com', '2020-09-12 22:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aBuhD0aJsH', '2020-09-12 22:24:30', '2020-09-12 22:24:30'),
(4, 'Delbert Bogisich', 'jermain58@example.org', '2020-09-12 22:24:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MxhmpNeK48', '2020-09-12 22:24:30', '2020-09-12 22:24:30'),
(5, 'myint thein', 'myintkothein007@gmail.com', NULL, '$2y$10$dWN6H8rIjHlhMCa1X3qDceraPQ8m.jEKLshEhKDKoocIwR5f3jvF.', '6wAyAYZPWXrbUed2qkmvbAVeYpEvcxuNmsrXBPq1WkWZsVxNr0ySRFBycp13', '2020-09-14 09:31:35', '2020-09-14 09:31:35'),
(6, 'mgmg', 'mgmg@gmail.com', NULL, '$2y$10$2pQs8k8/4LT2F3.G5PBrPOc7qgxVievnCQ8Rm9X45ZKBfkEJQjd4y', NULL, '2020-09-16 21:50:47', '2020-09-16 21:50:47'),
(7, 'su', 'susu@gmail.com', NULL, '$2y$10$hfTqMMODF2T8eLZe3HrGRupSAPkBmscM6FaGSwQd19ecQV.M8/J7y', NULL, '2020-09-17 00:50:15', '2020-09-17 00:50:15'),
(8, 'mmu', 'mamaa@gmail.com', NULL, '$2y$10$ci7vGsZqTS17hGPuzC3cB.OOTfC.GPu1iZ6NFqU8Sgv.xjE3MTReq', NULL, '2020-09-19 10:10:55', '2020-09-19 10:10:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookingdetails_room_id_foreign` (`room_id`),
  ADD KEY `bookingdetails_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_roomtype_id_foreign` (`roomtype_id`);

--
-- Indexes for table `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_service`
--
ALTER TABLE `room_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_service_room_id_foreign` (`room_id`),
  ADD KEY `room_service_service_id_foreign` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `room_service`
--
ALTER TABLE `room_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD CONSTRAINT `bookingdetails_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookingdetails_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_roomtype_id_foreign` FOREIGN KEY (`roomtype_id`) REFERENCES `roomtypes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `room_service`
--
ALTER TABLE `room_service`
  ADD CONSTRAINT `room_service_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `room_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
