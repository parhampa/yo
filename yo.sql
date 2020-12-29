-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 02:50 AM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `short_txt` text COLLATE utf8_persian_ci NOT NULL,
  `txt` text COLLATE utf8_persian_ci NOT NULL,
  `kewords` text COLLATE utf8_persian_ci DEFAULT NULL,
  `pdate` date NOT NULL,
  `fcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `wuser` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `visit` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `short_txt`, `txt`, `kewords`, `pdate`, `fcat_id`, `cat_id`, `wuser`, `visit`) VALUES
(2, 'xzczxc', 'xzczxc', 'xzczxc', 'zxcxzc', '2020-12-14', 12, 14, 'bcvbcvb', 0),
(3, 'xzczxc', 'xzczxc', 'xzczxc', 'zxcxzc', '2020-12-14', 12, 14, 'bcvbcvb', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `keywords` text COLLATE utf8_persian_ci DEFAULT NULL,
  `disc` text COLLATE utf8_persian_ci DEFAULT NULL,
  `fid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `wuser` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`, `keywords`, `disc`, `fid`, `type`, `wuser`) VALUES
(4, 'sads', 'dsfsdf', 'cvxcv', 0, 0, 'xcvsdfg'),
(7, 'asd', 'asdasd', 'sad', 0, 0, 'alih'),
(8, 'sad', 'dsf', 'cvxcv', 7, 0, 'alih');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `wuser` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `link` text COLLATE utf8_persian_ci NOT NULL,
  `fid` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `ordernumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `wuser`, `title`, `link`, `fid`, `place`, `ordernumber`) VALUES
(3, 'alih', 'تست', 'lkfhsdljkfh', 0, 0, 1),
(4, 'alih', 'fdgdfg', 'dfgdfgdfg', 3, 0, 4),
(5, 'alih', 'sads', 'asda', 3, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `short_txt` text COLLATE utf8_persian_ci NOT NULL,
  `txt` text COLLATE utf8_persian_ci NOT NULL,
  `price` decimal(10,0) DEFAULT 0,
  `offer_percent` decimal(10,0) DEFAULT 0,
  `offer_price` decimal(10,0) DEFAULT 0,
  `pcount` int(11) DEFAULT 0,
  `kewords` text COLLATE utf8_persian_ci DEFAULT NULL,
  `pdate` date NOT NULL,
  `fcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `wuser` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `visit` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varbinary(50) NOT NULL,
  `pic` text COLLATE utf8_persian_ci NOT NULL,
  `link` text COLLATE utf8_persian_ci NOT NULL,
  `wuser` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

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
  `exp_date` date NOT NULL,
  `active` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`user`, `title`, `logo`, `keywords`, `disc`, `about`, `tel1`, `tel2`, `mob1`, `mob2`, `post_code`, `email`, `instagram`, `telegram`, `facebook`, `linkedin`, `tweeter`, `pass`, `reg_date`, `exp_date`, `active`) VALUES
('alih', 'alih', NULL, 'asdsadasdlkadshdl', 'ljkashdlasjdhkl', 'ljhdaskljdhasklj', '123456789', '', '1312354', 0, '3135135', 'asdasd@sdfas31.asd', 'sadasdsdfdfsdf', 'asdasdssssssssssssssssssssss', 'asdsaddddddddddddddddd', 'sadasczxc', 'vcxvcvddd', '44332211', '2020-12-20', '2021-12-20', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
