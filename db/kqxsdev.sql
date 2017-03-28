-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 06:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kqxsdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(255) UNSIGNED NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(2) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `code`, `active`, `date`, `name`, `created`, `modified`) VALUES
(10, '1142629240', 0, '2017-03-28', '', '2017-03-28 04:07:11', '2017-03-28 04:07:11'),
(11, '1540840337', 0, '2017-03-28', '', '2017-03-28 04:07:18', '2017-03-28 04:07:18'),
(12, '5620888897', 0, '2017-03-28', '', '2017-03-28 04:07:27', '2017-03-28 04:07:27'),
(13, '3517676406', 0, '2017-03-28', '', '2017-03-28 04:15:44', '2017-03-28 04:15:44'),
(14, '4001854950', 0, '2017-03-28', '', '2017-03-28 04:16:07', '2017-03-28 04:16:07'),
(15, '8176132595', 0, '2017-03-28', '', '2017-03-28 04:16:19', '2017-03-28 04:16:19'),
(16, '1604129062', 0, '2017-03-28', '', '2017-03-28 04:16:30', '2017-03-28 04:16:30'),
(17, '7029850100', 0, '2017-03-28', '', '2017-03-28 04:16:49', '2017-03-28 04:16:49'),
(18, '0216218941', 0, '2017-03-28', '', '2017-03-28 04:19:36', '2017-03-28 04:19:36'),
(19, '6179671117', 0, '2017-03-28', '', '2017-03-28 04:20:40', '2017-03-28 04:20:40'),
(20, '5439814321', 0, '2017-03-28', '', '2017-03-28 04:21:46', '2017-03-28 04:21:46'),
(21, '6438255020', 0, '2017-03-28', '', '2017-03-28 04:29:09', '2017-03-28 04:29:09'),
(22, '5766634476', 0, '2017-03-28', '', '2017-03-28 04:46:27', '2017-03-28 04:46:27'),
(23, '1728762503', 0, '2017-03-28', '', '2017-03-28 04:46:29', '2017-03-28 04:46:29'),
(24, '1836923009', 0, '2017-03-28', '', '2017-03-28 04:46:30', '2017-03-28 04:46:30'),
(25, '2345676992', 0, '2017-03-28', '', '2017-03-28 04:46:30', '2017-03-28 04:46:30'),
(26, '6982864315', 0, '2017-03-28', '', '2017-03-28 04:46:31', '2017-03-28 04:46:31'),
(27, '5017327851', 1, '2017-03-28', '', '2017-03-28 06:17:14', '2017-03-28 06:17:14'),
(28, '5937265260', 0, '2017-03-28', '', '2017-03-28 06:17:17', '2017-03-28 06:17:17'),
(29, '4017048882', 1, '2017-03-28', '', '2017-03-28 06:23:17', '2017-03-28 06:23:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
