-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2022 at 11:16 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaners`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutslidercontactdata`
--

DROP TABLE IF EXISTS `aboutslidercontactdata`;
CREATE TABLE IF NOT EXISTS `aboutslidercontactdata` (
  `idabout` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `aboutustext` text NOT NULL,
  `slidertext` varchar(100) NOT NULL,
  `contactaddress` varchar(100) NOT NULL,
  `contactphone` varchar(50) NOT NULL,
  `contactemail` varchar(50) NOT NULL,
  PRIMARY KEY (`idabout`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutslidercontactdata`
--

INSERT INTO `aboutslidercontactdata` (`idabout`, `title`, `aboutustext`, `slidertext`, `contactaddress`, `contactphone`, `contactemail`) VALUES
(1, 'About Us', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum 							', 'GET YOUR HOME CLEANED AT AN AFFORDDABLE PRICE', 'Address: Test test, 1001, Berlin', 'Phone: 9868769869', 'Email: test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `idcity` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`idcity`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`idcity`, `country`, `city`) VALUES
(1, 'Germany', 'Berlin'),
(2, 'Germany', 'Hamburg');

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

DROP TABLE IF EXISTS `cleaner`;
CREATE TABLE IF NOT EXISTS `cleaner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `vcpricepermeter` int(50) NOT NULL,
  `moping` varchar(50) NOT NULL,
  `mopingpricepermeter` int(50) NOT NULL,
  `bathroomcleaning` varchar(50) NOT NULL,
  `bathroomcleaningprice` int(50) NOT NULL,
  `kitchencleaning` varchar(50) NOT NULL,
  `kitchencleaningprice` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userright` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cleaner`
--

INSERT INTO `cleaner` (`id`, `firstname`, `lastname`, `email`, `phone`, `city`, `vcpricepermeter`, `moping`, `mopingpricepermeter`, `bathroomcleaning`, `bathroomcleaningprice`, `kitchencleaning`, `kitchencleaningprice`, `password`, `userright`) VALUES
(86, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'Yes', 0, '123', 'user'),
(113, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 9, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(111, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '1', 'user'),
(112, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(108, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(109, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 6, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(110, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(107, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '1', 'user'),
(106, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 5, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(105, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 3, 'No', 1, 'No', 0, 'No', 0, '123', 'user'),
(104, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'No', 1, 'No', 0, 'No', 0, '123', 'user'),
(103, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(102, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(101, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '1', 'user'),
(100, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 5, 'Yes', 7, 'Yes', 5, 'Yes', 2, '123', 'user'),
(99, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'Yes', 0, 'No', 0, '1', 'user'),
(114, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 7, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(115, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(116, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(117, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '1', 'user'),
(118, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(119, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(120, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(121, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '1', 'user'),
(122, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(123, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(124, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(125, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(126, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '1', 'user'),
(127, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(128, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(129, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(130, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(131, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(132, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '1', 'user'),
(133, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(134, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '1', 'admin'),
(135, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(136, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(137, 'Firstname', 'Lastname', 'ijjoiji@gmaill.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '123', 'user'),
(138, 'Firstname', 'Lastname', 'a@gmail.com', '4545', 'Berlin', 1, 'Yes', 1, 'No', 0, 'No', 0, '1', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
