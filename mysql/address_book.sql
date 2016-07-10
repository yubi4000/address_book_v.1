-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2016 at 05:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `address_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `first_name`, `last_name`, `nickname`) VALUES
(7, 'Marjan', 'StoÅ¡iÄ‡', 'Maki'),
(12, 'Michael', 'Algar', 'Olga'),
(14, 'Django', 'MaÄak', 'Djangula'),
(15, 'Kira', 'Pas', 'KiÄ‡a'),
(16, 'Marko', 'Kraljevic', 'Maki'),
(17, 'Yubi', 'Mi&scaron;kulovski', 'Maki');

-- --------------------------------------------------------

--
-- Table structure for table `person_details`
--

CREATE TABLE IF NOT EXISTS `person_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `street` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_1` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_2` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `person_details`
--

INSERT INTO `person_details` (`id`, `person_id`, `street`, `number`, `city`, `zip_code`, `country`, `email`, `phone_1`, `phone_2`) VALUES
(2, 7, 'Mihaila AvramoviÄ‡a', '3/3', 'NiÅ¡', '18000', 'England', 'mayica@gmail.com', '065000000', '056/556-52-96'),
(7, 12, 'Queen Alexandra Road', '235', 'Sunderland', '5462', 'England', 'olga@toydolls.com', '254654', '654879'),
(9, 14, 'KovanluÄka', '456', 'Apatin', '18000', 'Bolivia', 'mayvento@yahoo.com', '056/552-52-45', '012/123456'),
(10, 15, 'Dedinjska', '48', 'Krusevac', '20000', 'Bolivia', 'mayica@gmail.com', '065000000', '012/123456'),
(11, 16, 'Neka nova', '22', 'Bor', '21000', 'Kanada', 'yubi@gmail.com', '064/662-62-74', '25478'),
(12, 17, 'Ravna', '14/3', 'Apatin', '12555', 'England', 'mayvento@yahoo.com', '065000000', '25478');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
