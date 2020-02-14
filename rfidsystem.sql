-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 14, 2020 at 10:58 AM
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
('123321123', 1),
('543452321', 1),
('123432123', 1),
('567564646456', 1),
('879879789789', 1),
('24235434345', 1),
('1111', 1),
('22222', 1),
('5555', 1),
('7777', 1),
('9999999', 0),
('13123123', 1),
('224324324', 0),
('435345435', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `course`, `ordinal_year`, `semester`, `id_image`, `ref_rfid`, `isadmin`, `email`, `student_no`) VALUES
(1, 'dremoroza', '123321', 'Darrel', 'Lazado', 'Remoroza', NULL, '', '', 'sample.jpg', '', 1, 'dremoroza@gmail.com', ''),
(2, 'vboniol', '123321', 'Vigil', 'B', 'Boniol', 1, '4th', NULL, NULL, '123321123', 0, 'dremoroza@gmail.com', '21312312321'),
(3, 'jamin', '123321', 'Julian', 'A', 'Amin', 2, '4th', NULL, NULL, '543452321', 0, 'dremoroza@gmail.com', '657455345'),
(4, 'jsins', '123321', 'Johny', 'A', 'Sins', 5, '3rd', NULL, NULL, '123432123', 0, 'dremoroza@gmail.com', '123213'),
(5, 'mtaylor', '123321', 'Maui', 'A', 'Sins', 1, '2nd', '1', NULL, NULL, 0, 'dremoroza@gmail.com', '98989899'),
(6, 'dremoroza2', '123321', 'Darrel', 'Lazado', 'Remoroza', NULL, '', '2nd', 'sample.jpg', '', 1, 'dremoroza@gmail.com', NULL),
(7, 'dremoroza3', '123321', 'Darrel', 'Lazado', 'Remoroza', NULL, '', '2nd', 'sample.jpg', '', 1, 'dremoroza@gmail.com', NULL),
(8, 'dremoroza4', '123321', 'Darrel', 'Lazado', 'Remoroza', NULL, '', '2nd', 'sample.jpg', '', 1, 'dremoroza@gmail.com', NULL),
(9, 'assunta', '123321', 'Maui', 'A', 'Sins', 6, '1st', '1', NULL, NULL, 0, 'dremoroza@gmail.com', '777777777'),
(10, 'richard', '123321', 'Vigil', 'B', 'Boniol', 7, '2nd', NULL, NULL, '', 0, 'dremoroza@gmail.com', '555555555'),
(11, 'dremoroza4', '123321', 'Darrel', 'Lazado', 'Remoroza', NULL, '', '2nd', 'sample.jpg', '', 1, 'dremoroza@gmail.com', NULL),
(13, NULL, NULL, 'dd', 'asd', 'sad', 1, '1st Year', NULL, NULL, '567564646456', 0, NULL, '1111111'),
(14, 'ohndoe', '222222', 'john', 'dsad', 'doe', 1, '1st Year', NULL, NULL, '879879789789', 0, NULL, '222222'),
(15, 'rlucas', '676767', 'rachel', 'b', 'lucas', 2, '1st Year', NULL, NULL, '1111', 0, NULL, '676767'),
(16, 'cferrendo', '121212', 'chris', 's', 'ferrendo', 2, '1st Year', NULL, NULL, '24235434345', 0, NULL, '121212'),
(17, 'sdfsdfs', '24234234', 'sdfsd', 'fsdfs', 'dfsdfs', 2, '1st Year', NULL, NULL, '22222', 0, NULL, '24234234'),
(18, 'dgdgd', '45435', 'dgd', 'gdgfd', 'gdgd', 1, '1st Year', NULL, NULL, '5555', 0, NULL, '45435'),
(19, 'dasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(20, 'sadsad', 'asdsad', 'sadsad', 'asdsa', 'dasd', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(21, 'sasdasd', '4243423432', 'sdsad', 'dasdas', 'asdasd', 1, '1st Year', NULL, NULL, '7777', 0, NULL, '4243423432'),
(22, 'dddd', 'dsadsad', 'sadsad', 'sadsad', 'asdsad', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(23, 'rduterte', '999999', 'rodrigo', 'r', 'duterte', 1, '1st Year', NULL, NULL, '13123123', 0, NULL, '999999');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
