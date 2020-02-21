-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2020 at 10:49 AM
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

--
-- Dumping data for table `rfid`
--

INSERT INTO `rfid` (`rfid_number`, `status`) VALUES
('543452321', 1),
('123432123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `time_log`
--

DROP TABLE IF EXISTS `time_log`;
CREATE TABLE IF NOT EXISTS `time_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_ref_id` int(11) DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_log`
--

INSERT INTO `time_log` (`log_id`, `student_ref_id`, `time_in`, `time_out`, `log_date`) VALUES
(1, 2, '09:00:00', '18:00:00', '2020-02-12 11:09:29');

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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `course`, `ordinal_year`, `semester`, `id_image`, `ref_rfid`, `isadmin`, `email`, `student_no`) VALUES
(1, 'dremorozas', '123321', 'Darrels', 'Lazados', 'Remorozas', NULL, '', '', 'Face_to_Face1.png', '', 1, 'dremoroza@gmail.com', ''),
(31, 'jdoe', '777777777', 'john', 's', 'doe', 2, '2nd Year', NULL, 'Live_Lessons2.png', '123432123', 0, NULL, '777777777'),
(29, 'julian', '123321', 'Julian', 'B', 'Amin', NULL, NULL, NULL, 'Mobile2.png', NULL, 1, NULL, NULL),
(30, 'test', '123321', 'Test', 'Test', 'Test', 2, '2nd Year', NULL, 'Live_Lessons1.png', '543452321', 0, NULL, '66666666'),
(10, 'richard', '123321', 'Vigil', 'B', 'Boniol', 7, '2nd Year', NULL, NULL, '', 0, 'dremoroza@gmail.com', '555555555');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
