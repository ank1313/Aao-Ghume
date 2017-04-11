-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 06:06 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `c_fname` varchar(30) NOT NULL,
  `c_lname` varchar(30) NOT NULL,
  `cu_id` int(40) NOT NULL,
  `cusername` varchar(40) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `c_email` varchar(40) NOT NULL,
  `cphone_no` varchar(11) NOT NULL,
  `c_budget` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_fname`, `c_lname`, `cu_id`, `cusername`, `c_password`, `c_email`, `cphone_no`, `c_budget`) VALUES
('Gaurav', 'Aggarwal', 1, 'g123', 'g123', 'g123@gmail.com', '9876543210', '-1100'),
('Shubhank', 'Prabir', 2, 's123', 's123', 's123@gmail.com', '9878654321', '482676'),
('Pragesh', 'Trivedi', 3, 'p123', 'p123', 'p123@gmail.com', '9876543210', '90000'),
('Pankaj', 'Ahuja', 4, 'pankaj', 'pankaj', 'pankaj123@gmail.com', '9876543210', '4500'),
('Rohan', 'Mehrotra', 5, 'rohan123', 'rohan123', 'rohan@gmail.com', '9876543210', '45960'),
('Rohan', 'Mehrotra', 9, 'r123', '98uioiuy76', 'rohan', '9876543210', '4500'),
('Rohan', 'Mehrotra', 10, 'r123', 'werwerwerw', 'rohan', '9876543210', '8526'),
('Pankaj', 'Ahuja', 11, 'pankaj', 'pooiopoisd', 'pdsdas', '9876543210', '14560'),
('lavesh', 'khandelwal', 19, 'l123', 'polopkiuij', 'l123@gmail.com', '9876543210', '5485'),
('Anshul', 'Shrivastava', 22, 'anshul', 'anshulansh', 'anshul@gmail.com', '9876543210', '7895'),
('ank', 'kit', 25, 'ankk', 'qwertqwert', 'ankk@gmail.com', '9971675670', '69633'),
('prabal', 'rastogi', 26, 'prab', 'prabalprab', 'prab@gmail.com', '4355578978', '8900'),
('roshni', 'ahuja', 27, 'roshni', 'roshnirosh', 'roshni@gmail.com', '1234567890', '345000'),
('', '', 28, '', '', 'asdasd', '', ''),
('abcd', 'abcd', 29, 'abcd', 'abcdabcdab', 'abcd', '9898989898', '');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE IF NOT EXISTS `flight` (
  `fname` varchar(40) NOT NULL,
  `fno` int(11) NOT NULL,
  `fsource` varchar(40) NOT NULL,
  `fdestination` varchar(40) NOT NULL,
  `fprice` int(11) NOT NULL,
  `dstart` date NOT NULL,
  `class` varchar(40) NOT NULL,
  `tstart` time(6) NOT NULL,
  `tend` time(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`fname`, `fno`, `fsource`, `fdestination`, `fprice`, `dstart`, `class`, `tstart`, `tend`) VALUES
('indigo', 1, 'delhi', 'mumbai', 5675, '2015-12-20', 'economy', '05:15:00.000000', '09:15:00.000000'),
('spicejet', 2, 'mumbai ', 'delhi', 8767, '2015-12-20', 'economy', '14:00:00.000000', '16:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` int(11) NOT NULL,
  `tdate` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `tname` varchar(40) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `tdate`, `email`, `tname`, `price`) VALUES
(1, '2015-12-20', 's123', 'indigo', 0),
(2, '2015-12-20', 's123', 'indigo', 0),
(3, '2015-12-20', 's123', 'indigo', 0),
(4, '2015-12-20', 's123', 'abcd', 0),
(5, '2015-12-20', 's123', 'abcd', 0),
(6, '2015-12-20', 'ankk', 'indigo', 0),
(7, '2015-12-20', 's123', 'indigo', 0),
(8, '2015-12-20', 's123', 'indigo', 8776),
(9, '2015-12-20', 's123', 'indigo', 8776),
(10, '2015-12-20', 'g123', 'indigo', 8776),
(11, '2015-12-20', 'prab', 'indigo', 8900),
(12, '2015-12-20', '', 'jetairways', 13000),
(13, '2015-12-20', '', 'spicejet', 8888),
(14, '2015-12-20', 'g123', 'indigo', 8776),
(15, '2015-12-20', 's123', 'indigo', 8776),
(16, '2015-12-20', 'g123', 'indigo', 7900),
(17, '2015-12-20', 's123', 'jetairways', 39000),
(18, '2015-12-20', 'g123', 'indigo', 8900),
(19, '2015-12-20', 's123', 'indigo', 8776);

--
-- Triggers `order`
--
DELIMITER $$
CREATE TRIGGER `decreasebudget` BEFORE INSERT ON `order`
 FOR EACH ROW BEGIN
update customer set c_budget = c_budget - new.price where cusername= new.email;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE IF NOT EXISTS `transport` (
  `tname` varchar(10) NOT NULL,
  `tno` int(10) NOT NULL DEFAULT '0',
  `source` varchar(30) NOT NULL DEFAULT '',
  `destination` varchar(30) NOT NULL DEFAULT '',
  `price` int(11) DEFAULT NULL,
  `mode` varchar(10) DEFAULT NULL,
  `dstart` date DEFAULT NULL,
  `dend` date DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `tstart` time DEFAULT NULL,
  `tend` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`tname`, `tno`, `source`, `destination`, `price`, `mode`, `dstart`, `dend`, `class`, `tstart`, `tend`) VALUES
('indigo', 1, 'delhi', 'mumbai', 8776, 'flight', '2015-12-20', '2015-12-20', 'economy', '08:00:00', '10:30:00'),
('abcd', 2, 'delhi', 'mumbai', 9999, 'flight', '2015-12-20', '2015-12-20', 'economy', '08:30:00', '10:30:00'),
('spicejet', 3, 'mumbai', 'delhi', 8888, 'flight', '2015-12-20', '2015-12-21', 'economy', '14:00:00', '16:00:00'),
('jetairways', 4, 'delhi', 'mumbai', 13000, 'flight', '2015-12-20', '2015-12-21', 'business', '14:00:00', '16:00:00'),
('indigo', 5, 'delhi', 'kolkata', 8900, 'flight', '2015-12-20', '2015-12-21', 'economy', '05:00:00', '08:00:00'),
('indigo', 6, 'delhi', 'mumbai', 7900, 'flight', '2015-12-20', '2015-12-21', 'economy', '08:00:00', '10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`tno`,`destination`,`source`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cu_id` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `fno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
