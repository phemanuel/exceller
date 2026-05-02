-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2026 at 03:59 PM
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
-- Database: `exceller`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_sessions`
--

CREATE TABLE `academic_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session1` varchar(255) NOT NULL,
  `status` enum('active','Inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_sessions`
--

INSERT INTO `academic_sessions` (`id`, `session1`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022/2023', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(2, '2023/2024', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(3, '2024/2025', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(4, '2025/2026', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(5, '2026/2027', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(6, '2027/2028', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(7, '2028/2029', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(8, '2029/2030', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(9, '2030/2031', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(10, '2031/2032', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(11, '2032/2033', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(12, '2033/2034', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(13, '2034/2035', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(14, '2035/2036', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(15, '2036/2037', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(16, '2037/2038', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(17, '2038/2039', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38'),
(18, '2039/2040', 'active', '2024-05-09 20:12:38', '2024-05-09 20:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `cbt_classes`
--

CREATE TABLE `cbt_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cbt_classes`
--

INSERT INTO `cbt_classes` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, '100', '2024-05-10 03:35:58', '2024-05-10 03:35:58'),
(2, '200', '2024-05-10 03:36:05', '2024-05-10 03:36:05'),
(3, '300', '2024-05-10 03:36:10', '2024-05-10 03:36:10'),
(4, 'NDI', '2024-05-10 03:36:16', '2024-05-10 03:36:16'),
(5, 'NDII', '2024-05-10 03:36:22', '2024-05-10 03:36:22'),
(6, 'HNDI', '2024-05-10 03:36:27', '2024-05-10 03:36:27'),
(7, 'HNDII', '2024-05-10 03:36:33', '2024-05-10 03:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `cbt_evaluation1`
--

CREATE TABLE `cbt_evaluation1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `examstatus` text DEFAULT NULL,
  `studentname` text DEFAULT NULL,
  `correct` text DEFAULT NULL,
  `noofquestion` text DEFAULT NULL,
  `wrong` text DEFAULT NULL,
  `studentno` text DEFAULT NULL,
  `score` text DEFAULT NULL,
  `level` text DEFAULT NULL,
  `session1` text DEFAULT NULL,
  `semester` text DEFAULT NULL,
  `hour` int(11) DEFAULT NULL,
  `minute` int(11) DEFAULT NULL,
  `qstno` text DEFAULT NULL,
  `OK1` text DEFAULT NULL,
  `OK2` text DEFAULT NULL,
  `OK3` text DEFAULT NULL,
  `OK4` text DEFAULT NULL,
  `OK5` text DEFAULT NULL,
  `OK6` text DEFAULT NULL,
  `OK7` text DEFAULT NULL,
  `OK8` text DEFAULT NULL,
  `OK9` text DEFAULT NULL,
  `OK10` text DEFAULT NULL,
  `OK11` text DEFAULT NULL,
  `OK12` text DEFAULT NULL,
  `OK13` text DEFAULT NULL,
  `OK14` text DEFAULT NULL,
  `OK15` text DEFAULT NULL,
  `OK16` text DEFAULT NULL,
  `OK17` text DEFAULT NULL,
  `OK18` text DEFAULT NULL,
  `OK19` text DEFAULT NULL,
  `OK20` text DEFAULT NULL,
  `OK21` text DEFAULT NULL,
  `OK22` text DEFAULT NULL,
  `OK23` text DEFAULT NULL,
  `OK24` text DEFAULT NULL,
  `OK25` text DEFAULT NULL,
  `OK26` text DEFAULT NULL,
  `OK27` text DEFAULT NULL,
  `OK28` text DEFAULT NULL,
  `OK29` text DEFAULT NULL,
  `OK30` text DEFAULT NULL,
  `OK31` text DEFAULT NULL,
  `OK32` text DEFAULT NULL,
  `OK33` text DEFAULT NULL,
  `OK34` text DEFAULT NULL,
  `OK35` text DEFAULT NULL,
  `OK36` text DEFAULT NULL,
  `OK37` text DEFAULT NULL,
  `OK38` text DEFAULT NULL,
  `OK39` text DEFAULT NULL,
  `OK40` text DEFAULT NULL,
  `OK41` text DEFAULT NULL,
  `OK42` text DEFAULT NULL,
  `OK43` text DEFAULT NULL,
  `OK44` text DEFAULT NULL,
  `OK45` text DEFAULT NULL,
  `OK46` text DEFAULT NULL,
  `OK47` text DEFAULT NULL,
  `OK48` text DEFAULT NULL,
  `OK49` text DEFAULT NULL,
  `OK50` text DEFAULT NULL,
  `OK51` text DEFAULT NULL,
  `OK52` text DEFAULT NULL,
  `OK53` text DEFAULT NULL,
  `OK54` text DEFAULT NULL,
  `OK55` text DEFAULT NULL,
  `OK56` text DEFAULT NULL,
  `OK57` text DEFAULT NULL,
  `OK58` text DEFAULT NULL,
  `OK59` text DEFAULT NULL,
  `OK60` text DEFAULT NULL,
  `OK61` text DEFAULT NULL,
  `OK62` text DEFAULT NULL,
  `OK63` text DEFAULT NULL,
  `OK64` text DEFAULT NULL,
  `OK65` text DEFAULT NULL,
  `OK66` text DEFAULT NULL,
  `OK67` text DEFAULT NULL,
  `OK68` text DEFAULT NULL,
  `OK69` text DEFAULT NULL,
  `OK70` text DEFAULT NULL,
  `OK71` text DEFAULT NULL,
  `OK72` text DEFAULT NULL,
  `OK73` text DEFAULT NULL,
  `OK74` text DEFAULT NULL,
  `OK75` text DEFAULT NULL,
  `OK76` text DEFAULT NULL,
  `OK77` text DEFAULT NULL,
  `OK78` text DEFAULT NULL,
  `OK79` text DEFAULT NULL,
  `OK80` text DEFAULT NULL,
  `OK81` text DEFAULT NULL,
  `OK82` text DEFAULT NULL,
  `OK83` text DEFAULT NULL,
  `OK84` text DEFAULT NULL,
  `OK85` text DEFAULT NULL,
  `OK86` text DEFAULT NULL,
  `OK87` text DEFAULT NULL,
  `OK88` text DEFAULT NULL,
  `OK89` text DEFAULT NULL,
  `OK90` text DEFAULT NULL,
  `OK91` text DEFAULT NULL,
  `OK92` text DEFAULT NULL,
  `OK93` text DEFAULT NULL,
  `OK94` text DEFAULT NULL,
  `OK95` text DEFAULT NULL,
  `OK96` text DEFAULT NULL,
  `OK97` text DEFAULT NULL,
  `OK98` text DEFAULT NULL,
  `OK99` text DEFAULT NULL,
  `OK100` text DEFAULT NULL,
  `OK101` text DEFAULT NULL,
  `OK102` text DEFAULT NULL,
  `OK103` text DEFAULT NULL,
  `OK104` text DEFAULT NULL,
  `OK105` text DEFAULT NULL,
  `OK106` text DEFAULT NULL,
  `OK107` text DEFAULT NULL,
  `OK108` text DEFAULT NULL,
  `OK109` text DEFAULT NULL,
  `OK110` text DEFAULT NULL,
  `OK111` text DEFAULT NULL,
  `OK112` text DEFAULT NULL,
  `OK113` text DEFAULT NULL,
  `OK114` text DEFAULT NULL,
  `OK115` text DEFAULT NULL,
  `OK116` text DEFAULT NULL,
  `OK117` text DEFAULT NULL,
  `OK118` text DEFAULT NULL,
  `OK119` text DEFAULT NULL,
  `OK120` text DEFAULT NULL,
  `OK121` text DEFAULT NULL,
  `OK122` text DEFAULT NULL,
  `OK123` text DEFAULT NULL,
  `OK124` text DEFAULT NULL,
  `OK125` text DEFAULT NULL,
  `OK126` text DEFAULT NULL,
  `OK127` text DEFAULT NULL,
  `OK128` text DEFAULT NULL,
  `OK129` text DEFAULT NULL,
  `OK130` text DEFAULT NULL,
  `OK131` text DEFAULT NULL,
  `OK132` text DEFAULT NULL,
  `OK133` text DEFAULT NULL,
  `OK134` text DEFAULT NULL,
  `OK135` text DEFAULT NULL,
  `OK136` text DEFAULT NULL,
  `OK137` text DEFAULT NULL,
  `OK138` text DEFAULT NULL,
  `OK139` text DEFAULT NULL,
  `OK140` text DEFAULT NULL,
  `OK141` text DEFAULT NULL,
  `OK142` text DEFAULT NULL,
  `OK143` text DEFAULT NULL,
  `OK144` text DEFAULT NULL,
  `OK145` text DEFAULT NULL,
  `OK146` text DEFAULT NULL,
  `OK147` text DEFAULT NULL,
  `OK148` text DEFAULT NULL,
  `OK149` text DEFAULT NULL,
  `OK150` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `exam_mode` text DEFAULT NULL,
  `exam_category` text DEFAULT NULL,
  `course` text DEFAULT NULL,
  `pageno` text DEFAULT NULL,
  `examdate` datetime DEFAULT NULL,
  `exam_type` text DEFAULT NULL,
  `msgstatus` text DEFAULT NULL,
  `starttime` datetime NOT NULL,
  `endtime` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cbt_evaluation2`
--

CREATE TABLE `cbt_evaluation2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `examstatus` text DEFAULT NULL,
  `studentname` text DEFAULT NULL,
  `correct` text DEFAULT NULL,
  `noofquestion` text DEFAULT NULL,
  `wrong` text DEFAULT NULL,
  `studentno` text DEFAULT NULL,
  `score` text DEFAULT NULL,
  `level` text DEFAULT NULL,
  `session1` text DEFAULT NULL,
  `semester` text DEFAULT NULL,
  `hour` int(11) DEFAULT NULL,
  `minute` int(11) DEFAULT NULL,
  `qstno` text DEFAULT NULL,
  `OK1` text DEFAULT NULL,
  `OK2` text DEFAULT NULL,
  `OK3` text DEFAULT NULL,
  `OK4` text DEFAULT NULL,
  `OK5` text DEFAULT NULL,
  `OK6` text DEFAULT NULL,
  `OK7` text DEFAULT NULL,
  `OK8` text DEFAULT NULL,
  `OK9` text DEFAULT NULL,
  `OK10` text DEFAULT NULL,
  `OK11` text DEFAULT NULL,
  `OK12` text DEFAULT NULL,
  `OK13` text DEFAULT NULL,
  `OK14` text DEFAULT NULL,
  `OK15` text DEFAULT NULL,
  `OK16` text DEFAULT NULL,
  `OK17` text DEFAULT NULL,
  `OK18` text DEFAULT NULL,
  `OK19` text DEFAULT NULL,
  `OK20` text DEFAULT NULL,
  `OK21` text DEFAULT NULL,
  `OK22` text DEFAULT NULL,
  `OK23` text DEFAULT NULL,
  `OK24` text DEFAULT NULL,
  `OK25` text DEFAULT NULL,
  `OK26` text DEFAULT NULL,
  `OK27` text DEFAULT NULL,
  `OK28` text DEFAULT NULL,
  `OK29` text DEFAULT NULL,
  `OK30` text DEFAULT NULL,
  `OK31` text DEFAULT NULL,
  `OK32` text DEFAULT NULL,
  `OK33` text DEFAULT NULL,
  `OK34` text DEFAULT NULL,
  `OK35` text DEFAULT NULL,
  `OK36` text DEFAULT NULL,
  `OK37` text DEFAULT NULL,
  `OK38` text DEFAULT NULL,
  `OK39` text DEFAULT NULL,
  `OK40` text DEFAULT NULL,
  `OK41` text DEFAULT NULL,
  `OK42` text DEFAULT NULL,
  `OK43` text DEFAULT NULL,
  `OK44` text DEFAULT NULL,
  `OK45` text DEFAULT NULL,
  `OK46` text DEFAULT NULL,
  `OK47` text DEFAULT NULL,
  `OK48` text DEFAULT NULL,
  `OK49` text DEFAULT NULL,
  `OK50` text DEFAULT NULL,
  `OK51` text DEFAULT NULL,
  `OK52` text DEFAULT NULL,
  `OK53` text DEFAULT NULL,
  `OK54` text DEFAULT NULL,
  `OK55` text DEFAULT NULL,
  `OK56` text DEFAULT NULL,
  `OK57` text DEFAULT NULL,
  `OK58` text DEFAULT NULL,
  `OK59` text DEFAULT NULL,
  `OK60` text DEFAULT NULL,
  `OK61` text DEFAULT NULL,
  `OK62` text DEFAULT NULL,
  `OK63` text DEFAULT NULL,
  `OK64` text DEFAULT NULL,
  `OK65` text DEFAULT NULL,
  `OK66` text DEFAULT NULL,
  `OK67` text DEFAULT NULL,
  `OK68` text DEFAULT NULL,
  `OK69` text DEFAULT NULL,
  `OK70` text DEFAULT NULL,
  `OK71` text DEFAULT NULL,
  `OK72` text DEFAULT NULL,
  `OK73` text DEFAULT NULL,
  `OK74` text DEFAULT NULL,
  `OK75` text DEFAULT NULL,
  `OK76` text DEFAULT NULL,
  `OK77` text DEFAULT NULL,
  `OK78` text DEFAULT NULL,
  `OK79` text DEFAULT NULL,
  `OK80` text DEFAULT NULL,
  `OK81` text DEFAULT NULL,
  `OK82` text DEFAULT NULL,
  `OK83` text DEFAULT NULL,
  `OK84` text DEFAULT NULL,
  `OK85` text DEFAULT NULL,
  `OK86` text DEFAULT NULL,
  `OK87` text DEFAULT NULL,
  `OK88` text DEFAULT NULL,
  `OK89` text DEFAULT NULL,
  `OK90` text DEFAULT NULL,
  `OK91` text DEFAULT NULL,
  `OK92` text DEFAULT NULL,
  `OK93` text DEFAULT NULL,
  `OK94` text DEFAULT NULL,
  `OK95` text DEFAULT NULL,
  `OK96` text DEFAULT NULL,
  `OK97` text DEFAULT NULL,
  `OK98` text DEFAULT NULL,
  `OK99` text DEFAULT NULL,
  `OK100` text DEFAULT NULL,
  `OK101` text DEFAULT NULL,
  `OK102` text DEFAULT NULL,
  `OK103` text DEFAULT NULL,
  `OK104` text DEFAULT NULL,
  `OK105` text DEFAULT NULL,
  `OK106` text DEFAULT NULL,
  `OK107` text DEFAULT NULL,
  `OK108` text DEFAULT NULL,
  `OK109` text DEFAULT NULL,
  `OK110` text DEFAULT NULL,
  `OK111` text DEFAULT NULL,
  `OK112` text DEFAULT NULL,
  `OK113` text DEFAULT NULL,
  `OK114` text DEFAULT NULL,
  `OK115` text DEFAULT NULL,
  `OK116` text DEFAULT NULL,
  `OK117` text DEFAULT NULL,
  `OK118` text DEFAULT NULL,
  `OK119` text DEFAULT NULL,
  `OK120` text DEFAULT NULL,
  `OK121` text DEFAULT NULL,
  `OK122` text DEFAULT NULL,
  `OK123` text DEFAULT NULL,
  `OK124` text DEFAULT NULL,
  `OK125` text DEFAULT NULL,
  `OK126` text DEFAULT NULL,
  `OK127` text DEFAULT NULL,
  `OK128` text DEFAULT NULL,
  `OK129` text DEFAULT NULL,
  `OK130` text DEFAULT NULL,
  `OK131` text DEFAULT NULL,
  `OK132` text DEFAULT NULL,
  `OK133` text DEFAULT NULL,
  `OK134` text DEFAULT NULL,
  `OK135` text DEFAULT NULL,
  `OK136` text DEFAULT NULL,
  `OK137` text DEFAULT NULL,
  `OK138` text DEFAULT NULL,
  `OK139` text DEFAULT NULL,
  `OK140` text DEFAULT NULL,
  `OK141` text DEFAULT NULL,
  `OK142` text DEFAULT NULL,
  `OK143` text DEFAULT NULL,
  `OK144` text DEFAULT NULL,
  `OK145` text DEFAULT NULL,
  `OK146` text DEFAULT NULL,
  `OK147` text DEFAULT NULL,
  `OK148` text DEFAULT NULL,
  `OK149` text DEFAULT NULL,
  `OK150` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `exam_mode` text DEFAULT NULL,
  `exam_category` text DEFAULT NULL,
  `course` text DEFAULT NULL,
  `pageno` text DEFAULT NULL,
  `examdate` datetime DEFAULT NULL,
  `exam_type` text DEFAULT NULL,
  `msgstatus` text DEFAULT NULL,
  `starttime` datetime NOT NULL,
  `endtime` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cbt_evaluations`
--

CREATE TABLE `cbt_evaluations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `examstatus` varchar(255) DEFAULT NULL,
  `studentname` varchar(255) DEFAULT NULL,
  `correct` varchar(255) DEFAULT NULL,
  `noofquestion` varchar(255) DEFAULT NULL,
  `wrong` varchar(255) DEFAULT NULL,
  `studentno` varchar(255) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `session1` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `hour` int(11) DEFAULT NULL,
  `minute` int(11) DEFAULT NULL,
  `qstno` varchar(255) DEFAULT NULL,
  `A1` int(11) DEFAULT NULL,
  `A2` int(11) DEFAULT NULL,
  `A3` int(11) DEFAULT NULL,
  `A4` int(11) DEFAULT NULL,
  `A5` int(11) DEFAULT NULL,
  `A6` int(11) DEFAULT NULL,
  `A7` int(11) DEFAULT NULL,
  `A8` int(11) DEFAULT NULL,
  `A9` int(11) DEFAULT NULL,
  `A10` int(11) DEFAULT NULL,
  `A11` int(11) DEFAULT NULL,
  `A12` int(11) DEFAULT NULL,
  `A13` int(11) DEFAULT NULL,
  `A14` int(11) DEFAULT NULL,
  `A15` int(11) DEFAULT NULL,
  `A16` int(11) DEFAULT NULL,
  `A17` int(11) DEFAULT NULL,
  `A18` int(11) DEFAULT NULL,
  `A19` int(11) DEFAULT NULL,
  `A20` int(11) DEFAULT NULL,
  `A21` int(11) DEFAULT NULL,
  `A22` int(11) DEFAULT NULL,
  `A23` int(11) DEFAULT NULL,
  `A24` int(11) DEFAULT NULL,
  `A25` int(11) DEFAULT NULL,
  `A26` int(11) DEFAULT NULL,
  `A27` int(11) DEFAULT NULL,
  `A28` int(11) DEFAULT NULL,
  `A29` int(11) DEFAULT NULL,
  `A30` int(11) DEFAULT NULL,
  `A31` int(11) DEFAULT NULL,
  `A32` int(11) DEFAULT NULL,
  `A33` int(11) DEFAULT NULL,
  `A34` int(11) DEFAULT NULL,
  `A35` int(11) DEFAULT NULL,
  `A36` int(11) DEFAULT NULL,
  `A37` int(11) DEFAULT NULL,
  `A38` int(11) DEFAULT NULL,
  `A39` int(11) DEFAULT NULL,
  `A40` int(11) DEFAULT NULL,
  `A41` int(11) DEFAULT NULL,
  `A42` int(11) DEFAULT NULL,
  `A43` int(11) DEFAULT NULL,
  `A44` int(11) DEFAULT NULL,
  `A45` int(11) DEFAULT NULL,
  `A46` int(11) DEFAULT NULL,
  `A47` int(11) DEFAULT NULL,
  `A48` int(11) DEFAULT NULL,
  `A49` int(11) DEFAULT NULL,
  `A50` int(11) DEFAULT NULL,
  `A51` int(11) DEFAULT NULL,
  `A52` int(11) DEFAULT NULL,
  `A53` int(11) DEFAULT NULL,
  `A54` int(11) DEFAULT NULL,
  `A55` int(11) DEFAULT NULL,
  `A56` int(11) DEFAULT NULL,
  `A57` int(11) DEFAULT NULL,
  `A58` int(11) DEFAULT NULL,
  `A59` int(11) DEFAULT NULL,
  `A60` int(11) DEFAULT NULL,
  `A61` int(11) DEFAULT NULL,
  `A62` int(11) DEFAULT NULL,
  `A63` int(11) DEFAULT NULL,
  `A64` int(11) DEFAULT NULL,
  `A65` int(11) DEFAULT NULL,
  `A66` int(11) DEFAULT NULL,
  `A67` int(11) DEFAULT NULL,
  `A68` int(11) DEFAULT NULL,
  `A69` int(11) DEFAULT NULL,
  `A70` int(11) DEFAULT NULL,
  `A71` int(11) DEFAULT NULL,
  `A72` int(11) DEFAULT NULL,
  `A73` int(11) DEFAULT NULL,
  `A74` int(11) DEFAULT NULL,
  `A75` int(11) DEFAULT NULL,
  `A76` int(11) DEFAULT NULL,
  `A77` int(11) DEFAULT NULL,
  `A78` int(11) DEFAULT NULL,
  `A79` int(11) DEFAULT NULL,
  `A80` int(11) DEFAULT NULL,
  `A81` int(11) DEFAULT NULL,
  `A82` int(11) DEFAULT NULL,
  `A83` int(11) DEFAULT NULL,
  `A84` int(11) DEFAULT NULL,
  `A85` int(11) DEFAULT NULL,
  `A86` int(11) DEFAULT NULL,
  `A87` int(11) DEFAULT NULL,
  `A88` int(11) DEFAULT NULL,
  `A89` int(11) DEFAULT NULL,
  `A90` int(11) DEFAULT NULL,
  `A91` int(11) DEFAULT NULL,
  `A92` int(11) DEFAULT NULL,
  `A93` int(11) DEFAULT NULL,
  `A94` int(11) DEFAULT NULL,
  `A95` int(11) DEFAULT NULL,
  `A96` int(11) DEFAULT NULL,
  `A97` int(11) DEFAULT NULL,
  `A98` int(11) DEFAULT NULL,
  `A99` int(11) DEFAULT NULL,
  `A100` int(11) DEFAULT NULL,
  `A101` int(11) DEFAULT NULL,
  `A102` int(11) DEFAULT NULL,
  `A103` int(11) DEFAULT NULL,
  `A104` int(11) DEFAULT NULL,
  `A105` int(11) DEFAULT NULL,
  `A106` int(11) DEFAULT NULL,
  `A107` int(11) DEFAULT NULL,
  `A108` int(11) DEFAULT NULL,
  `A109` int(11) DEFAULT NULL,
  `A110` int(11) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `exam_mode` varchar(255) DEFAULT NULL,
  `exam_category` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `pageno` varchar(255) DEFAULT NULL,
  `examdate` datetime DEFAULT NULL,
  `exam_type` varchar(255) DEFAULT NULL,
  `msgstatus` varchar(255) DEFAULT NULL,
  `starttime` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `A111` int(11) DEFAULT NULL,
  `A112` int(11) DEFAULT NULL,
  `A113` int(11) DEFAULT NULL,
  `A114` int(11) DEFAULT NULL,
  `A115` int(11) DEFAULT NULL,
  `A116` int(11) DEFAULT NULL,
  `A117` int(11) DEFAULT NULL,
  `A118` int(11) DEFAULT NULL,
  `A119` int(11) DEFAULT NULL,
  `A120` int(11) DEFAULT NULL,
  `A121` int(11) DEFAULT NULL,
  `A122` int(11) DEFAULT NULL,
  `A123` int(11) DEFAULT NULL,
  `A124` int(11) DEFAULT NULL,
  `A125` int(11) DEFAULT NULL,
  `A126` int(11) DEFAULT NULL,
  `A127` int(11) DEFAULT NULL,
  `A128` int(11) DEFAULT NULL,
  `A129` int(11) DEFAULT NULL,
  `A130` int(11) DEFAULT NULL,
  `A131` int(11) DEFAULT NULL,
  `A132` int(11) DEFAULT NULL,
  `A133` int(11) DEFAULT NULL,
  `A134` int(11) DEFAULT NULL,
  `A135` int(11) DEFAULT NULL,
  `A136` int(11) DEFAULT NULL,
  `A137` int(11) DEFAULT NULL,
  `A138` int(11) DEFAULT NULL,
  `A139` int(11) DEFAULT NULL,
  `A140` int(11) DEFAULT NULL,
  `A141` int(11) DEFAULT NULL,
  `A142` int(11) DEFAULT NULL,
  `A143` int(11) DEFAULT NULL,
  `A144` int(11) DEFAULT NULL,
  `A145` int(11) DEFAULT NULL,
  `A146` int(11) DEFAULT NULL,
  `A147` int(11) DEFAULT NULL,
  `A148` int(11) DEFAULT NULL,
  `A149` int(11) DEFAULT NULL,
  `A150` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `college_setups`
--

CREATE TABLE `college_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `web_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college_setups`
--

INSERT INTO `college_setups` (`id`, `name`, `email`, `avatar`, `phone`, `address`, `web_url`, `created_at`, `updated_at`) VALUES
(1, 'Exceller Global Institute', 'info@excellerglobal.com', 'college/avatar.png', '08035882299', 'Beside fan-milk, Eleyele,Ibadan, Oyo State', 'http://excellerglobal.com', '2024-05-10 02:04:36', '2026-01-29 13:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `programme` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `programme`, `level`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Anatomy and Psychology I', 'Community Health', '100', 'Anatomy and Psychology I', '2026-04-16 12:07:10', '2026-04-16 12:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `course_materials`
--

CREATE TABLE `course_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_module_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` enum('pdf','video') NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_materials`
--

INSERT INTO `course_materials` (`id`, `course_module_id`, `title`, `type`, `file_path`, `video_url`, `description`, `position`, `created_at`, `updated_at`) VALUES
(3, 1, 'Study Session Material 01', 'pdf', 'materials/pdf/study-session-material-01_2026-04-28.pdf', NULL, NULL, 0, '2026-04-28 15:23:46', '2026-04-28 15:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `course_modules`
--

CREATE TABLE `course_modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `module_number` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_modules`
--

INSERT INTO `course_modules` (`id`, `course_id`, `module_number`, `title`, `position`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Study Session 1', 1, '2026-04-16 12:23:53', '2026-04-28 14:54:31'),
(2, 3, 2, 'Study Session 2', 2, '2026-04-16 12:24:40', '2026-04-16 12:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `course_study_all`
--

CREATE TABLE `course_study_all` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(100) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `start_level` varchar(10) NOT NULL,
  `duration` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_study_all`
--

INSERT INTO `course_study_all` (`id`, `department`, `programme`, `start_level`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'Community Health', 'Community Health', '100', 3, '2026-02-10 14:11:31', '2026-02-10 14:11:31'),
(2, 'CHO', 'CHO', '100', 3, '2026-02-10 14:11:38', '2026-02-10 14:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `created_at`, `updated_at`) VALUES
(1, 'Community Health', '2026-02-10 14:11:31', '2026-02-10 14:11:31'),
(2, 'CHO', '2026-02-10 14:11:38', '2026-02-10 14:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `examiner_scores`
--

CREATE TABLE `examiner_scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `station_id` bigint(20) UNSIGNED NOT NULL,
  `procedure_id` bigint(20) UNSIGNED NOT NULL,
  `score` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_settings`
--

CREATE TABLE `exam_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `session1` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_category` varchar(255) NOT NULL,
  `exam_mode` varchar(255) NOT NULL,
  `time_limit` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `upload_no_of_qst` int(11) NOT NULL,
  `no_of_qst` int(11) NOT NULL,
  `check_result` int(11) NOT NULL,
  `exam_date` date DEFAULT NULL,
  `lock_status` int(11) NOT NULL,
  `exam_view_type` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `exam_type`, `created_at`, `updated_at`) VALUES
(1, 'PREPARATORY', '2026-02-10 14:26:20', '2026-02-10 14:26:20'),
(2, 'SEMESTER EXAM', '2026-02-10 14:26:26', '2026-02-10 14:26:26'),
(3, 'ENTRANCE EXAM', '2026-02-10 14:26:31', '2026-02-10 14:26:31');

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
-- Table structure for table `failed_logins`
--

CREATE TABLE `failed_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `admission_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_logins`
--

INSERT INTO `failed_logins` (`id`, `ip_address`, `admission_no`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'admin@gmail.com', '2024-05-08 23:52:37', '2024-05-08 23:52:37'),
(2, '127.0.0.1', 'admin@gmail.com', '2024-05-14 14:16:49', '2024-05-14 14:16:49'),
(3, '192.168.0.13', 'eclement66g53@gmail.com', '2024-06-25 17:35:10', '2024-06-25 17:35:10'),
(4, '192.168.0.251', 'paulawolola@gmail.com', '2024-07-22 16:57:01', '2024-07-22 16:57:01'),
(5, '192.168.0.251', 'paulawolola@gmail.com', '2024-07-22 17:20:26', '2024-07-22 17:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `loading_checks`
--

CREATE TABLE `loading_checks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loading_check` int(11) NOT NULL,
  `app_check` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loading_checks`
--

INSERT INTO `loading_checks` (`id`, `loading_check`, `app_check`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-05-09 18:19:26', '2024-05-09 18:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_options`
--

CREATE TABLE `mcq_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mcq_id` bigint(20) UNSIGNED NOT NULL,
  `option_text` varchar(255) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mcq_questions`
--

CREATE TABLE `mcq_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `station_id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `mark` decimal(5,2) NOT NULL DEFAULT 1.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(5, '2024_05_06_201533_create_departments_table', 1),
(6, '2024_05_06_204631_create_cbt_evaluations_table', 1),
(7, '2024_05_06_205746_create_cbt_evaluation1s_table', 1),
(8, '2024_05_06_205804_create_cbt_evaluation2s_table', 1),
(9, '2024_05_06_210702_create_exam_settings_table', 1),
(10, '2024_05_06_211213_create_loading_checks_table', 1),
(11, '2024_05_06_211557_create_questions_table', 1),
(12, '2024_05_06_215150_create_academic_sessions_table', 1),
(13, '2024_05_07_194217_create_failed_logins_table', 1),
(14, '2024_05_08_013143_create_student_admissions_table', 1),
(15, '2024_05_08_190430_software_version', 2),
(16, '2024_05_08_201547_create_exam_types_table', 3),
(17, '2024_05_09_195138_create_cbt_classes_table', 4),
(18, '2024_05_09_195202_create_college_setups_table', 4),
(19, '2024_05_10_214623_create_question_settings_table', 5),
(20, '2024_05_14_110338_create_cbt_evaluations_table', 6),
(21, '2024_05_14_110409_create_cbt_evaluation1s_table', 7),
(22, '2024_05_14_110426_create_cbt_evaluation2s_table', 7),
(23, '2024_05_18_054942_create_courses_table', 8),
(24, '2024_05_28_095609_create_theory_questions_table', 9),
(25, '2024_05_28_095649_create_theory_answers_table', 9),
(26, '2024_05_30_010610_create_theory_answers_table', 10),
(27, '2024_05_30_011457_create_theory_answers_table', 11),
(28, '2024_05_30_011703_create_theory_answers_table', 12),
(29, '2024_05_30_020706_create_theory_answers_table', 13),
(30, '2024_05_30_021219_create_theory_answers_table', 14),
(31, '2024_06_13_174950_add_roles_to_users_table', 15),
(32, '2024_06_14_201603_add_roles_to_users_table', 16),
(33, '2024_10_01_154513_add_programme_to_courses_table', 17),
(34, '2025_01_14_095102_create_question_singles_table', 17),
(35, '2026_02_16_153510_add_email_to_student_admissions_table', 5),
(36, '2026_02_17_091232_add_a151_to_a300_to_cbt_evaluations_table', 5),
(37, '2026_02_17_091432_add_a151_to_a300_to_cbt_evaluation1_table', 5),
(38, '2026_02_17_091441_add_a151_to_a300_to_cbt_evaluation2_table', 5),
(39, '2026_02_17_204049_add_mcq_time_left_to_station_results_table', 5),
(40, '2026_02_17_230333_add_station_id_to_student_mcq_answers_table', 5),
(41, '2026_02_15_172127_create_station_results_table', 5),
(42, '2026_02_15_171751_create_procedures_table', 5),
(43, '2026_02_15_171823_create_mcq_questions_table', 5),
(44, '2026_02_15_171852_create_mcq_options_table', 5),
(45, '2026_02_15_172024_create_examiner_scores_table', 5),
(46, '2026_02_15_172103_create_student_mcq_answers_table', 5),
(47, '2026_02_15_171647_create_stations_table', 5),
(48, '2026_04_10_113740_create_courses_table', 18),
(49, '2026_04_11_113740_create_courses_table', 19),
(50, '2026_04_11_173445_create_course_modules_table', 19),
(51, '2026_04_11_173525_create_course_materials_table', 19),
(52, '2026_05_02_125134_create_student_progress_table', 20),
(53, '2026_05_02_131044_create_student_activities_table', 21),
(54, '2026_05_02_134319_create_admin_settings_table', 22);

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
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `station_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `marks` decimal(5,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`id`, `station_id`, `name`, `description`, `marks`, `created_at`, `updated_at`) VALUES
(17, 4, 'Greets client and introduces self', 'Greets client and introduces self', 0.50, '2026-02-18 14:08:06', '2026-02-18 14:08:06'),
(18, 4, 'Explains procedure to the client and obtains consent', 'Explains procedure to the client and obtains consent', 1.00, '2026-02-18 14:09:25', '2026-02-18 14:09:25'),
(19, 4, 'Washes and dries hands', 'Washes and dries hands', 0.50, '2026-02-18 14:09:57', '2026-02-18 14:09:57'),
(20, 4, 'Assists client to assume supine position', 'Assists client to assume supine position', 1.00, '2026-02-18 14:13:13', '2026-03-03 15:47:53'),
(21, 5, 'Greets clients and introduces self', 'Greets clients and introduces self', 0.25, '2026-02-18 14:13:14', '2026-02-18 14:13:14'),
(22, 5, 'Informs clients about the sequence of the procedure and obtain consent', 'Informs clients about the sequence of the procedure and obtain consent', 0.50, '2026-02-18 14:13:37', '2026-02-18 14:13:37'),
(23, 4, 'Observes the nose for shape, size, colour, and presence of deformity or inflammation', 'Observes the nose for shape, size, colour, and presence of deformity or inflammation', 1.00, '2026-02-18 14:14:02', '2026-03-03 15:48:20'),
(24, 5, 'Provides privacy.', 'Provides privacy.', 0.50, '2026-02-18 14:14:10', '2026-02-18 14:14:10'),
(25, 5, 'Position patient comfortably either sitting or lying down with the hand supported', 'Position patient comfortably either sitting or lying down with the hand supported', 0.50, '2026-02-18 14:14:25', '2026-02-18 14:14:25'),
(26, 4, 'Gently palpates the ridge and soft tissue of the nose by placing one finger on each side of the nasal arch and gently moving the finger from the nasal bridge to the tip, noting any tenderness, messes, or underlying deviation', 'Gently palpates the ridge and soft tissue of the nose by placing one finger on each side of the nasal arch and gently moving the finger from the nasal bridge to the tip, noting any tenderness, messes, or underlying deviation', 1.00, '2026-02-18 14:14:33', '2026-02-18 14:14:33'),
(27, 5, 'Wash hands before installation of eye drop', 'Wash hands before installation of eye drop', 0.50, '2026-02-18 14:14:40', '2026-02-18 14:14:40'),
(28, 5, 'Wear disposable gloves', 'Wear disposable gloves', 0.50, '2026-02-18 14:14:52', '2026-02-18 14:14:52'),
(29, 4, 'Places a finger on one side of the client’s nose and occludes one nostril. Asks client to breath with the mouth closed. Repeats the examination for the other nostril.', 'Places a finger on one side of the client’s nose and occludes one nostril. Asks client to breath with the mouth closed. Repeats the examination for the other nostril.', 1.00, '2026-02-18 14:14:58', '2026-02-18 14:14:58'),
(30, 5, 'Clean the eye lids with cotton wool swabs dipped in cool boiled water or sterile saline solution', 'Clean the eye lids with cotton wool swabs dipped in cool boiled water or sterile saline solution', 0.50, '2026-02-18 14:15:07', '2026-02-18 14:15:07'),
(31, 5, 'Establish you have the correct eye drops and that they have not expired', 'Establish you have the correct eye drops and that they have not expired', 0.50, '2026-02-18 14:15:17', '2026-02-18 14:15:17'),
(32, 4, 'Illuminates the anterior nostril and inspects the mucosa for colour, lesions, discharge, swelling, and evidence of bleeding.', 'Illuminates the anterior nostril and inspects the mucosa for colour, lesions, discharge, swelling, and evidence of bleeding.', 1.00, '2026-02-18 14:15:26', '2026-02-18 14:15:26'),
(33, 5, 'Gently shake the bottle use to make sure the drugs is properly used', 'Gently shake the bottle use to make sure the drugs is properly used', 0.50, '2026-02-18 14:15:31', '2026-02-18 14:15:31'),
(34, 5, 'Warn the patient the drug will sting transiently when administered', 'Warn the patient the drug will sting transiently when administered', 0.50, '2026-02-18 14:15:42', '2026-02-18 14:15:42'),
(35, 4, 'Dons gloves, and asks the client to open his mouth. Then, using a penlight and tongue depressor, inspects the oral cavity', 'Dons gloves, and asks the client to open his mouth. Then, using a penlight and tongue depressor, inspects the oral cavity', 1.00, '2026-02-18 14:15:53', '2026-02-18 14:15:53'),
(36, 5, 'Hold the eye drop with the dominant hand', 'Hold the eye drop with the dominant hand', 0.50, '2026-02-18 14:15:54', '2026-02-18 14:15:54'),
(37, 5, 'Gently pull down the lower eyelid with non-dominant hand and instill the eye drop into the conjunctival sac', 'Gently pull down the lower eyelid with non-dominant hand and instill the eye drop into the conjunctival sac', 1.00, '2026-02-18 14:16:08', '2026-02-18 14:16:08'),
(38, 5, 'Ask the patient to look up so that the eye drop does not land directly on the sensitive cornea', 'Ask the patient to look up so that the eye drop does not land directly on the sensitive cornea', 0.50, '2026-02-18 14:16:20', '2026-02-18 14:16:20'),
(39, 4, 'Inspects the buccal mucosa, gums, and teeth and determines if client', 'Inspects the buccal mucosa, gums, and teeth and determines if client: Has  halitosis, dental caries, tooth extractions , sign of smoking, intake of tobacco , presence of denture etc\r\nAssesses client’s dental hygiene practices including colour of the teeth', 1.50, '2026-02-18 14:16:22', '2026-03-03 15:52:41'),
(40, 5, 'Release the eyelid once the eye drop is instilled', 'Release the eyelid once the eye drop is instilled', 0.50, '2026-02-18 14:16:38', '2026-02-18 14:16:38'),
(41, 5, 'Ensure only one or two drops is instilled', 'Ensure only one or two drops is instilled', 1.00, '2026-02-18 14:18:11', '2026-02-18 14:18:11'),
(42, 5, 'Use cotton swab to dab any excess eye drop from the check', 'Use cotton swab to dab any excess eye drop from the check', 0.50, '2026-02-18 14:18:32', '2026-02-18 14:18:32'),
(43, 5, 'Do not hold the tissue paper too close to the eye to prevent the drug wicking away from the eye', 'Do not hold the tissue paper too close to the eye to prevent the drug wicking away from the eye', 0.50, '2026-02-18 14:18:56', '2026-02-18 14:18:56'),
(44, 5, 'Makes the work area tidy', 'Makes the work area tidy', 0.25, '2026-02-18 14:19:24', '2026-02-18 14:19:24'),
(45, 5, 'Removes gloves, wash and dry hands.', 'Removes gloves, wash and dry hands.', 0.25, '2026-02-18 14:19:38', '2026-02-18 14:19:38'),
(46, 5, 'Document intervention', 'Document intervention', 0.25, '2026-02-18 14:20:00', '2026-02-18 14:20:00'),
(47, 6, 'Greets and introduces yourself and explains procedure to client', 'Greets and introduces yourself and explains procedure to client', 0.50, '2026-02-18 14:21:57', '2026-02-18 14:21:57'),
(48, 6, 'Wash your hands', 'Wash your hands', 0.25, '2026-02-18 14:22:34', '2026-02-18 19:51:04'),
(49, 6, 'Gathers equipment for the procedure', 'Gathers equipment for the procedure', 0.25, '2026-02-18 14:24:14', '2026-02-18 19:51:33'),
(50, 6, 'Puts on a conform glove and provide privacy', 'Puts on a conform glove and provide privacy', 0.50, '2026-02-18 14:24:28', '2026-02-18 14:24:28'),
(51, 6, 'Position your patient in fowler', 'Position your patient in fowler', 0.50, '2026-02-18 14:24:41', '2026-02-18 14:24:41'),
(52, 4, 'Asks if client has pain from chewing or eating; any mouth lesion, duration and associated symptoms', 'Asks if client has pain from chewing or eating; any mouth lesion, duration and associated symptoms', 0.50, '2026-02-18 14:24:54', '2026-02-18 14:24:54'),
(53, 6, 'Open the equipment', 'Open the equipment', 0.50, '2026-02-18 14:24:54', '2026-02-18 14:24:54'),
(54, 6, 'Instruct your patient to swallow on the tube or water as the procedure is in progress', 'Instruct your patient to swallow on the tube or water as the procedure is in progress', 0.50, '2026-02-18 14:25:07', '2026-02-18 19:52:12'),
(55, 6, 'Measure the tube placement starting from the nose, to the earlobe and the xiphoid process', 'Measure the tube placement starting from the nose, to the earlobe and the xiphoid process', 0.50, '2026-02-18 14:25:21', '2026-02-18 19:52:42'),
(56, 4, 'Retracts the cheeks and inspects the gums for colour, oedema, retraction, bleeding or lesions', 'Retracts the cheeks and inspects the gums for colour, oedema, retraction, bleeding or lesions', 1.50, '2026-02-18 14:25:28', '2026-02-18 14:25:28'),
(57, 6, 'Mark the tube at the level of the xiphoid process', 'Mark the tube at the level of the xiphoid process', 0.50, '2026-02-18 14:25:49', '2026-02-18 14:25:49'),
(58, 4, 'Asks the client to relax and stick the tongue out halfway. Notes deviation, tremor, or limitation in movement', 'Asks the client to relax and stick the tongue out halfway. Notes deviation, tremor, or limitation in movement', 1.00, '2026-02-18 14:25:51', '2026-02-18 14:25:51'),
(59, 6, 'Assess for patency of the nasal cavity', 'Assess for patency of the nasal cavity', 0.50, '2026-02-18 14:26:06', '2026-02-18 19:52:54'),
(60, 4, 'Using the penlight, examines the tongue for colour, size, position texture, and coatings or lesions', 'Using the penlight, examines the tongue for colour, size, position texture, and coatings or lesions', 1.50, '2026-02-18 14:26:16', '2026-02-18 14:34:18'),
(61, 6, 'Lubricate the tip of the tube with a water-soluble gel', 'Lubricate the tip of the tube with a water-soluble gel', 0.50, '2026-02-18 14:26:18', '2026-02-18 19:53:04'),
(62, 6, 'Insert tube into the patent nostril and advance slowly', 'Insert tube into the patent nostril and advance slowly', 0.50, '2026-02-18 14:26:30', '2026-02-18 19:53:15'),
(63, 4, 'Explains each step of the examination to the client throughout', 'Explains each step of the examination to the client throughout', 1.50, '2026-02-18 14:26:42', '2026-03-03 15:55:28'),
(64, 4, 'Asks about specific functions and discomforts', 'Asks about specific functions and discomforts', 1.00, '2026-02-18 14:27:39', '2026-02-18 14:27:39'),
(65, 6, 'Observe your patient during insertion for any respiratory discomfort or excessive coughing', 'Observe your patient during insertion for any respiratory discomfort or excessive coughing', 0.50, '2026-02-18 14:27:59', '2026-02-18 19:59:34'),
(66, 6, 'Insert till the level of the marked area on the tube', 'Insert till the level of the marked area on the tube', 0.50, '2026-02-18 14:28:10', '2026-02-18 20:00:07'),
(67, 6, 'Test for placement of tube by withdrawing content and using litmus paper, or by Auscultating the stomach, or dipping end of tube in water to check for bubble', 'Test for placement of tube by withdrawing content and using litmus paper, or by Auscultating the stomach, or dipping end of tube in water to check for bubble', 1.00, '2026-02-18 14:28:24', '2026-02-18 20:00:35'),
(68, 4, 'Listens attentively to the client’s response', 'Listens attentively to the client’s response', 1.50, '2026-02-18 14:28:48', '2026-03-03 15:54:44'),
(69, 6, 'Secure the nasogastrictube with an adhesive tape', 'Secure the nasogastrictube with an adhesive tape', 0.50, '2026-02-18 14:29:01', '2026-02-18 20:01:04'),
(70, 6, 'Make your patient comfortable', 'Make your patient comfortable', 0.50, '2026-02-18 14:29:14', '2026-02-18 20:01:31'),
(71, 4, 'Uses more probing question to verify responses', 'Uses more probing question to verify responses', 1.00, '2026-02-18 14:29:25', '2026-02-18 14:29:25'),
(72, 6, 'Discard your instruments', 'Discard your instruments', 0.50, '2026-02-18 14:29:25', '2026-02-18 20:02:02'),
(73, 6, 'Wash your hands', 'Wash your hands', 0.50, '2026-02-18 14:29:36', '2026-02-18 20:02:29'),
(74, 4, 'Documents information as given by the client', 'Documents information as given by the client', 1.00, '2026-02-18 14:29:52', '2026-02-18 14:29:52'),
(75, 6, 'Documents all actions', 'Documents all actions', 0.50, '2026-02-18 20:03:02', '2026-02-18 20:03:02'),
(83, 7, 'Greet and introduce self to patient', 'Greet and introduce yourself to patient and explain procedure', 0.75, '2026-03-11 13:53:35', '2026-03-11 13:53:35'),
(84, 7, 'Place the NO SMOKING SIGN', 'Place the NO SMOKING SIGN', 1.00, '2026-03-11 13:54:27', '2026-03-11 13:54:27'),
(85, 7, 'Check the environment', 'Check the environment for open fire and other things that may cause static charges', 1.00, '2026-03-11 13:55:27', '2026-03-11 13:55:27'),
(86, 7, 'Wash hands and dry', 'Wash hands and dry', 0.75, '2026-03-11 13:56:01', '2026-03-11 13:56:01'),
(87, 7, 'Organize equipment', 'Organize equipment\r\nEnsure humidifier is two-third full of water \r\nEnsure humidifier is connected to flow meter and also to tubing attached to nasal cannula', 1.00, '2026-03-11 13:57:30', '2026-03-11 13:57:30'),
(88, 7, 'Turn oxygen flow meter', 'Turn oxygen flow meter on until bubbling is noticed in the humidifier', 1.00, '2026-03-11 13:58:14', '2026-03-11 13:58:14'),
(89, 7, 'Adjust flow of oxygen', 'Adjust flow of oxygen via flow meter', 1.00, '2026-03-11 13:58:59', '2026-03-11 13:58:59'),
(90, 7, 'Put on gloves', 'Put on gloves', 1.00, '2026-03-11 13:59:29', '2026-03-11 13:59:29'),
(91, 7, 'Insert nasal cannula', 'Insert nasal cannula via patient’s nostrils', 1.00, '2026-03-11 14:00:57', '2026-03-11 14:00:57'),
(97, 7, 'Fasten fit the tubing', 'Fasten fit the tubing over the ear with strappings', 0.75, '2026-03-11 14:02:45', '2026-03-11 14:02:45'),
(98, 7, 'Position patient for comfort and ease', 'Position patient for comfort and ease of breathing by elevating head of bed', 1.00, '2026-03-11 14:03:24', '2026-03-11 14:03:24'),
(99, 7, 'Adjust the rate of flow', 'Adjust the rate of flow as ordered (usually 4 litres per minute)', 1.00, '2026-03-11 14:04:11', '2026-03-11 14:04:11'),
(100, 7, 'Evaluate patient’s respiration', 'Evaluate patient’s respiration and oxygen saturation', 0.75, '2026-03-11 14:04:57', '2026-03-11 14:04:57'),
(101, 7, 'Observe patient for signs', 'Observe patient for signs of oxygen toxicity', 0.75, '2026-03-11 14:05:34', '2026-03-11 14:05:34'),
(102, 7, 'Wash hand and dry', 'Wash hand and dry', 0.75, '2026-03-11 14:06:04', '2026-03-11 14:06:04'),
(103, 7, 'Document the procedure', 'Document the procedure', 1.00, '2026-03-11 14:06:50', '2026-03-11 14:06:50'),
(104, 8, 'Greets client and  introduces self', 'Greets client and  introduces self', 1.00, '2026-03-11 14:07:45', '2026-03-11 14:07:45'),
(105, 8, 'Explains procedure to the client and obtains consent', 'Explains procedure to the client and obtains consent', 1.00, '2026-03-11 14:08:19', '2026-03-11 14:08:19'),
(106, 8, 'Screen client', 'Screen client', 1.00, '2026-03-11 14:08:59', '2026-03-11 14:08:59'),
(107, 8, 'Washes and dries hands', 'Washes and dries hands', 1.00, '2026-03-11 14:09:31', '2026-03-11 14:09:31'),
(108, 8, 'Dons gloves', 'Dons gloves', 1.00, '2026-03-11 14:10:00', '2026-03-11 14:10:00'),
(109, 8, 'Assists client', 'Assists client to assume supine position', 1.00, '2026-03-11 14:10:35', '2026-03-11 14:10:35'),
(110, 8, 'Places pillow under the head and neck', 'Places pillow under the head and neck (', 1.00, '2026-03-11 14:11:11', '2026-03-11 14:11:11'),
(111, 8, 'Moves client down the couch', 'Moves client down the couch until the buttocks lie just beyond the edge of the lower couch break', 1.00, '2026-03-11 14:12:03', '2026-03-11 14:12:03'),
(112, 8, 'Elevates both legs', 'Elevates both legs simultaneously and places them in support boots (booth stirrup or candy cane stirrup)', 1.00, '2026-03-11 14:12:55', '2026-03-11 14:12:55'),
(113, 8, 'Gently adjusts', 'Gently adjusts the support boots until both legs are flexed with hip and knee at 900 on the stirrup', 1.00, '2026-03-11 14:13:34', '2026-03-11 14:13:34'),
(114, 8, 'Tidies the work area', 'Tidies the work area', 1.00, '2026-03-11 14:14:05', '2026-03-11 14:14:05'),
(115, 8, 'Makes patient comfortable in bed', 'Makes patient comfortable in bed', 1.00, '2026-03-11 14:14:42', '2026-03-11 14:14:42'),
(116, 8, 'Duffs gloves', 'Duffs gloves', 1.00, '2026-03-11 14:15:16', '2026-03-11 14:15:16'),
(117, 8, 'Washes and dries hand', 'Washes and dries hand', 1.00, '2026-03-11 14:15:46', '2026-03-11 14:15:46'),
(118, 8, 'Documents procedure', 'Documents procedure accordingly', 1.00, '2026-03-11 14:16:18', '2026-03-11 14:16:18'),
(119, 9, 'Greets patient and introduces self', 'Greets patient and introduces self', 0.50, '2026-03-11 14:16:58', '2026-03-11 14:16:58'),
(120, 9, 'Explains procedure to the patient', 'Explains procedure to the patient', 0.50, '2026-03-11 14:17:30', '2026-03-11 14:17:30'),
(121, 9, 'Prepares enema solution.', 'Prepares enema solution.', 1.00, '2026-03-11 14:18:04', '2026-03-11 14:18:04'),
(122, 9, 'Wheels trolley to the patient\'s bedside.', 'Wheels trolley to the patient\'s bedside.', 0.50, '2026-03-11 14:18:32', '2026-03-11 14:18:32'),
(123, 9, 'Provides privacy', 'Provides privacy by screening the bed.', 0.75, '2026-03-11 14:19:04', '2026-03-11 14:19:04'),
(124, 9, 'Wash hands and don gloves', 'Wash hands and don gloves', 0.75, '2026-03-11 14:19:41', '2026-03-11 14:19:41'),
(125, 9, 'Arranges bed clothes', 'Arranges bed clothes and places patient in left lateral position with buttocks drawn to the side of the bed. Or places patient on the back with pelvis raised on a mackintosh protected pillow', 1.00, '2026-03-11 14:20:18', '2026-03-11 14:20:18'),
(126, 9, 'Protects bed clothes', 'Protects bed clothes under the buttocks with a mackintosh and towel.', 1.00, '2026-03-11 14:21:05', '2026-03-11 14:21:05'),
(127, 9, 'Lubricates', 'Lubricates the catheter with liquid paraffin.', 0.75, '2026-03-11 14:21:37', '2026-03-11 14:21:37'),
(128, 9, 'Fills the apparatus', 'Fills the apparatus with solution and expels air', 0.75, '2026-03-11 14:22:17', '2026-03-11 14:22:17'),
(129, 9, 'Nips the tip of the catheter.', 'Nips the tip of the catheter.', 0.75, '2026-03-11 14:22:49', '2026-03-11 14:22:49'),
(130, 9, 'Asks the patient to relax', 'Asks the patient to relax and introduce the catheter 7.5cm into the rectum', 1.00, '2026-03-11 14:23:23', '2026-03-11 14:23:23'),
(131, 9, 'Introduces the fluid', 'Introduces the fluid holding the funnel 30cm - 45cm above the level of the patient\'s bed taking about 5 - 10 minutes for 500- 750mls solution to run and encourage patient to pant during the process.', 1.00, '2026-03-11 14:24:07', '2026-03-11 14:24:07'),
(132, 9, 'Tidy patient up', 'Tidy patient up', 0.75, '2026-03-11 14:24:35', '2026-03-11 14:24:35'),
(133, 9, 'Encourages patient', 'Encourages patient to retain fluid for about 5 minutes before returning', 1.00, '2026-03-11 14:25:21', '2026-03-11 14:25:21'),
(134, 9, 'Serves bed pan if need be', 'Serves bed pan if need be or assist patient to toilet', 0.75, '2026-03-11 14:26:02', '2026-03-11 14:26:02'),
(135, 9, 'Cleans up patient', 'Cleans up patient and removes bed pan', 0.75, '2026-03-11 14:26:34', '2026-03-11 14:26:34'),
(136, 9, 'Washes hands and dry', 'Washes hands and dry', 0.75, '2026-03-11 14:27:10', '2026-03-11 14:27:10'),
(137, 9, 'Document procedure', 'Document procedure', 0.75, '2026-03-11 14:27:40', '2026-03-11 14:27:40'),
(138, 10, 'Greets the examiner and introduce self.', 'Greets the examiner and introduce self.', 0.50, '2026-03-11 14:28:27', '2026-03-11 14:29:12'),
(139, 10, 'Gather the necessary supplies', 'Gather the necessary supplies. Stand in front of the sink', 1.00, '2026-03-11 14:29:03', '2026-03-11 14:29:03'),
(140, 10, 'States the indications for hand washing', 'States the indications for hand washing stating:\r\nBefore and after any procedure\r\nAfter using the toilet on changing a nappy\r\nBefore eating or handling food.\r\nAfter blowing your nose, sneezing or coughing', 1.00, '2026-03-11 14:30:40', '2026-03-11 14:30:40'),
(141, 10, 'Do not allow your clothing to touch the sink', 'Do not allow your clothing to touch the sink during the\r\nwashing procedure', 1.00, '2026-03-11 14:31:26', '2026-03-11 14:31:26'),
(142, 10, 'Remove jewellery', 'Remove jewellery, if possible, and secure in a safe place.\r\nA plain wedding band may remain in place', 1.00, '2026-03-11 20:29:30', '2026-03-11 20:29:30'),
(143, 10, 'Turn on water and adjust force', 'Turn on water and adjust force. Regulate the temperature\r\nuntil the water is warm', 1.00, '2026-03-11 20:30:14', '2026-03-11 20:30:14'),
(144, 10, 'Wet the hands and wrist area', 'Wet the hands and wrist area. Keep hands lower than\r\nelbows to allow water to flow toward fingertips', 1.00, '2026-03-11 20:30:55', '2026-03-11 20:30:55'),
(145, 10, 'Use about 1 teaspoon liquid soap', 'Use about 1 teaspoon liquid soap from dispenser or rinse\r\nbar of soap and lather thoroughly. Cover all areas of hands\r\nwith the soap product. Rinse soap bar again and return to\r\nsoap rack', 1.00, '2026-03-11 20:32:31', '2026-03-11 20:32:31'),
(146, 10, 'With firm rubbing and circular motions', 'With firm rubbing and circular motions, wash the palms\r\nand backs of the hands, each finger, the areas between the\r\nfingers, and the knuckles, wrists, and forearms. Wash at\r\nleast 1 inch above area of contamination. If hands are not\r\nvisibly soiled, wash to 1 inch above the wrists', 1.00, '2026-03-11 20:33:24', '2026-03-11 20:33:24'),
(147, 10, 'Continue', 'Continue this friction motion for at least 15 seconds', 1.00, '2026-03-11 20:34:03', '2026-03-11 20:34:03'),
(148, 10, 'Use fingernails', 'Use fingernails of the opposite hand or a clean\r\norangewood stick to clean under fingernails', 1.00, '2026-03-11 20:34:44', '2026-03-11 20:34:44'),
(149, 10, 'Rinse', 'Rinse thoroughly with water flowing toward fingertips', 1.00, '2026-03-11 20:35:24', '2026-03-11 20:35:24'),
(150, 10, 'Pat hands dry', 'Pat hands dry with a paper towel, beginning with the fingers and moving upward toward forearms, and discard it\r\nimmediately', 1.00, '2026-03-11 20:36:11', '2026-03-11 20:36:11'),
(151, 10, 'Use', 'Use another clean towel to turn off the faucet', 1.00, '2026-03-11 20:36:55', '2026-03-11 20:36:55'),
(152, 10, 'Discard towel', 'Discard towel immediately without touching other\r\nclean hand', 1.00, '2026-03-11 20:37:34', '2026-03-11 20:37:34'),
(153, 10, 'Use oil-free lotion', 'Use oil-free lotion on hands if desired', 0.50, '2026-03-11 20:38:22', '2026-03-11 20:38:22'),
(154, 11, 'Greets', 'Greets client and introduces self', 0.50, '2026-03-11 20:39:08', '2026-03-11 20:39:08'),
(155, 11, 'Inform', 'Informs client about the procedure and obtains consent', 0.50, '2026-03-11 20:41:00', '2026-03-11 20:41:00'),
(156, 11, 'Pace pack on the trolley', 'Pace pack on the trolley', 0.50, '2026-03-11 20:41:44', '2026-03-11 20:41:44'),
(157, 11, 'Place lubricant', 'Place lubricant on the linen square, discard a small amount from the tube before dropping a small portion onto the square', 0.75, '2026-03-11 20:42:59', '2026-03-11 20:42:59'),
(158, 11, 'pour the lotion over the cotton balls', 'In same manner, pour the lotion over the cotton balls, discard a small amount from the bottle before pouring unto the sterile bowl', 0.75, '2026-03-11 20:44:03', '2026-03-11 20:44:03'),
(159, 11, 'Take equipment', 'Take equipment to bed side and screen the patient', 0.50, '2026-03-11 20:45:16', '2026-03-11 20:45:16'),
(160, 11, 'Loose the top bedclothes', 'Loose the top bedclothes and fanfold the blanket (or counterpane) to the foot of the bed', 0.50, '2026-03-11 20:45:51', '2026-03-11 20:46:17'),
(161, 11, 'Assists client', 'Assists client to assume dorsal position with her knees flexed and abducted to facilitate easy access to urethra', 0.75, '2026-03-11 20:46:50', '2026-03-11 20:46:50'),
(162, 11, 'Pull gown out', 'Pull gown out of the way and drape patient with top sheet', 0.75, '2026-03-11 20:48:34', '2026-03-11 20:48:34'),
(163, 11, 'Put mackintosh', 'Put mackintosh and cover under buttocks', 0.50, '2026-03-11 20:49:56', '2026-03-11 20:49:56'),
(164, 11, 'Place receiver', 'Place receiver for soiled cotton balls in a convenient place on the bed so that it will be outside the sterile field', 0.75, '2026-03-11 20:51:33', '2026-03-11 20:51:33'),
(165, 11, 'Washes and dries hand', 'Washes and dries hand', 0.50, '2026-03-11 20:55:22', '2026-03-11 20:55:22'),
(166, 11, 'Dons sterile gloves', 'Dons sterile gloves', 0.50, '2026-03-11 20:56:08', '2026-03-11 20:56:08'),
(167, 11, 'Lubricate', 'Lubricate one catheter and leave it in large receiver, place second catheter in small receiver.', 0.50, '2026-03-11 20:56:58', '2026-03-11 20:56:58'),
(168, 11, 'Place large receiver', 'Place large receiver with lubricated catheter on a sterile towel near perineum', 0.50, '2026-03-11 20:57:55', '2026-03-11 20:57:55'),
(169, 11, 'With a dry cotton ball', 'With a dry cotton ball under the index finger and middle finger of the left-hand separate labia completely', 0.75, '2026-03-11 20:58:55', '2026-03-11 20:58:55'),
(170, 11, 'Exert slight', 'Exert slight upward tension on labia to identify meatus, clean the area with savlon swab using the dissecting forceps', 0.50, '2026-03-11 20:59:37', '2026-03-11 20:59:37'),
(171, 11, 'Gently insert catheter', 'Gently insert catheter into the meatus about two inches or until urine begins to flow. (Do not use force to insert catheter)', 1.00, '2026-03-11 21:00:23', '2026-03-11 21:00:23'),
(172, 11, 'Release labia', 'Release labia when urine starts to flow', 0.50, '2026-03-11 21:01:03', '2026-03-11 21:01:03'),
(173, 11, 'Inflates', 'Inflates with specified amount of water, connects to urine bag and hang to the side of the bed', 0.50, '2026-03-11 21:01:56', '2026-03-11 21:01:56'),
(174, 11, 'If specimen', 'If specimen is required allow small amount of urine to flow into the sterile receiver, collect 60 or 90mls in the sterile specimen bottle, while the remaining flows to the receiver', 0.75, '2026-03-11 21:02:35', '2026-03-11 21:02:35'),
(175, 11, 'Measures the quantity', 'Measures the quantity of urine obtained', 0.75, '2026-03-11 21:03:25', '2026-03-11 21:03:25'),
(176, 11, 'Removes equipment', 'Removes equipment and makes client comfortable', 0.75, '2026-03-11 21:04:04', '2026-03-11 21:04:04'),
(177, 11, 'Washes and dry hands', 'Washes and dry hands', 0.50, '2026-03-11 21:05:04', '2026-03-11 21:05:04'),
(178, 11, 'Documents intervention', 'Documents intervention', 0.50, '2026-03-11 21:05:48', '2026-03-11 21:05:48'),
(179, 12, 'Greet', 'Greet and introduce self to the patient', 0.25, '2026-03-12 10:54:35', '2026-03-12 10:54:35'),
(180, 12, 'Assess', 'Assesses status of the oral mucosa, lips, tongue and teeth, noting presence of halitosis', 0.75, '2026-03-12 10:57:04', '2026-03-12 10:57:04'),
(181, 12, 'Screen the bed', 'Screen the bed', 0.50, '2026-03-12 10:57:57', '2026-03-12 10:57:57'),
(182, 12, 'Washes and dries hands', 'Washes and dries hands', 0.25, '2026-03-12 10:58:54', '2026-03-12 10:58:54'),
(183, 12, 'gloves', 'Dons gloves', 0.25, '2026-03-12 10:59:40', '2026-03-12 10:59:40'),
(184, 12, 'positioning', 'Places the patient in a left lateral position', 0.25, '2026-03-12 11:00:37', '2026-03-12 11:00:37'),
(185, 12, 'Protects the patient’s gown', 'Protects the patient’s gown with mackintosh cape and dressing towel', 1.00, '2026-03-12 11:01:50', '2026-03-12 11:01:50'),
(186, 12, 'nsert mouth gauge', 'Insert mouth gauge to keep the mouth open', 0.50, '2026-03-12 11:03:14', '2026-03-12 11:03:14'),
(187, 12, 'Removes denture', 'Removes denture (if in place) into a glass of water.', 0.50, '2026-03-12 11:04:32', '2026-03-12 11:04:32'),
(188, 12, 'Uses diluted hydrogen peroxide', 'Uses diluted hydrogen peroxide for cleaning', 0.25, '2026-03-12 11:07:00', '2026-03-12 11:07:00'),
(189, 12, 'Wraps gauge swab', 'Wraps gauge swab around the artery forceps using non-toothed dissecting forceps and dips into solution', 1.00, '2026-03-12 11:07:53', '2026-03-12 11:07:53'),
(190, 12, 'Using the padded artery', 'Using the padded artery forceps cleans mouth from inside the cheeks, both sides of gums, the roof of the mouth, under the tongue, then top of the tongue.', 1.00, '2026-03-12 11:08:59', '2026-03-12 11:08:59'),
(191, 12, 'Uses one swab once', 'Uses one swab once only.', 0.50, '2026-03-12 11:10:01', '2026-03-12 11:10:01'),
(192, 12, 'Uses tongue depressor', 'Uses tongue depressor to control the tongue while cleaning', 0.25, '2026-03-12 11:11:12', '2026-03-12 11:11:12'),
(193, 12, 'clean patient’s mouth', 'Then, clean patient’s mouth using glycothymoline solution.', 0.25, '2026-03-12 11:12:09', '2026-03-12 11:12:09'),
(194, 12, 'Applies petroleum jelly to lips', 'Applies petroleum jelly to lips', 0.25, '2026-03-12 11:12:52', '2026-03-12 11:12:52'),
(195, 12, 'Wipes patient’s face', 'Wipes patient’s face with face towel', 0.25, '2026-03-12 11:14:06', '2026-03-12 11:14:06'),
(196, 12, 'Remove dressing towel', 'Remove dressing towel, mackintosh cape and mouth gauge, (then wash denture and replace if applicable)', 1.00, '2026-03-12 11:15:25', '2026-03-12 11:15:25'),
(197, 12, 'Places client in a comfortable position', 'Places client in a comfortable position, and remove screen', 0.50, '2026-03-12 11:16:22', '2026-03-12 11:16:22'),
(198, 12, 'Clear equipment’s used', 'Clear equipment’s used and tidy work area.', 0.25, '2026-03-12 11:17:03', '2026-03-12 11:17:03'),
(199, 12, 'Perform hand hygiene', 'Perform hand hygiene', 0.25, '2026-03-12 11:17:44', '2026-03-12 11:17:44'),
(200, 12, 'Document and report important data', 'Document and report important data.', 0.25, '2026-03-12 11:18:39', '2026-03-12 11:18:39'),
(201, 13, 'Greet', 'Greet client and explain procedure to the client', 0.50, '2026-03-12 11:19:53', '2026-03-12 11:19:53'),
(202, 13, 'Request for assistant', 'Request for assistant and educate assistant', 0.50, '2026-03-12 11:21:00', '2026-03-12 11:21:00'),
(203, 13, 'Wash hands', 'Wash hands and done your conform gloves', 0.50, '2026-03-12 11:22:12', '2026-03-12 11:22:12'),
(204, 13, 'Provide privacy for the client', 'Provide privacy for the client', 0.50, '2026-03-12 11:24:18', '2026-03-12 11:24:18'),
(205, 13, 'Leave the top sheet over the client', 'Leave the top sheet over the client', 0.50, '2026-03-12 11:32:54', '2026-03-12 11:32:54'),
(206, 13, 'Assist the client', 'Assist the client to turn on the side facing away from the clean linen', 0.25, '2026-03-12 11:34:00', '2026-03-12 11:34:00'),
(207, 13, 'Fanfold the drawsheet', 'Fanfold the drawsheet and the bottom sheet at the center of the bed as close to and under the client as possible', 1.00, '2026-03-12 11:35:41', '2026-03-12 11:35:41'),
(208, 13, 'Place the new bottom sheet', 'Place the new bottom sheet on the bed and fanfold the half to be use close to the client', 1.00, '2026-03-12 11:36:23', '2026-03-12 11:36:23'),
(209, 13, 'Tuck in the bedsheet', 'Tuck in the bedsheet near you and miter the corner', 0.25, '2026-03-12 11:37:24', '2026-03-12 11:37:24'),
(210, 13, 'The clients roll over the fanfolded linen', 'The clients roll over the fanfolded linen at the center of the bed', 1.00, '2026-03-12 11:38:06', '2026-03-12 11:38:06'),
(211, 13, 'Remove the used linen', 'Remove the used linen and place it in the linen hamper', 0.25, '2026-03-12 11:38:46', '2026-03-12 11:38:46'),
(212, 13, 'The assistant unfolds the fanfolded', 'The assistant unfolds the fanfolded bottom sheet from the center of the bed', 0.25, '2026-03-12 11:39:28', '2026-03-12 11:39:28'),
(213, 13, 'The assistant tuck in the bed sheet', 'The assistant tuck in the bed sheet', 0.50, '2026-03-12 11:40:17', '2026-03-12 11:40:17'),
(214, 13, 'Assist client to a preferred position', 'Assist client to a preferred position', 1.00, '2026-03-12 11:41:00', '2026-03-12 11:41:00'),
(215, 13, 'Spread a clean top sheet', 'Spread a clean top sheet over the client and remove the used one', 0.25, '2026-03-12 11:42:14', '2026-03-12 11:42:14'),
(216, 13, 'appreciate the assistant', 'Raise the rails and appreciate the assistant', 0.25, '2026-03-12 11:43:15', '2026-03-12 11:43:15'),
(217, 13, 'Take the used linens into the sluice room', 'Take the used linens into the sluice room', 0.25, '2026-03-12 11:44:16', '2026-03-12 11:44:16'),
(218, 13, 'Perform hand hygiene', 'Perform hand hygiene', 0.25, '2026-03-12 11:45:03', '2026-03-12 11:45:03'),
(219, 13, 'Document procedure', 'Document procedure', 0.25, '2026-03-12 11:45:42', '2026-03-12 11:45:42'),
(220, 14, 'Remove jewelries', 'Remove jewelries', 0.50, '2026-03-12 11:46:54', '2026-03-12 11:46:54'),
(221, 14, 'Stand before a sink', 'Stand before a sink', 0.50, '2026-03-12 11:47:38', '2026-03-12 11:47:38'),
(222, 14, 'Inspect your hands for abrasion,', 'Inspect your hands for abrasion, open wound or injury', 0.25, '2026-03-12 11:48:25', '2026-03-12 11:48:25'),
(223, 14, 'Open the tap', 'Open the tap', 0.50, '2026-03-12 11:49:22', '2026-03-12 11:49:22'),
(224, 14, 'Wet your hands', 'Wet your hands', 0.25, '2026-03-12 11:49:55', '2026-03-12 11:49:55'),
(225, 14, 'Apply enough soap', 'Apply enough soap to cover all hand surfaces', 0.25, '2026-03-12 11:51:19', '2026-03-12 11:51:19'),
(226, 14, 'Lower elbow', 'Lower elbow as you proceed with hand washing', 0.25, '2026-03-12 11:52:22', '2026-03-12 11:52:22'),
(227, 14, 'Rub hands', 'Rub hands palm to palm', 0.25, '2026-03-12 11:53:32', '2026-03-12 11:53:32'),
(228, 14, 'Right palm', 'Right palm over left dorsum with interlaced fingers and vice versa', 1.00, '2026-03-12 11:54:57', '2026-03-12 11:54:57'),
(229, 14, 'Palm to palm', 'Palm to palm with fingers interlaced', 0.25, '2026-03-12 11:55:42', '2026-03-12 11:55:42'),
(230, 14, 'Backs of fingers', 'Backs of fingers to opposing palms with fingers interlocked', 0.25, '2026-03-12 11:56:45', '2026-03-12 11:56:45'),
(231, 14, 'Rotational rubbing', 'Rotational rubbing of left thumb clasped in right palm and vice versa', 1.00, '2026-03-12 11:57:51', '2026-03-12 11:57:51'),
(232, 14, 'Rotational rubbing', 'Rotational rubbing, backwards and forwards with clasped fingers of right hand in left palm and vice versa', 1.00, '2026-03-12 11:58:56', '2026-03-12 11:58:56'),
(233, 14, 'Ensure you do not touch the sink', 'Ensure you do not touch the sink to prevent recontamination', 1.00, '2026-03-12 12:00:20', '2026-03-12 12:00:20'),
(234, 14, 'Rinse hands with water', 'Rinse hands with water', 0.50, '2026-03-12 12:01:04', '2026-03-12 12:01:04'),
(235, 14, 'Dry thoroughly', 'Dry thoroughly with a single-use towel', 0.25, '2026-03-12 12:01:36', '2026-03-12 12:01:36'),
(236, 14, 'Use towel to turn off', 'Use towel to turn off faucet', 0.25, '2026-03-12 12:02:18', '2026-03-12 12:02:18'),
(237, 14, 'Dispose', 'Dispose the towel into waste bin', 0.50, '2026-03-12 12:03:13', '2026-03-12 12:03:13'),
(238, 14, 'Keep', 'Keep your hands safe', 0.50, '2026-03-12 12:04:03', '2026-03-12 12:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session1` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `semester` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `exam_type` varchar(255) DEFAULT NULL,
  `exam_mode` varchar(255) NOT NULL,
  `exam_category` varchar(255) NOT NULL,
  `no_of_qst` int(11) DEFAULT NULL,
  `upload_no_of_qst` int(11) DEFAULT NULL,
  `question_type` varchar(255) DEFAULT NULL,
  `question_no` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `answer` varchar(1) DEFAULT NULL,
  `graphic` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_settings`
--

CREATE TABLE `question_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session1` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `upload_no_of_qst` int(11) NOT NULL,
  `no_of_qst` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_category` varchar(255) NOT NULL,
  `exam_status` enum('Active','Inactive') NOT NULL,
  `exam_mode` varchar(255) NOT NULL,
  `exam_date` date NOT NULL,
  `check_result` int(11) NOT NULL,
  `lock_id` int(10) DEFAULT NULL,
  `lock_status` int(11) NOT NULL,
  `exam_view_type` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_singles`
--

CREATE TABLE `question_singles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_no` int(11) NOT NULL,
  `no_of_qst` int(11) NOT NULL,
  `session1` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `upload_no_of_qst` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_category` varchar(255) NOT NULL,
  `exam_mode` varchar(255) NOT NULL,
  `question_type` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `graphic` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `software_version`
--

CREATE TABLE `software_version` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `software_version`
--

INSERT INTO `software_version` (`id`, `name`, `version`, `created_at`, `updated_at`) VALUES
(1, 'Computer Based Test', '2.5.1', '2024-05-09 18:19:26', '2024-05-09 18:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `practical_question` text NOT NULL,
  `total_marks` decimal(3,2) NOT NULL DEFAULT 0.00,
  `duration` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `title`, `practical_question`, `total_marks`, `duration`, `created_at`, `updated_at`) VALUES
(4, 'PROCEDURE STATION 1', 'PHYSICAL ASSESSMENT OF THE NOSE, MOUTH AND PHARYNX', 0.00, 5, '2026-02-15 18:18:14', '2026-02-18 14:05:26'),
(5, 'PROCEDURE STATION 2', 'EYE DROP INSTILATION', 0.00, 5, '2026-02-15 18:20:17', '2026-02-18 14:06:05'),
(6, 'PROCEDURE STATION 3', 'INSERTION 	OF 	NASOGASTRIC 	TUBE 	FOR 	A CONSCIOUS PATIENT', 0.00, 5, '2026-02-15 18:20:57', '2026-02-18 14:06:44'),
(7, 'STATION 1(2nd Year, 2nd semester)', 'OXYGEN ADMINISTRATION', 0.00, 5, '2026-03-11 13:00:39', '2026-03-11 13:46:25'),
(8, 'STATION 2 (2nd Year, 2nd Semester)', 'POSITION', 0.00, 5, '2026-03-11 13:02:29', '2026-03-11 13:47:15'),
(9, 'STATION 3  (2nd Year, 2nd Semester)', 'ENEMA ADMINISTRATION', 0.00, 5, '2026-03-11 13:03:27', '2026-03-11 13:47:33'),
(10, 'STATION 4  (2nd Year, 2nd Semester)', 'HAND HYGIENE', 0.00, 5, '2026-03-11 13:04:45', '2026-03-11 13:47:52'),
(11, 'STATION 5  (2nd Year, 2nd Semester)', 'FEMALE CATHETERIZATION', 0.00, 5, '2026-03-11 13:06:42', '2026-03-11 13:48:12'),
(12, 'STATION 1  ND 24/25,', 'ORAL HYGIENE', 0.00, 5, '2026-03-12 10:46:27', '2026-03-12 10:46:27'),
(13, 'STATION 2 ND 24/25,', 'BED MAKING (OCCUPIED BED)', 0.00, 5, '2026-03-12 10:51:12', '2026-03-12 10:51:26'),
(14, 'STATION 3  ND 24/25,', 'HAND HYGIENE', 0.00, 5, '2026-03-12 10:52:37', '2026-03-12 10:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `station_results`
--

CREATE TABLE `station_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `station_id` bigint(20) UNSIGNED NOT NULL,
  `examiner_score` decimal(5,2) NOT NULL DEFAULT 0.00,
  `mcq_score` decimal(5,2) NOT NULL DEFAULT 0.00,
  `total_score` decimal(5,2) NOT NULL DEFAULT 0.00,
  `mcq_time_left` int(11) NOT NULL DEFAULT 0,
  `mcq_submitted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_activities`
--

CREATE TABLE `student_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `activity` varchar(255) NOT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_admissions`
--

CREATE TABLE `student_admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_no` text NOT NULL,
  `surname` text DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `other_name` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `department1` text DEFAULT NULL,
  `phone_no` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `level` text DEFAULT NULL,
  `previous_level` varchar(255) DEFAULT NULL,
  `sex` text DEFAULT NULL,
  `phone_no1` text DEFAULT NULL,
  `user_name` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `picture_name` text DEFAULT NULL,
  `session1` text DEFAULT NULL,
  `login_status` text DEFAULT NULL,
  `login_attempts` int(11) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_admissions`
--

INSERT INTO `student_admissions` (`id`, `admission_no`, `surname`, `first_name`, `other_name`, `department`, `department1`, `phone_no`, `state`, `level`, `previous_level`, `sex`, `phone_no1`, `user_name`, `password`, `picture_name`, `session1`, `login_status`, `login_attempts`, `user_type`, `created_at`, `updated_at`) VALUES
(621, 'CHO2025001', 'AKANDE', 'ELIZABETH', 'OLUWATOYIN', 'CHO', NULL, '07034271855', 'OYO', '100', NULL, 'Female', NULL, NULL, '$2y$12$ZUWUkfWJ7/QgDdd.UnDx1uCpJovkjFi.m4D2ZCU8nzQZO1dXEEocy', 'blank', '2025/2026', '0', 0, 'STUDENT', '2026-04-29 10:56:37', '2026-04-29 10:56:37'),
(622, 'FM1234', 'AKINYOOYE', 'AKINFEMI', 'EMMANUEL', 'Community Health', NULL, '07032689329', 'OYO', '100', NULL, 'Male', NULL, NULL, '$2y$12$sF/1YimgeLRqM1jgchQ5LOeiqD63f0NPIbZ5gAWXA1jebc84nMw/m', 'FM1234_1777715151', '2025/2026', '0', 0, 'STUDENT', '2026-05-02 08:36:23', '2026-05-02 08:45:51'),
(623, 'CHEW2025001', 'Okafor', 'Chiamaka', 'Nneka', 'Community Health', 'Community Health', '8123456789', 'Anambra', '200', NULL, 'F', '8123456789', '8123456789', '$2y$12$U9ZVEQ/R6s6ab1YMhG4NIeek5YYHJUKKpSlOTiFkpQM1Rp1fx7QBW', 'blank', '2025/2026', '0', 0, 'student', '2026-05-02 09:15:11', '2026-05-02 09:15:11'),
(624, 'CHO2025002', 'Bello', 'Sadiq', 'Ibrahim', 'CHO', 'CHO', '7099887766', 'Kano', '100', NULL, 'M', '7099887766', '7099887766', '$2y$12$SzmFjPaYyAEr92SPAzW/vu9ngCN38ck9tIh8pfxU6cYxZq95uuIHO', 'blank', '2025/2026', '0', 0, 'student', '2026-05-02 09:15:11', '2026-05-02 09:15:11'),
(625, 'CHEW2025002', 'Eze', 'Ifeoma', 'Grace', 'Community Health', 'Community Health', '9011223344', 'Enugu', '300', NULL, 'F', '9011223344', '9011223344', '$2y$12$i6/eCyTcvUNXZmm.1ZRC2urO.eMjNBbm7ImnVU.DFrbStuVfHcdUm', 'blank', '2025/2026', '0', 0, 'student', '2026-05-02 09:15:11', '2026-05-02 09:15:11'),
(626, 'CHO2025003', 'Olatunji', 'Kemi', 'Abiola', 'CHO', 'CHO', '8155667788', 'Oyo', '200', NULL, 'F', '8155667788', '8155667788', '$2y$12$Ug0dbI2Oj9FFSQ4JUked0uDhiTORGnH5iw4LCszj4JW9fhm/SAcyO', 'blank', '2025/2026', '0', 0, 'student', '2026-05-02 09:15:12', '2026-05-02 09:15:12'),
(627, 'CHEW2025003', 'Danjuma', 'Musa', 'Abdullahi', 'Community Health', 'Community Health', '7033445566', 'Kaduna', '100', NULL, 'M', '7033445566', '7033445566', '$2y$12$WolfeblRnl5/US.yqsvyy.Vb5W0.E0yZcn124PB0qC3dgaPo9CD2q', 'blank', '2025/2026', '0', 0, 'student', '2026-05-02 09:15:12', '2026-05-02 09:15:12'),
(628, 'CHO2025004', 'Udo', 'Emem', 'Joseph', 'CHO', 'CHO', '8022334455', 'Akwa Ibom', '300', NULL, 'F', '8022334455', '8022334455', '$2y$12$XOCUnD3JzQ34OsTBNlu32O6hNeU7es9lUorwfTnPi6ktmaoGyv3ei', 'blank', '2025/2026', '0', 0, 'student', '2026-05-02 09:15:13', '2026-05-02 09:15:13'),
(629, 'CHEW2025004', 'Balogun', 'Sola', 'Adekunle', 'Community Health', 'Community Health', '8166778899', 'Lagos', '200', NULL, 'M', '8166778899', '8166778899', '$2y$12$jq/./TJLcCCxrcadanBFDeaD4vYn8qnzEQKUetEOKzWDQQNNLjlTe', 'blank', '2025/2026', '0', 0, 'student', '2026-05-02 09:15:13', '2026-05-02 09:15:13'),
(630, 'CHO2025005', 'Yakubu', 'Fatima', 'Zainab', 'CHO', 'CHO', '9044556677', 'Niger', '100', NULL, 'F', '9044556677', '9044556677', '$2y$12$uYJ9.bBktkNMaDVz5zjhJeYeztaL5ueZrBdijuQGemkYb2EFuS7EK', 'blank', '2025/2026', '0', 0, 'student', '2026-05-02 09:15:13', '2026-05-02 09:15:13'),
(631, 'CHEW2025005', 'Nwankwo', 'Chinedu', 'Obi', 'Community Health', 'Community Health', '7055667788', 'Imo', '100', NULL, 'M', '7055667788', '7055667788', '$2y$12$RylBikzcYYj.O2iJj2hdB.k1D/bQTlk4qwYVafDtBMK/fCKYJ3Vym', 'blank', '2025/2026', '0', 0, 'student', '2026-05-02 09:15:14', '2026-05-02 09:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `student_mcq_answers`
--

CREATE TABLE `student_mcq_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `station_id` int(10) NOT NULL,
  `mcq_id` bigint(20) UNSIGNED NOT NULL,
  `option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `score` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_progress`
--

CREATE TABLE `student_progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED DEFAULT NULL,
  `material_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theory_answers`
--

CREATE TABLE `theory_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `examstatus` int(11) NOT NULL,
  `studentno` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `total_score` double NOT NULL,
  `no_of_qst` int(11) NOT NULL,
  `session1` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `upload_no_of_qst` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_category` varchar(255) NOT NULL,
  `exam_mode` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `minute` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `exam_date` date NOT NULL,
  `A1` int(11) DEFAULT NULL,
  `A2` int(11) DEFAULT NULL,
  `A3` int(11) DEFAULT NULL,
  `A4` int(11) DEFAULT NULL,
  `A5` int(11) DEFAULT NULL,
  `A6` int(11) DEFAULT NULL,
  `A7` int(11) DEFAULT NULL,
  `A8` int(11) DEFAULT NULL,
  `A9` int(11) DEFAULT NULL,
  `A10` int(11) DEFAULT NULL,
  `Q1` text DEFAULT NULL,
  `Q2` text DEFAULT NULL,
  `Q3` text DEFAULT NULL,
  `Q4` text DEFAULT NULL,
  `Q5` text DEFAULT NULL,
  `Q6` text DEFAULT NULL,
  `Q7` text DEFAULT NULL,
  `Q8` text DEFAULT NULL,
  `Q9` text DEFAULT NULL,
  `Q10` text DEFAULT NULL,
  `ANS1` text DEFAULT NULL,
  `ANS2` text DEFAULT NULL,
  `ANS3` text DEFAULT NULL,
  `ANS4` text DEFAULT NULL,
  `ANS5` text DEFAULT NULL,
  `ANS6` text DEFAULT NULL,
  `ANS7` text DEFAULT NULL,
  `ANS8` text DEFAULT NULL,
  `ANS9` text DEFAULT NULL,
  `ANS10` text DEFAULT NULL,
  `score1` double DEFAULT NULL,
  `score2` double DEFAULT NULL,
  `score3` double DEFAULT NULL,
  `score4` double DEFAULT NULL,
  `score5` double DEFAULT NULL,
  `score6` double DEFAULT NULL,
  `score7` double DEFAULT NULL,
  `score8` double DEFAULT NULL,
  `score9` double DEFAULT NULL,
  `score10` double DEFAULT NULL,
  `QT1` varchar(255) DEFAULT NULL,
  `QT2` varchar(255) DEFAULT NULL,
  `QT3` varchar(255) DEFAULT NULL,
  `QT4` varchar(255) DEFAULT NULL,
  `QT5` varchar(255) DEFAULT NULL,
  `QT6` varchar(255) DEFAULT NULL,
  `QT7` varchar(255) DEFAULT NULL,
  `QT8` varchar(255) DEFAULT NULL,
  `QT9` varchar(255) DEFAULT NULL,
  `QT10` varchar(255) DEFAULT NULL,
  `G1` varchar(255) DEFAULT NULL,
  `G2` varchar(255) DEFAULT NULL,
  `G3` varchar(255) DEFAULT NULL,
  `G4` varchar(255) DEFAULT NULL,
  `G5` varchar(255) DEFAULT NULL,
  `G6` varchar(255) DEFAULT NULL,
  `G7` varchar(255) DEFAULT NULL,
  `G8` varchar(255) DEFAULT NULL,
  `G9` varchar(255) DEFAULT NULL,
  `G10` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theory_questions`
--

CREATE TABLE `theory_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_no` int(11) NOT NULL,
  `no_of_qst` int(11) NOT NULL,
  `session1` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `upload_no_of_qst` int(11) NOT NULL,
  `level` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_category` varchar(255) NOT NULL,
  `exam_mode` varchar(255) NOT NULL,
  `question_type` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `graphic` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_status` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `login_attempts` int(11) NOT NULL,
  `exam_setting` int(11) NOT NULL,
  `edit_exam_setting` int(11) NOT NULL,
  `qst_bank` int(11) NOT NULL,
  `create_question_bank` int(11) NOT NULL,
  `edit_question_bank` int(11) NOT NULL,
  `std_list` int(11) NOT NULL,
  `create_std_list` int(11) NOT NULL,
  `edit_std_list` int(11) NOT NULL,
  `delete_std_list` int(11) NOT NULL,
  `std_login_status` int(11) NOT NULL,
  `edit_std_login_status` int(11) NOT NULL,
  `change_course` int(11) NOT NULL,
  `edit_change_course` int(11) NOT NULL,
  `user_create` int(11) NOT NULL,
  `create_user_create` int(11) NOT NULL,
  `edit_user_create` int(11) NOT NULL,
  `status_user_create` int(11) NOT NULL,
  `college_setup` int(11) NOT NULL,
  `create_college_setup` int(11) NOT NULL,
  `edit_college_setup` int(11) NOT NULL,
  `delete_college_setup` int(11) NOT NULL,
  `report` int(11) NOT NULL,
  `check_report` int(11) NOT NULL,
  `export_report` int(11) NOT NULL,
  `grading_report` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `station_id` bigint(20) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `user_status`, `name`, `email`, `email_verified_status`, `email_verified_at`, `password`, `remember_token`, `login_attempts`, `exam_setting`, `edit_exam_setting`, `qst_bank`, `create_question_bank`, `edit_question_bank`, `std_list`, `create_std_list`, `edit_std_list`, `delete_std_list`, `std_login_status`, `edit_std_login_status`, `change_course`, `edit_change_course`, `user_create`, `create_user_create`, `edit_user_create`, `status_user_create`, `college_setup`, `create_college_setup`, `edit_college_setup`, `delete_college_setup`, `report`, `check_report`, `export_report`, `grading_report`, `created_at`, `updated_at`, `station_id`) VALUES
(1, 'superadmin', 'Active', 'Admin CBT', 'admin@gmail.com', 1, NULL, '$2y$12$ZnTRyBs.WISiLa5h/2lwxu3.zl1UR6I8Jn8DftqX4I3swyQIHBQS2', NULL, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2024-05-09 18:19:26', '2026-01-21 11:15:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_sessions`
--
ALTER TABLE `academic_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbt_classes`
--
ALTER TABLE `cbt_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbt_evaluation1`
--
ALTER TABLE `cbt_evaluation1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbt_evaluation2`
--
ALTER TABLE `cbt_evaluation2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbt_evaluations`
--
ALTER TABLE `cbt_evaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_setups`
--
ALTER TABLE `college_setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_materials`
--
ALTER TABLE `course_materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_materials_course_module_id_index` (`course_module_id`);

--
-- Indexes for table `course_modules`
--
ALTER TABLE `course_modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_modules_course_id_module_number_unique` (`course_id`,`module_number`);

--
-- Indexes for table `course_study_all`
--
ALTER TABLE `course_study_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examiner_scores`
--
ALTER TABLE `examiner_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examiner_scores_student_id_foreign` (`student_id`),
  ADD KEY `examiner_scores_station_id_foreign` (`station_id`),
  ADD KEY `examiner_scores_procedure_id_foreign` (`procedure_id`);

--
-- Indexes for table `exam_settings`
--
ALTER TABLE `exam_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_types`
--
ALTER TABLE `exam_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `failed_logins`
--
ALTER TABLE `failed_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loading_checks`
--
ALTER TABLE `loading_checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq_options`
--
ALTER TABLE `mcq_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mcq_options_mcq_id_foreign` (`mcq_id`);

--
-- Indexes for table `mcq_questions`
--
ALTER TABLE `mcq_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mcq_questions_station_id_foreign` (`station_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `procedures_station_id_foreign` (`station_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_settings`
--
ALTER TABLE `question_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_singles`
--
ALTER TABLE `question_singles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `software_version`
--
ALTER TABLE `software_version`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station_results`
--
ALTER TABLE `station_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `station_results_student_id_foreign` (`student_id`),
  ADD KEY `station_results_station_id_foreign` (`station_id`);

--
-- Indexes for table `student_activities`
--
ALTER TABLE `student_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_activities_student_id_foreign` (`student_id`);

--
-- Indexes for table `student_admissions`
--
ALTER TABLE `student_admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_mcq_answers`
--
ALTER TABLE `student_mcq_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_mcq_answers_student_id_foreign` (`student_id`),
  ADD KEY `student_mcq_answers_mcq_id_foreign` (`mcq_id`),
  ADD KEY `student_mcq_answers_option_id_foreign` (`option_id`);

--
-- Indexes for table `student_progress`
--
ALTER TABLE `student_progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_progress_student_id_foreign` (`student_id`),
  ADD KEY `student_progress_course_id_foreign` (`course_id`),
  ADD KEY `student_progress_module_id_foreign` (`module_id`),
  ADD KEY `student_progress_material_id_foreign` (`material_id`);

--
-- Indexes for table `theory_answers`
--
ALTER TABLE `theory_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theory_questions`
--
ALTER TABLE `theory_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_station_id_foreign` (`station_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_sessions`
--
ALTER TABLE `academic_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cbt_evaluation1`
--
ALTER TABLE `cbt_evaluation1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cbt_evaluation2`
--
ALTER TABLE `cbt_evaluation2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cbt_evaluations`
--
ALTER TABLE `cbt_evaluations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_setups`
--
ALTER TABLE `college_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_materials`
--
ALTER TABLE `course_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_modules`
--
ALTER TABLE `course_modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_study_all`
--
ALTER TABLE `course_study_all`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `examiner_scores`
--
ALTER TABLE `examiner_scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_settings`
--
ALTER TABLE `exam_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_types`
--
ALTER TABLE `exam_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loading_checks`
--
ALTER TABLE `loading_checks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mcq_options`
--
ALTER TABLE `mcq_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=653;

--
-- AUTO_INCREMENT for table `mcq_questions`
--
ALTER TABLE `mcq_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_settings`
--
ALTER TABLE `question_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_singles`
--
ALTER TABLE `question_singles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `station_results`
--
ALTER TABLE `station_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_activities`
--
ALTER TABLE `student_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_admissions`
--
ALTER TABLE `student_admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=632;

--
-- AUTO_INCREMENT for table `student_mcq_answers`
--
ALTER TABLE `student_mcq_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6832;

--
-- AUTO_INCREMENT for table `student_progress`
--
ALTER TABLE `student_progress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theory_answers`
--
ALTER TABLE `theory_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theory_questions`
--
ALTER TABLE `theory_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_materials`
--
ALTER TABLE `course_materials`
  ADD CONSTRAINT `course_materials_course_module_id_foreign` FOREIGN KEY (`course_module_id`) REFERENCES `course_modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_modules`
--
ALTER TABLE `course_modules`
  ADD CONSTRAINT `course_modules_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `examiner_scores`
--
ALTER TABLE `examiner_scores`
  ADD CONSTRAINT `examiner_scores_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `examiner_scores_station_id_foreign` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `examiner_scores_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_admissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mcq_options`
--
ALTER TABLE `mcq_options`
  ADD CONSTRAINT `mcq_options_mcq_id_foreign` FOREIGN KEY (`mcq_id`) REFERENCES `mcq_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mcq_questions`
--
ALTER TABLE `mcq_questions`
  ADD CONSTRAINT `mcq_questions_station_id_foreign` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `procedures`
--
ALTER TABLE `procedures`
  ADD CONSTRAINT `procedures_station_id_foreign` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `station_results`
--
ALTER TABLE `station_results`
  ADD CONSTRAINT `station_results_station_id_foreign` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `station_results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_admissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_activities`
--
ALTER TABLE `student_activities`
  ADD CONSTRAINT `student_activities_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_admissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_mcq_answers`
--
ALTER TABLE `student_mcq_answers`
  ADD CONSTRAINT `student_mcq_answers_mcq_id_foreign` FOREIGN KEY (`mcq_id`) REFERENCES `mcq_questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_mcq_answers_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `mcq_options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_mcq_answers_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_admissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_progress`
--
ALTER TABLE `student_progress`
  ADD CONSTRAINT `student_progress_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_progress_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `course_materials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_progress_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `course_modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_progress_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_admissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_station_id_foreign` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
