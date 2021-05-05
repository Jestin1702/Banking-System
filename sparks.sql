-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql301.epizy.com
-- Generation Time: Nov 09, 2020 at 01:06 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27149607_BBS`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(12) NOT NULL,
  `cname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `balance` bigint(225) NOT NULL,
  `contact` bigint(225) NOT NULL,
  `cid` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `cname`, `email`, `balance`, `contact`, `cid`) VALUES
(1, 'Devdas', 'devdas@gmail.com', 23000, 8595996352, '328598752001'),
(6, ' Niraj R Shetty', 'nirajshetty2000@gmail.com', 122000, 8525858527, '328598752002'),
(19, 'Vishwas', 'vishwas@gmail.com', 15500, 8525858524, '328598752003'),
(20, 'Vishwas', 'vishwas@gmail.com', 15500, 8525858524, '328598752003'),
(21, 'Latha', 'latha@gmail.com', 5000, 7525858524, '328598752004'),
(22, 'Ram bhat', 'ram@gmail.com', 34500, 6525858524, '328598752005'),
(23, 'Sweta', 'sweta@gmail.com', 9000, 7825858524, '328598752006'),
(24, 'Manish', 'manish@gmail.com', 20000, 6855858524, '328598752007'),
(25, 'Rithik', 'rithik@gmail.com', 95000, 9525858524, '328598752008'),
(26, 'Lithesh', 'lithesh@gmail.com', 10000, 9825858524, '328598752009'),
(27, 'Saakshi', 'saakshi@gmail.com', 30000, 9635858524, '328598752010'),
(28, 'praveen', 'praveen@gmail.com', 15000, 6225858524, '328598752011'),
(29, 'Sam', 'sam@gmail.com', 7000, 9632095906, '328598752012');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(12) NOT NULL,
  `sender` varchar(225) NOT NULL,
  `reciever` varchar(225) NOT NULL,
  `amount` bigint(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `sender`, `reciever`, `amount`, `date`) VALUES
(2, ' Devdas (328598752001)', '  Niraj R Shetty (328598752002)', 2000, '2020-11-09 05:59:06'),
(3, ' Ram bhat (328598752005)', ' Vishwas (328598752003)', 500, '2020-11-09 05:59:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
