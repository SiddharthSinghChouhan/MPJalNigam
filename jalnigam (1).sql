-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 10:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jalnigam`
--

-- --------------------------------------------------------

--
-- Table structure for table `addinfo`
--

CREATE TABLE `addinfo` (
  `id` int(11) NOT NULL,
  `agreementno` varchar(255) NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `villages` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `projectpopulation` varchar(255) NOT NULL,
  `noofhousehold` varchar(255) NOT NULL,
  `projectcost` varchar(255) NOT NULL,
  `projectcost2` varchar(255) NOT NULL,
  `projectduaration` varchar(255) NOT NULL,
  `dateofcompletion` date NOT NULL,
  `expecteddate` date NOT NULL,
  `agencyname` varchar(255) NOT NULL,
  `projectmanagername` varchar(255) NOT NULL,
  `financialprogress` varchar(75) NOT NULL,
  `physicalprogress` varchar(15) NOT NULL,
  `piu` varchar(50) NOT NULL,
  `remark` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addinfo`
--

INSERT INTO `addinfo` (`id`, `agreementno`, `projectname`, `district`, `villages`, `source`, `projectpopulation`, `noofhousehold`, `projectcost`, `projectcost2`, `projectduaration`, `dateofcompletion`, `expecteddate`, `agencyname`, `projectmanagername`, `financialprogress`, `physicalprogress`, `piu`, `remark`, `added_on`) VALUES
(1, '34', 'www', 'ttt', '22', 'hjgh', '8878', '87', '78887', '787', '7', '0000-00-00', '0000-00-00', 'hy', 'yy', '77', '88', 'indore', 'hj', '2020-05-07 09:19:38'),
(2, '1112', 'qww', 'www', '67', 'NJJJ', '898', '98', '988', '989', '9', '0000-00-00', '0000-00-00', 'GHH', 'JJJ', '78', '99', 'bhopal', 'HH', '2020-05-07 09:47:16'),
(3, '1112', 'qww', 'www', '67', 'NJJJ', '898', '98', '988', '989', '9', '0000-00-00', '0000-00-00', 'GHH', 'JJJ', '78', '99', 'jabalpur', 'HH', '2020-05-07 09:47:16'),
(4, '13', 'MH', 'jjj', '9', 'jhjh', '7878', '878', '88787', '78787', '8', '1998-09-09', '1997-08-07', 'jjg', 'gjgg', '87', '88', 'indore', 'ghg', '2020-05-08 12:50:15'),
(5, '13', 'MH', 'jjj', '9', 'jhjh', '7878', '878', '88787', '78787', '8', '1998-09-09', '1997-08-07', 'jjg', 'gjgg', '87', '88', 'guna', 'ghg', '2020-05-08 12:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'yash@11', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `piu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`, `piu`) VALUES
(1, 'yash@123', '123456', 'indore'),
(2, 'ymj@11', '000999', 'guna'),
(3, 'ankit@12', '123344', 'bhopal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addinfo`
--
ALTER TABLE `addinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addinfo`
--
ALTER TABLE `addinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
