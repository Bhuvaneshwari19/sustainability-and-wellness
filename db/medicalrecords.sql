-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 10:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthmonitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecords`
--

CREATE TABLE `medicalrecords` (
  `temperature` bigint(20) NOT NULL,
  `bp` bigint(20) NOT NULL,
  `respirationrate` bigint(20) NOT NULL,
  `glucose` bigint(20) NOT NULL,
  `heartrate` bigint(20) NOT NULL,
  `oxygensaturation` bigint(20) NOT NULL,
  `ecg` bigint(20) NOT NULL,
  `Updateddatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicalrecords`
--

INSERT INTO `medicalrecords` (`temperature`, `bp`, `respirationrate`, `glucose`, `heartrate`, `oxygensaturation`, `ecg`, `Updateddatetime`, `UserID`) VALUES
(103, 85, 14, 127, 82, 92, 69, '2021-02-09 22:47:57', 1),
(100, 112, 17, 134, 94, 99, 64, '2021-02-09 22:47:57', 2),
(104, 119, 10, 144, 70, 95, 61, '2021-02-09 22:47:57', 3),
(106, 82, 10, 122, 96, 97, 92, '2021-02-09 22:47:57', 4),
(97, 106, 10, 123, 74, 83, 90, '2021-02-09 22:47:57', 5),
(98, 83, 15, 124, 94, 84, 89, '2021-02-09 22:47:57', 6),
(101, 112, 11, 122, 95, 94, 69, '2021-02-09 22:47:57', 1),
(100, 91, 10, 148, 60, 83, 73, '2021-02-09 22:47:57', 2),
(105, 98, 13, 142, 70, 81, 87, '2021-02-09 22:47:57', 3),
(95, 86, 18, 127, 70, 84, 97, '2021-02-09 22:47:57', 4),
(100, 110, 11, 142, 81, 83, 75, '2021-02-09 22:47:57', 5),
(97, 101, 16, 139, 64, 96, 99, '2021-02-09 22:47:57', 6),
(102, 100, 16, 131, 60, 99, 66, '2021-02-09 23:37:38', 1),
(102, 85, 11, 147, 82, 87, 90, '2021-02-09 23:37:38', 2),
(103, 85, 10, 136, 84, 81, 95, '2021-02-09 23:37:38', 3),
(104, 110, 12, 145, 62, 96, 81, '2021-02-09 23:37:38', 4),
(99, 95, 10, 139, 98, 97, 78, '2021-02-09 23:37:38', 5),
(101, 88, 10, 123, 77, 97, 60, '2021-02-09 23:37:38', 6),
(97, 113, 10, 140, 82, 88, 81, '2021-02-09 23:42:38', 1),
(98, 109, 16, 148, 86, 92, 92, '2021-02-09 23:42:38', 2),
(101, 91, 13, 134, 93, 88, 85, '2021-02-09 23:42:38', 3),
(105, 118, 13, 140, 71, 97, 76, '2021-02-09 23:42:38', 4),
(103, 105, 17, 137, 97, 82, 75, '2021-02-09 23:42:38', 5),
(104, 95, 15, 125, 88, 97, 66, '2021-02-09 23:42:38', 6),
(106, 90, 14, 145, 96, 83, 91, '2021-02-09 23:47:38', 1),
(97, 96, 12, 136, 84, 98, 93, '2021-02-09 23:47:38', 2),
(101, 93, 14, 138, 94, 84, 70, '2021-02-09 23:47:38', 3),
(100, 117, 11, 129, 64, 84, 95, '2021-02-09 23:47:38', 4),
(96, 83, 18, 124, 95, 89, 93, '2021-02-09 23:47:38', 5),
(106, 118, 16, 135, 72, 83, 72, '2021-02-09 23:47:38', 6),
(106, 106, 10, 138, 95, 82, 66, '2021-02-09 23:52:38', 1),
(99, 88, 12, 143, 75, 93, 64, '2021-02-09 23:52:38', 2),
(97, 98, 11, 132, 96, 90, 60, '2021-02-09 23:52:38', 3),
(100, 119, 17, 125, 78, 89, 70, '2021-02-09 23:52:38', 4),
(100, 113, 16, 127, 78, 84, 77, '2021-02-09 23:52:38', 5),
(106, 92, 17, 128, 64, 97, 85, '2021-02-09 23:52:38', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
