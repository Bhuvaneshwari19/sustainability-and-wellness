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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` bigint(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `gender` enum('male','female','transgender') NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `age`, `contact`, `gender`, `password`, `cpassword`) VALUES
(1, 'demouser', 'demouser@gmail.com', 35, 8473281109, 'male', 'user_1', 'user_1'),
(2, 'shisha takur', 'shishatakur@gmail.com', 30, 9238911872, 'female', 'shisha2020', 'shisha2020'),
(3, 'adm', 'adminhealth@gmail.com', 45, 8645425490, 'male', 'admin@123', 'admin@123'),
(4, 'Ashwin', 'ashwinak@gmail.com', 34, 9782628122, 'male', 'ashak09', 'ashak09'),
(5, 'yogi', 'yogiyogan@gmail.com', 24, 9824191901, 'male', 'yogi@10', 'yogi@10'),
(6, 'sara', 'sarasoya@gmail.com', 26, 6383241489, 'female', 'sara@001', 'sara@001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
