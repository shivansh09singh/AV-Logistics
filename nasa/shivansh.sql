-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 04:17 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shivansh`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `a_id` varchar(100) NOT NULL,
  `a_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`a_id`, `a_pass`) VALUES
('1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

CREATE TABLE `cargo` (
  `track_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_no` bigint(10) NOT NULL,
  `s_mail` varchar(100) NOT NULL,
  `s_addr` varchar(200) NOT NULL,
  `s_pin` int(6) NOT NULL,
  `s_city` varchar(100) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_no` bigint(10) NOT NULL,
  `r_mail` varchar(100) NOT NULL,
  `r_addr` varchar(200) NOT NULL,
  `r_pin` int(6) NOT NULL,
  `r_city` varchar(100) NOT NULL,
  `c_odate` datetime NOT NULL,
  `c_edate` datetime(6) DEFAULT NULL,
  `c_weight` int(10) NOT NULL,
  `c_length` int(5) NOT NULL,
  `c_breadth` int(5) NOT NULL,
  `c_height` int(10) NOT NULL,
  `c_quantity` int(20) NOT NULL,
  `c_price` int(100) NOT NULL,
  `c_paid` varchar(100) NOT NULL DEFAULT 'Unpaid',
  `c_location` varchar(100) NOT NULL,
  `c_status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cargo`
--

INSERT INTO `cargo` (`track_id`, `user_name`, `s_name`, `s_no`, `s_mail`, `s_addr`, `s_pin`, `s_city`, `r_name`, `r_no`, `r_mail`, `r_addr`, `r_pin`, `r_city`, `c_odate`, `c_edate`, `c_weight`, `c_length`, `c_breadth`, `c_height`, `c_quantity`, `c_price`, `c_paid`, `c_location`, `c_status`) VALUES
(1378729843, 'sam0909shivansh', 'jgug', 6876, 'gkgk', 'giuogoi', 576, 'giuhiu', 'fgiughi', 86576, 'guihih', 'gkhh', 87687, 'guhi', '2017-08-23 14:39:01', NULL, 56, 56, 56, 65, 56, 3136, 'Paid', 'giuhiu', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_name` varchar(100) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `u_message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `c_no` bigint(10) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`f_name`, `l_name`, `c_no`, `e_mail`, `u_name`, `u_pass`) VALUES
('Shivansh', 'Singh', 43563, 'sam0909shivansh@gmail.com', 'sam0909shivansh', 'shivansh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD UNIQUE KEY `a_id_3` (`a_id`);
ALTER TABLE `alogin` ADD FULLTEXT KEY `a_id` (`a_id`);
ALTER TABLE `alogin` ADD FULLTEXT KEY `a_id_2` (`a_id`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`track_id`),
  ADD UNIQUE KEY `track_id` (`track_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `u_name` (`u_name`),
  ADD UNIQUE KEY `u_name_2` (`u_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
