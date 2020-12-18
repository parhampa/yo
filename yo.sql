-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 12:18 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `username` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `pass` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`username`, `pass`, `name`, `family`, `tel`, `email`, `active`) VALUES
('admin', '44332211', 'admin', 'admin', '9155554433', 'email@web.com', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `user` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `logo` text COLLATE utf8_persian_ci DEFAULT NULL,
  `keywords` text COLLATE utf8_persian_ci DEFAULT NULL,
  `disc` text COLLATE utf8_persian_ci DEFAULT NULL,
  `about` text COLLATE utf8_persian_ci DEFAULT NULL,
  `tel1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `tel2` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `mob1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `mob2` int(50) DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `instagram` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `telegram` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `facebook` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `linkedin` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `tweeter` varchar(500) COLLATE utf8_persian_ci DEFAULT NULL,
  `pass` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `reg_date` date NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
