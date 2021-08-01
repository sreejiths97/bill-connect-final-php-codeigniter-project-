-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2021 at 11:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bill_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `acc_no` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `card_no` varchar(25) NOT NULL,
  `cvv` int(11) NOT NULL,
  `exp_date` varchar(15) NOT NULL,
  `upi` int(11) NOT NULL,
  `bal` int(11) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `u_id`, `acc_no`, `name`, `card_no`, `cvv`, `exp_date`, `upi`, `bal`, `st`) VALUES
(3, 12, '45364654', 'meenu v', '5354353', 43, '05/25', 254, 98732, 0),
(4, 12, '6562356', 'meenu v', '6363462', 43, '2021-04-10', 3664, 100000, 0),
(5, 16, '876574646767', 'sreejith s', '234543456787', 456, '2021-07-10', 456545, 100000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `user_add_id` int(11) NOT NULL,
  `b_date` varchar(15) NOT NULL,
  `l_date` varchar(15) NOT NULL,
  `amount` int(11) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `u_id`, `dept_id`, `user_add_id`, `b_date`, `l_date`, `amount`, `st`) VALUES
(18, 16, 8, 33, '21-05-06', '2021-05-28', 544, 3),
(17, 12, 8, 35, '21-05-06', '2021-05-30', 554, 1),
(19, 12, 6, 34, '21-05-07', '2021-05-30', 568, 1),
(20, 16, 6, 32, '21-05-07', '2021-05-28', 724, 3);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

DROP TABLE IF EXISTS `dept`;
CREATE TABLE IF NOT EXISTS `dept` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(30) NOT NULL,
  `dept_email` varchar(30) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`, `dept_email`, `logo`, `st`) VALUES
(6, 'Kerala State Electricity Board', 'cmdkseb@kseb.in', 'kseb3.png', 1),
(7, 'kerala water authority', 'kwa@gmail.com', 'kwa1.png', 1),
(8, 'Bharat Sanchar Nigam Limited', 'bsnl@gmail.com', 'bsnl_min1.png', 1),
(12, 'KPhone', 'KPhone@gmail.com', '13.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

DROP TABLE IF EXISTS `ebook`;
CREATE TABLE IF NOT EXISTS `ebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `date` varchar(12) NOT NULL,
  `amount` int(11) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`id`, `u_id`, `title`, `date`, `amount`, `st`) VALUES
(1, 16, 'book', '2021-07-10', 188, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`, `st`) VALUES
(3, 'sreejith', 'sreejithsreekantan97@gmail.com', '9496663365', 'good bill payment app', 1),
(4, 'sreeji ', 'sree@gmail.com', '8547519365', 'some error in the payment side', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `u_id`, `u_name`, `password`, `type`, `st`) VALUES
(9, 12, 'meenu@gmail.com', 'meenu1234', 'user', 0),
(12, 15, 'lekshmi@gmail.com', 'lekshmi123', 'user', 0),
(13, 2, 'bsnl@gmail.com', 'bsnl1234', 'department', 1),
(5, 1, 'admin@gmail.com', 'admin123456', 'admin', 1),
(10, 13, 'raj@gmail.com', 'raj12345', 'user', 0),
(23, 18, 'manu@gmail.com', 'manu123456', 'user', 0),
(16, 3, 'kwa@gmail.com', 'kwa12345', 'department', 1),
(18, 4, 'cmdkseb@kseb.in', 'kseb1234', 'department', 1),
(26, 0, 'KPhone@gmail.com', 'kphone123', 'department', 1),
(21, 16, 'sreejithsreekantan97@gmail.com', 'sreejith123', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `dob`, `email`, `phone`, `password`, `st`) VALUES
(16, 'sreejith s', '1997-01-11', 'sreejithsreekantan97@gmail.com', '9496663365', 'sreejith123', 1),
(15, 'lekshmi', '1999-06-28', 'lekshmi@gmail.com', '8745698574', 'lekshmi123', 1),
(12, 'meenu v', '2001-03-08', 'meenu@gmail.com', '8654789584', 'meenu1234', 1),
(13, 'rajkumar r', '1996-06-21', 'raj@gmail.com', '9020522250', 'raj12345', 1),
(18, 'manu', '2021-04-10', 'manu@gmail.com', '8965478547', 'manu123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_add`
--

DROP TABLE IF EXISTS `user_add`;
CREATE TABLE IF NOT EXISTS `user_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `key_id` varchar(20) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_add`
--

INSERT INTO `user_add` (`id`, `u_id`, `dept_id`, `key_id`, `st`) VALUES
(34, 12, 6, '34252535353535', 1),
(32, 16, 6, '2453626252525252', 1),
(33, 16, 8, '8575556555', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
