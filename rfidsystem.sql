-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2020 at 05:44 AM
-- Server version: 5.7.26
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rfidsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(1, 'Education'),
(2, 'Hotel and Restaurant Manager'),
(5, 'Computer Science'),
(6, 'Tourism'),
(7, 'Business Administration');

-- --------------------------------------------------------

--
-- Table structure for table `rfid`
--

DROP TABLE IF EXISTS `rfid`;
CREATE TABLE IF NOT EXISTS `rfid` (
  `rfid_number` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_log`
--

DROP TABLE IF EXISTS `time_log`;
CREATE TABLE IF NOT EXISTS `time_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_ref_id` int(11) DEFAULT NULL,
  `time_in` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_log`
--

INSERT INTO `time_log` (`log_id`, `student_ref_id`, `time_in`, `log_date`) VALUES
(6, 10, '2020-02-25 07:26:48', '2020-02-25 15:26:48'),
(8, 10, '2020-02-25 07:29:40', '2020-02-25 15:29:40'),
(7, 10, '2020-02-25 07:27:22', '2020-02-25 15:27:22'),
(4, 10, '2020-02-25 07:26:05', '2020-02-25 15:26:05'),
(5, 10, '2020-02-25 07:26:09', '2020-02-25 15:26:09'),
(9, 32, '2020-02-25 08:02:33', '2020-02-25 16:02:33'),
(10, 32, '2020-02-25 08:03:20', '2020-02-25 16:03:20'),
(11, 30, '2020-02-25 08:03:30', '2020-02-25 16:03:30'),
(12, 31, '2020-02-25 08:03:58', '2020-02-25 16:03:58'),
(13, 31, '2020-02-25 08:05:09', '2020-02-25 16:05:09'),
(14, 31, '2020-02-25 08:39:10', '2020-02-25 16:39:10'),
(15, 10, '2020-02-27 03:53:15', '2020-02-27 11:53:15'),
(16, 10, '2020-02-27 03:53:19', '2020-02-27 11:53:19'),
(17, 31, '2020-02-28 03:56:44', '2020-02-28 11:56:44'),
(18, 35, '2020-02-28 04:01:21', '2020-02-28 12:01:21'),
(19, 35, '2020-02-28 04:30:21', '2020-02-28 12:30:21'),
(20, 35, '2020-02-28 04:34:25', '2020-02-28 12:34:25'),
(21, 31, '2020-02-28 04:36:27', '2020-02-28 12:36:27'),
(22, 31, '2020-02-28 04:36:38', '2020-02-28 12:36:38'),
(23, 31, '2020-02-28 04:36:47', '2020-02-28 12:36:47'),
(24, 31, '2020-02-28 04:38:11', '2020-02-28 12:38:11'),
(25, 31, '2020-02-28 04:39:11', '2020-02-28 12:39:11'),
(26, 31, '2020-02-28 04:39:27', '2020-02-28 12:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `ordinal_year` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `id_image` varchar(255) DEFAULT NULL,
  `ref_rfid` varchar(255) DEFAULT NULL,
  `isadmin` tinyint(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `student_no` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `course`, `ordinal_year`, `semester`, `id_image`, `ref_rfid`, `isadmin`, `email`, `student_no`) VALUES
(1, 'superadmin', 'superadmin', 'Administrator', '', '', NULL, '', '', 'Face_to_Face4.png', '', 1, 'dremoroza@gmail.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
